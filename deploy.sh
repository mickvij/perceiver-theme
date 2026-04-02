#!/usr/bin/env bash
# deploy.sh — Upload gewijzigde theme-bestanden naar Strato via SFTP
# Gebruik: bash deploy.sh [--all]
#   --all  : upload alle bestanden (niet alleen gewijzigde)

CONFIG_FILE="$(dirname "$0")/.deploy-config"
LAST_DEPLOY_FILE="$(dirname "$0")/.last-deploy"
REMOTE_BASE="/STRATO-apps/wordpress_01/app/wp-content/themes/perceiver-theme"

# Bestanden die NIET naar de server gaan (docs, dev-only)
EXCLUDE_PATTERN='\.(md|docx)$|^\.gitignore$'

# --- Config laden ---
if [ ! -f "$CONFIG_FILE" ]; then
  echo "ERROR: .deploy-config niet gevonden. Maak dit bestand aan (zie .deploy-config.example)."
  exit 1
fi
source "$CONFIG_FILE"

# --- Bepaal welke bestanden te uploaden ---
if [ "$1" = "--all" ] || [ ! -f "$LAST_DEPLOY_FILE" ]; then
  echo "→ Uploading alle bestanden..."
  FILES=$(git ls-files | grep -vE "$EXCLUDE_PATTERN")
else
  LAST_COMMIT=$(cat "$LAST_DEPLOY_FILE")
  echo "→ Uploading bestanden gewijzigd since $LAST_COMMIT..."
  FILES=$(git diff --name-only "$LAST_COMMIT" HEAD | grep -vE "$EXCLUDE_PATTERN")
  if [ -z "$FILES" ]; then
    echo "✓ Geen wijzigingen om te deployen."
    exit 0
  fi
fi

CURRENT_COMMIT=$(git rev-parse --short HEAD)
echo "→ Deploying commit $CURRENT_COMMIT"
echo ""

# --- Upload elk bestand ---
FAILED=0
while IFS= read -r file; do
  [ -z "$file" ] && continue
  if [ ! -f "$file" ]; then
    echo "  SKIP (niet lokaal gevonden): $file"
    continue
  fi

  REMOTE_PATH="sftp://$SFTP_HOST/$REMOTE_BASE/$file"

  sleep 0.5
  curl -k -s --retry 3 --retry-delay 2 -T "$file" "$REMOTE_PATH" --user "$SFTP_USER:$SFTP_PASS"
  EXIT=$?

  if [ $EXIT -eq 0 ]; then
    echo "  ✓ $file"
  else
    echo "  ✗ FOUT (curl exit $EXIT): $file"
    FAILED=$((FAILED + 1))
  fi
done <<< "$FILES"

echo ""
if [ $FAILED -gt 0 ]; then
  echo "⚠ Deploy klaar met $FAILED fout(en)."
  exit 1
else
  git rev-parse HEAD > "$LAST_DEPLOY_FILE"
  echo "✓ Deploy succesvol! ($CURRENT_COMMIT → Strato)"
fi

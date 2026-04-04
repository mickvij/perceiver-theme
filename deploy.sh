#!/usr/bin/env bash
# deploy.sh — Upload gewijzigde theme-bestanden naar Strato via SFTP
# Gebruik:
#   bash deploy.sh              → deploy naar PRODUCTIE (alleen gewijzigde bestanden)
#   bash deploy.sh --all        → deploy alles naar PRODUCTIE
#   bash deploy.sh --staging    → deploy naar STAGING
#   bash deploy.sh --staging --all → deploy alles naar STAGING

SCRIPT_DIR="$(dirname "$0")"
LAST_DEPLOY_PROD="$SCRIPT_DIR/.last-deploy"
LAST_DEPLOY_STAGING="$SCRIPT_DIR/.last-deploy-staging"
REMOTE_BASE="/STRATO-apps/wordpress_01/app/wp-content/themes/perceiver-theme"

# Bestanden die NIET naar de server gaan
EXCLUDE_PATTERN='\.(md|docx)$|^\.gitignore$|^tests/|^\.github/'

# --- Flags verwerken ---
STAGING=false
DEPLOY_ALL=false
for arg in "$@"; do
  case $arg in
    --staging) STAGING=true ;;
    --all)     DEPLOY_ALL=true ;;
  esac
done

# --- Config laden ---
if [ "$STAGING" = true ]; then
  CONFIG_FILE="$SCRIPT_DIR/.deploy-config.staging"
  LAST_DEPLOY_FILE="$LAST_DEPLOY_STAGING"
  LABEL="STAGING"
else
  CONFIG_FILE="$SCRIPT_DIR/.deploy-config"
  LAST_DEPLOY_FILE="$LAST_DEPLOY_PROD"
  LABEL="PRODUCTIE"
fi

if [ ! -f "$CONFIG_FILE" ]; then
  echo "ERROR: $CONFIG_FILE niet gevonden."
  if [ "$STAGING" = true ]; then
    echo "Maak .deploy-config.staging aan (kopieer .deploy-config.staging.example en vul in)."
  fi
  exit 1
fi
source "$CONFIG_FILE"

echo "→ Deploying naar: $LABEL"

# --- Bepaal welke bestanden te uploaden ---
if [ "$DEPLOY_ALL" = true ] || [ ! -f "$LAST_DEPLOY_FILE" ]; then
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

  sleep 0.3
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
  echo "✓ Deploy succesvol! ($CURRENT_COMMIT → $LABEL)"
fi

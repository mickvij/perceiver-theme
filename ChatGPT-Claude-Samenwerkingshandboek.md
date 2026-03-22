# ChatGPT + Claude Samenwerkingshandboek
## Een diepgaand, kritisch en direct toepasbaar systeem voor handmatige dual-model samenwerking

---

# 1. Executive Conclusion

**De eerlijke conclusie vooraf:** voor 75–80% van alle taken levert een goed geprompt enkel model hetzelfde of beter resultaat dan twee modellen met handmatige copy-paste. De copy-paste-belasting (5–15 minuten per ronde, contextverlies, tokenkosten) is reëel en wordt structureel onderschat.

**Waar dual-model wél superieur is**, en dat zijn de overige 20–25%, betreft het situaties waar:

- Er meerdere verdedigbare maar tegenstrijdige benaderingen bestaan en je niet weet welke beter is.
- De inzet hoog is: een strategisch besluit, een architectuurkeuze, een contractonderhandeling.
- Je blind spots wilt opsporen die één enkel model — hoe goed geprompt ook — niet uit zichzelf blootlegt.
- Je een devil's advocate nodig hebt die niet "beleefd mee-denkt" maar echt tegenspreekt.

**Mijn stellingname:** gebruik standaard één model met een sterke promptstructuur. Schakel alleen naar dual-model wanneer je een concreet beslismoment hebt waarvan je voelt dat je niet zeker genoeg bent. Behandel de dual-model workflow als een gereedschap voor specifieke momenten, niet als je standaardwerkwijze.

**Het beste samenwerkingsmodel:** de Architect-Critic workflow met Claude als architect/structuurdenker en ChatGPT als creatieve generator/challenger. Twee tot drie rondes. Niet meer, tenzij er na ronde drie nog fundamentele onenigheid is over een kernpunt.

---

# 2. Wanneer ChatGPT + Claude zinvol is — en wanneer niet

## Wanneer WEL (de "dual-model zone")

| Situatie | Waarom dual-model helpt | Voorbeeld |
|----------|------------------------|-----------|
| **Hoge-inzet strategische besluiten** | Twee verschillende "denkstijlen" vangen meer risico's | Go-to-market strategie, pricing model |
| **Architectuurkeuzes met trade-offs** | Elk model benadrukt andere trade-offs | Monolith vs microservices, tech stack keuze |
| **Contractuele/juridische denkkaders** | Eén model vanuit belang A, ander vanuit belang B | Samenwerkingsovereenkomst, SLA-ontwerp |
| **Complexe businessplannen** | Divergent denken + convergent kritiek | Nieuw product lanceren, pivot-besluit |
| **Wanneer je vast zit** | Tweede perspectief doorbreekt tunnelvisie | Je hebt 3 uur met ChatGPT gewerkt en twijfelt nog |

## Wanneer NIET (de "overhead-valkuil")

| Situatie | Waarom niet | Beter alternatief |
|----------|-------------|-------------------|
| **Standaard copywriting** | Stijlverschil tussen modellen verstoort coherentie | Eén model, meerdere iteraties |
| **Rechttoe-rechtaan coding** | Context-overdracht kost meer dan de debugwinst | Eén model met goede foutafhandeling |
| **Feitelijke research** | Twee modellen geven dezelfde zoekresultaten | Eén model + websearch |
| **Simpele analyses** | Overhead weegt niet op | Eén model met chain-of-thought |
| **Taken onder 30 minuten** | Copy-paste frictie > tijdwinst | Eén model met interne rollen |
| **Wanneer je al zeker bent** | Je zoekt bevestiging, geen verbetering | Gewoon doen |

## De beslisboom

```
Vraag jezelf:
│
├─ Is dit een besluit met significante consequenties?
│  ├─ NEE → Gebruik één model
│  └─ JA → Volgende vraag
│
├─ Zijn er meerdere verdedigbare benaderingen?
│  ├─ NEE → Gebruik één model, het antwoord is vrij duidelijk
│  └─ JA → Volgende vraag
│
├─ Voel ik onzekerheid over welke benadering beter is?
│  ├─ NEE → Gebruik één model, je hebt al een richting
│  └─ JA → DUAL-MODEL is zinvol
│
└─ Heb ik meer dan 45 minuten beschikbaar?
   ├─ NEE → Gebruik één model met interne critic-rol
   └─ JA → Start dual-model workflow
```

---

# 3. Vergelijking van samenwerkingsmodellen

Ik heb zeven modellen geëvalueerd op vier criteria: kwaliteit van eindresultaat, handmatige werklast, risico op context-degradatie, en breedte van toepasbaarheid.

## Model 1: Debat (A en B beargumenteren tegengestelde posities)

**Werking:** Beide modellen krijgen dezelfde vraag maar tegenovergestelde standpunten, jij synthetiseert.

**Oordeel: Matig.** Klinkt intellectueel aantrekkelijk, maar werkt slecht in de praktijk. Modellen gaan "advocaat spelen" voor hun toegewezen positie in plaats van genuanceerd te denken. Je krijgt twee eenzijdige betogen in plaats van twee doordachte analyses. De synthese is volledig jouw werk, en dat is precies het moeilijke stuk.

**Score:** Kwaliteit 5/10 | Werklast 7/10 (hoog) | Contextbehoud 4/10 | Breedte 3/10

## Model 2: Generator-Reviewer (A maakt, B beoordeelt)

**Werking:** Model A produceert een eerste versie, Model B krijgt die versie en geeft gestructureerde feedback, Model A verwerkt de feedback.

**Oordeel: Goed, maar eenzijdig.** Werkt prima voor documenten, plannen en code. Zwakte: Model B heeft geen eigenaarschap en geeft vaak oppervlakkige kritiek ("je zou nog kunnen overwegen...") in plaats van fundamentele feedback.

**Score:** Kwaliteit 7/10 | Werklast 5/10 (gemiddeld) | Contextbehoud 7/10 | Breedte 7/10

## Model 3: Architect-Critic (A ontwerpt structuur, B valt aan)

**Werking:** Model A ontwerpt een gestructureerd plan/antwoord. Model B krijgt de expliciete opdracht om zwakheden, risico's en blinde vlekken te identificeren — niet om te "verbeteren" maar om te "breken". Model A verwerkt de kritiek in een definitieve versie.

**Oordeel: Het sterkste model voor de meeste taken.** De sleutel is dat Model B niet beleefd hoeft te zijn. Het moet actief zoeken naar wat fout kan gaan. Dit levert daadwerkelijk nieuwe inzichten op die je met één model niet krijgt.

**Score:** Kwaliteit 9/10 | Werklast 5/10 (gemiddeld) | Contextbehoud 8/10 | Breedte 8/10

## Model 4: Divergent-Convergent (A brainstormt breed, B selecteert en structureert)

**Werking:** Model A genereert zoveel mogelijk opties, invalshoeken, ideeën. Model B selecteert, filtert, prioriteert en structureert.

**Oordeel: Goed voor creatieve taken, minder voor analytische.** Werkt uitstekend voor productontwerp, marketingstrategieën, naamgeving. Minder geschikt wanneer het probleem goed gedefinieerd is en je diepgang nodig hebt, geen breedte.

**Score:** Kwaliteit 7/10 | Werklast 4/10 (laag) | Contextbehoud 6/10 | Breedte 5/10

## Model 5: Parallelle onafhankelijke aanpak (beide los, jij vergelijkt)

**Werking:** Beide modellen krijgen exact dezelfde opdracht. Jij vergelijkt de resultaten en pikt het beste.

**Oordeel: Verrassend effectief voor specifieke situaties.** Geen iteratie nodig, dus lage werklast. Werkt goed wanneer je twee concrete output-opties wilt vergelijken (twee versies van een email, twee architectuurvoorstellen). Werkt niet wanneer je diepgang zoekt.

**Score:** Kwaliteit 6/10 | Werklast 3/10 (laag) | Contextbehoud 9/10 | Breedte 4/10

## Model 6: Judge-Synthese (A en B werken, C — jij of een model — oordeelt)

**Werking:** Beide modellen produceren hun beste antwoord. Je stuurt beide naar één model met de opdracht om te synthetiseren.

**Oordeel: Theoretisch sterk, praktisch fragiel.** Het synthese-model heeft enorm veel context nodig (twee volledige antwoorden plus de oorspronkelijke vraag). Dit werkt alleen als je de antwoorden eerst comprimeert, en daarbij gaat nuance verloren.

**Score:** Kwaliteit 7/10 | Werklast 6/10 | Contextbehoud 5/10 | Breedte 6/10

## Model 7: Hybride rolwisseling (rollen wisselen per ronde op basis van taaktype)

**Werking:** In ronde 1 is A de generator, in ronde 2 wisselen de rollen, in ronde 3 synthetiseert het model dat het sterkst is op het specifieke taaktype.

**Oordeel: Te complex voor handmatige copy-paste.** In theorie optimaal, in de praktijk raak je als mens de draad kwijt over wie welke rol heeft en waarom. De mentale overhead weegt niet op tegen de marginale kwaliteitswinst.

**Score:** Kwaliteit 8/10 | Werklast 8/10 (hoog) | Contextbehoud 5/10 | Breedte 7/10

## Conclusie vergelijking

**Winnaar: Model 3 (Architect-Critic)** als standaard, met Model 5 (Parallelle aanpak) als snel alternatief wanneer je weinig tijd hebt. Model 4 (Divergent-Convergent) voor puur creatieve taken.

---

# 4. De aanbevolen standaardworkflow: Architect-Critic

## Waarom dit model wint

Drie redenen waarom Architect-Critic superieur is aan de alternatieven:

**Reden 1: Het voorkomt "beleefd mee-denken."** Wanneer je een model vraagt om iets te reviewen, krijg je vaak oppervlakkige aanvullingen. Wanneer je een model expliciet de opdracht geeft om aan te vallen, krijg je fundamentele kritiek. Dat is het verschil tussen "je zou ook nog X kunnen overwegen" en "je aanname over X klopt niet, want Y."

**Reden 2: Het past bij hoe goede besluitvorming werkt.** In organisaties is de beste besluitvorming niet "iedereen brainstormt samen" maar "iemand bouwt een voorstel, iemand anders schiet erop." Dit is het red team principe.

**Reden 3: Het is praktisch uitvoerbaar in 2-3 rondes.** Je hebt een helder begin (architectuur), een helder midden (kritiek), en een helder einde (verwerking). Geen eindeloze heen-en-weer.

## Rolverdeling

### Claude als Architect (eerste denker)

Waarom Claude in deze rol: Claude is sterker in gestructureerd denken, expliciet redeneren, en het benoemen van aannames. Claude's antwoorden zijn typisch meer gestructureerd en minder "verhalend", wat een betere basis geeft om op te schieten.

### ChatGPT als Critic (aanvaller)

Waarom ChatGPT in deze rol: ChatGPT is breder associatief, brengt vaker onverwachte invalshoeken in, en is sterker in het genereren van scenario's en edge cases. ChatGPT als critic levert diversere kritiekpunten op dan Claude in dezelfde rol.

### Wanneer de rollen wisselen

Wissel de rollen wanneer:
- De taak primair creatief is (marketing, naming, concepting) → ChatGPT als generator, Claude als structureerder.
- De taak primair technisch is (code-architectuur, debugging) → Claude als bouwer, ChatGPT als reviewer op gebruikerservaring en edge cases.
- Je al drie keer dezelfde workflow hebt gedaan → wissel om te testen of de andere volgorde betere resultaten geeft.

## De drie-ronde structuur

### Ronde 1: Architectuur (Claude)

**Doel:** Een gestructureerd, verdedigbaar eerste antwoord dat expliciet maakt WAT er wordt voorgesteld, WAAROM, en op welke AANNAMES het rust.

**Wat je naar Claude stuurt:** Je oorspronkelijke opdracht + het gestructureerde outputformat (zie sectie 7).

**Gewenste output:** 400–800 woorden. Geen essays. Concrete structuur.

**Stopcriteria:** Als Claude's antwoord al zo overtuigend is dat je geen twijfels hebt → stop. Gebruik het. Niet elke taak verdient drie rondes.

### Ronde 2: Kritiek (ChatGPT)

**Doel:** Actief zoeken naar zwakheden, ontbrekende perspectieven, riskante aannames en betere alternatieven.

**Wat je naar ChatGPT stuurt:** Claude's antwoord + het critic-prompt (zie sectie 7).

**Gewenste output:** 300–600 woorden. Alleen punten die daadwerkelijk iets veranderen aan de conclusie. Geen herhalingen van wat Claude al zei.

**Stopcriteria:** Als ChatGPT's kritiek alleen cosmetisch is ("je zou ook nog..." zonder onderbouwing) → de architectuur was al sterk genoeg. Stop na deze ronde.

### Ronde 3: Synthese en verwerking (Claude)

**Doel:** De kritiek verwerken in een definitief, verbeterd antwoord. Expliciet aangeven welke kritiekpunten zijn verwerkt, welke verworpen (met reden), en wat het definitieve antwoord is.

**Wat je naar Claude stuurt:** Claude's oorspronkelijke antwoord + ChatGPT's kritiek + het synthese-prompt (zie sectie 7).

**Gewenste output:** 500–1000 woorden. Dit is het eindproduct.

**Stopcriteria:** Na ronde 3 stop je. Als je na drie rondes nog fundamenteel onzeker bent, is het probleem niet op te lossen met meer rondes — je hebt dan waarschijnlijk meer informatie nodig, geen meer iteratie.

### Uitzondering: Ronde 4 (alleen bij fundamentele onenigheid)

Voeg alleen een vierde ronde toe als er na ronde 3 een specifiek kernpunt is waarover de modellen fundamenteel van mening verschillen EN dat punt cruciaal is voor je beslissing. Stuur dan alleen dat ene punt naar ChatGPT met de vraag: "Claude heeft jouw kritiek op punt X verworpen met deze argumentatie. Wat is je reactie specifiek hierop?"

---

# 5. Rolverdeling per taaktype

| Taaktype | Aanbevolen model | Rol Claude | Rol ChatGPT | Rondes |
|----------|-----------------|------------|-------------|--------|
| **Strategische analyse** | Architect-Critic | Architect: structuur, frameworks, trade-offs | Critic: blinde vlekken, scenario's, risico's | 3 |
| **Businessplan** | Architect-Critic | Architect: structuur, financiële logica | Critic: marktrisico's, concurrentie-gaps | 3 |
| **Technische architectuur** | Architect-Critic | Architect: systeemontwerp, componentkeuzes | Critic: schaalbaarheid, edge cases, operationele risico's | 2–3 |
| **Software/coding** | Meestal één model | Primair model: schrijf de code | Review alleen bij architectuurkeuzes, niet per functie | 1–2 |
| **Debugging** | Één model | — | — | 1 |
| **Marketing/positionering** | Divergent-Convergent | Convergent: selecteer, structureer, positioneer | Divergent: genereer opties, invalshoeken, hooks | 2 |
| **Copywriting** | Parallel of één model | Versie A | Versie B, jij kiest | 1 |
| **Juridisch/contractueel** | Architect-Critic | Architect: contractstructuur, risico-analyse | Critic: tegenstander-perspectief, exploits | 3 |
| **Productontwerp** | Divergent-Convergent | Convergent: prioriteer, MVP-scope, haalbaarheid | Divergent: features, use cases, edge cases | 2–3 |
| **Research en synthese** | Parallel → synthese | Onderzoekshoek A | Onderzoekshoek B, synthese door één model | 2 |
| **Besluitvorming met trade-offs** | Architect-Critic | Architect: beslisframework, criteria, weging | Critic: ontbrekende criteria, bias-check, alternatieven | 3 |

### Toelichting coding en debugging

Ik raad bewust af om voor standaard coding twee modellen te gebruiken. De reden: code vereist exacte context (variabelenamen, imports, projectstructuur) die bijna onmogelijk lossless over te dragen is via copy-paste. Wat je wint aan "een tweede paar ogen" verlies je aan context-degradatie. Uitzondering: architectuurbeslissingen ("moeten we een message queue gebruiken of directe API calls?") — daar helpt het wel.

---

# 6. Copy-paste protocol stap voor stap

## Het kernprobleem bij copy-paste

Elke keer dat je tekst van het ene model naar het andere kopieert, verlies je:

- **Conversatiecontext:** het ontvangende model weet niet wat er eerder besproken is.
- **Toon en intentie:** subtiliteiten in de opdracht gaan verloren.
- **Impliciete kennis:** het genererende model wist dingen die het niet expliciet noemde.

## De oplossing: het Context Transfer Block

Gebruik altijd dit standaardblok wanneer je output van het ene model naar het andere stuurt. Dit blok geeft het ontvangende model net genoeg context om zinvol te reageren zonder dat je hele conversaties hoeft over te typen.

```
=== CONTEXT TRANSFER ===
OORSPRONKELIJKE OPDRACHT:
[Kopieer hier je oorspronkelijke vraag/opdracht in 2-3 zinnen]

HUIDIGE STAND:
[Kopieer hier het antwoord van het andere model — ingekort als het langer
is dan 800 woorden. Behoud kernpunten, verwijder herhalingen]

JOUW ROL:
[Specificeer wat je van dit model verwacht — zie promptbibliotheek]

SPECIFIEKE FOCUS:
[Optioneel: benoem 1-3 punten waar je twijfel over hebt]
=== EINDE CONTEXT ===
```

## Stap-voor-stap protocol

### Stap 1: Start bij Claude (Architect-rol)

Stuur Claude je opdracht met het outputformat uit sectie 7. Voeg niets extra's toe. Laat Claude vrij werken.

### Stap 2: Verwerk Claude's antwoord

Lees Claude's antwoord. Markeer voor jezelf: "Wat vind ik hier sterk? Waar twijfel ik?" Dat helpt je bij het formuleren van de focus voor ChatGPT.

### Stap 3: Stuur naar ChatGPT (Critic-rol)

Gebruik het Context Transfer Block. Kopieer Claude's antwoord (ingekort als nodig). Gebruik het critic-prompt uit sectie 7.

**Belangrijk: kort Claude's antwoord in als het langer is dan 800 woorden.** Verwijder voorbeelden en herhalingen, behoud kernargumenten en conclusies. Dit bespaart tokens en dwingt je om te focussen op wat ertoe doet.

### Stap 4: Verwerk ChatGPT's kritiek

Lees de kritiek. Scheid in je hoofd: "nieuwe inzichten" (waardevol) versus "cosmetische opmerkingen" (negeren) versus "fundamentele bezwaren" (cruciaal).

### Stap 5: Terug naar Claude (Synthese-rol)

Stuur Claude het oorspronkelijke antwoord + de relevante kritiekpunten. Gebruik het synthese-prompt uit sectie 7. Laat cosmetische kritiek weg — dat is ruis.

### Stap 6: Evalueer het eindresultaat

Lees Claude's synthese. Als je tevreden bent: klaar. Als er één specifiek punt is dat je nog niet overtuigt: stuur alleen dat punt naar ChatGPT voor een gerichte reactie (ronde 4). Als je überhaupt niet tevreden bent: het probleem is waarschijnlijk je oorspronkelijke opdracht, niet het aantal rondes.

## Tips om context-degradatie te voorkomen

1. **Kopieer nooit hele gesprekken.** Alleen het laatst relevante antwoord + je oorspronkelijke vraag.
2. **Nummer je kernpunten.** Dit maakt het voor het ontvangende model makkelijker om specifiek te reageren.
3. **Verwijder beleefdheden.** Zinnen als "dat is een goede vraag" of "laten we dit stap voor stap bekijken" zijn ruis. Verwijder ze bij het kopiëren.
4. **Gebruik het Context Transfer Block consequent.** Het ontvangende model weet dan altijd wat de opdracht is, wat de stand is, en wat er verwacht wordt.

---

# 7. Exacte prompts en templates

## PROMPT 1: Startprompt voor Claude (Architect-rol)

```
Je bent een senior strategisch denker. Ik geef je een complexe opdracht. Jouw taak is om een
gestructureerd, verdedigbaar antwoord te geven.

OPDRACHT:
[Plak hier je opdracht]

Geef je antwoord in exact dit format:

KERNANTWOORD (max 3 zinnen):
[Je belangrijkste conclusie of aanbeveling]

ONDERBOUWING (max 5 punten):
1. [Argument + waarom dit relevant is]
2. [...]

AANNAMES:
- [Elke aanname die je maakt, expliciet benoemd]

RISICO'S EN ZWAKHEDEN:
- [Wat kan er mis gaan met jouw aanbeveling?]

ALTERNATIEVEN DIE IK HEB OVERWOGEN MAAR AFGEWEZEN:
- [Alternatief] → [Waarom afgewezen]

OPEN VRAGEN:
- [Wat zou je nog willen weten om zekerder te zijn?]

Wees concreet. Geen vaagheden. Neem een duidelijke positie in.
```

## PROMPT 2: Startprompt voor ChatGPT (als ChatGPT de Architect is)

```
Je bent een creatieve strategische denker. Ik geef je een complexe opdracht. Jouw taak is om een
breed maar gestructureerd antwoord te geven met meerdere invalshoeken.

OPDRACHT:
[Plak hier je opdracht]

Geef je antwoord in exact dit format:

KERNANTWOORD (max 3 zinnen):
[Je belangrijkste conclusie of aanbeveling]

ONDERBOUWING (max 5 punten):
1. [Argument + waarom dit relevant is]
2. [...]

AANNAMES:
- [Elke aanname die je maakt, expliciet benoemd]

RISICO'S EN ZWAKHEDEN:
- [Wat kan er mis gaan met jouw aanbeveling?]

ALTERNATIEVEN DIE IK HEB OVERWOGEN MAAR AFGEWEZEN:
- [Alternatief] → [Waarom afgewezen]

OPEN VRAGEN:
- [Wat zou je nog willen weten om zekerder te zijn?]

Wees concreet. Geen vaagheden. Neem een duidelijke positie in.
```

## PROMPT 3: Critic-prompt (voor het model dat kritiek moet leveren)

```
=== CONTEXT TRANSFER ===
OORSPRONKELIJKE OPDRACHT:
[Plak je opdracht in 2-3 zinnen]

HUIDIGE STAND:
Het andere AI-model heeft de volgende analyse/aanbeveling opgesteld:

[Plak het antwoord van het architect-model hier]

JOUW ROL:
Je bent een kritische reviewer. Je taak is NIET om te verbeteren of aan te vullen.
Je taak is om aan te vallen. Zoek actief naar:
- Aannames die niet kloppen of niet onderbouwd zijn
- Risico's die niet benoemd zijn
- Scenario's waarin deze aanbeveling faalt
- Alternatieven die ten onrechte zijn afgewezen
- Logische fouten in de redenering
- Wat er ontbreekt dat cruciaal is

SPECIFIEKE FOCUS:
[Optioneel: benoem 1-3 punten waar je zelf al twijfel over hebt]
=== EINDE CONTEXT ===

Geef je kritiek in dit format:

FUNDAMENTELE BEZWAREN (punten die de conclusie zouden veranderen):
1. [Bezwaar + waarom dit de conclusie ondermijnt]

SIGNIFICANTE RISICO'S (niet benoemd in het origineel):
1. [Risico + waarschijnlijkheid + impact]

ZWAKSTE AANNAME:
[Welke aanname is het kwetsbaarst en waarom?]

BESTE NIET-GEKOZEN ALTERNATIEF:
[Welk alternatief verdient meer aandacht en waarom?]

MIJN OORDEEL:
[Is de kernconclsie van het origineel houdbaar? Ja/Nee/Deels, en waarom?]

Wees scherp. Geen beleefdheidsaanvullingen. Als het antwoord sterk is, zeg dat en benoem
alleen echte zwakheden. Doe niet alsof er altijd kritiek moet zijn.
```

## PROMPT 4: Synthese-prompt (voor het model dat de eindversie maakt)

```
=== CONTEXT TRANSFER ===
OORSPRONKELIJKE OPDRACHT:
[Plak je opdracht in 2-3 zinnen]

JOUW EERDERE ANTWOORD:
[Plak het oorspronkelijke architect-antwoord hier]

KRITIEK VAN HET ANDERE MODEL:
[Plak de relevante kritiekpunten hier — laat cosmetische opmerkingen weg]

JOUW ROL:
Verwerk de kritiek in een definitief, verbeterd antwoord.
=== EINDE CONTEXT ===

Geef je synthese in dit format:

VERWERKTE KRITIEK:
- [Kritiekpunt] → [Hoe verwerkt en waarom]

VERWORPEN KRITIEK:
- [Kritiekpunt] → [Waarom verworpen, met argumentatie]

DEFINITIEF ANTWOORD:
[Je verbeterde kernantwoord, inclusief verwerkte kritiek. Dit is het eindproduct.
Schrijf het als zelfstandig leesbaar document — niet als diff of update.]

RESTERENDE ONZEKERHEID:
[Wat blijft onzeker, ook na deze analyse?]

CONFIDENCE LEVEL: [Hoog / Gemiddeld / Laag]
[Eén zin uitleg waarom]
```

## PROMPT 5: Compress Context (wanneer je een lang antwoord moet inkorten voor transfer)

```
Comprimeer het volgende antwoord tot maximaal 300 woorden. Behoud:
- De kernconclsie letterlijk
- Alle genoemde aannames
- De drie belangrijkste argumenten
- Alle genoemde risico's
Verwijder: voorbeelden, herhalingen, inleidingen, afsluitingen, beleefdheden.

[Plak het lange antwoord hier]
```

## PROMPT 6: Identify Disagreements Only

```
=== CONTEXT TRANSFER ===
Hieronder staan twee antwoorden op dezelfde vraag, van twee verschillende AI-modellen.

ANTWOORD MODEL A:
[Plak antwoord A]

ANTWOORD MODEL B:
[Plak antwoord B]
=== EINDE CONTEXT ===

Identificeer ALLEEN de punten waarop deze twee antwoorden van mening verschillen.
Negeer alle overlap. Geef per meningsverschil:

PUNT VAN ONENIGHEID [nummer]:
- Positie Model A: [in 1 zin]
- Positie Model B: [in 1 zin]
- Wie heeft sterker argument: [A/B/onduidelijk, met reden in 1 zin]
```

## PROMPT 7: Merge Both Views

```
=== CONTEXT TRANSFER ===
OORSPRONKELIJKE VRAAG:
[Plak je vraag]

ANTWOORD MODEL A:
[Plak antwoord A — ingekort tot max 400 woorden]

ANTWOORD MODEL B:
[Plak antwoord B — ingekort tot max 400 woorden]
=== EINDE CONTEXT ===

Maak één definitief antwoord dat het beste uit beide combineert.
Waar ze het eens zijn: neem het over zonder herhaling.
Waar ze het oneens zijn: kies een positie en onderbouw waarom.

Geef het antwoord in het standaard outputformat:
KERNANTWOORD:
ONDERBOUWING:
AANNAMES:
RISICO'S:
CONFIDENCE LEVEL:
```

## PROMPT 8: Eindbeslissing (wanneer je na alle rondes wilt afsluiten)

```
Op basis van alle voorgaande analyse, geef me:

1. JE DEFINITIEVE AANBEVELING in maximaal 3 zinnen.
2. DE ÉNE REDEN waarom dit de beste keuze is.
3. HET GROOTSTE RISICO van deze keuze en hoe dat te mitigeren.
4. WAT IK NU CONCREET MOET DOEN — eerste drie actiestappen.
```

---

# 8. Stopregels en beslisregels

## Wanneer je slechts één model moet gebruiken

- De taak is helder en eenduidig.
- Je hebt minder dan 30 minuten.
- Het gaat om uitvoering, niet om besluitvorming.
- Het gaat om pure feitenreproductie of standaardformaten.
- Je bent al >80% zeker van de richting.

## Wanneer twee modellen zinvol zijn

- Je staat voor een keuze met meerdere verdedigbare opties.
- De consequenties van een verkeerde keuze zijn significant.
- Je eigen expertise op het domein is beperkt.
- Je merkt dat je in cirkels denkt.
- Je hebt het gevoel dat je iets over het hoofd ziet.

## Wanneer een extra ronde nog waarde toevoegt

- Er is na de vorige ronde een specifiek, concreet punt van onenigheid dat cruciaal is voor je beslissing.
- Het model heeft in de vorige ronde een nieuw argument aangedragen dat je niet eerder had overwogen.
- Je confidence level is nog "Laag" na de synthese.

## Wanneer je MOET stoppen

**Stop na ronde 3 als:**
- De modellen het in grote lijnen eens zijn.
- De kritiek in ronde 2 was overwegend cosmetisch.
- Je confidence level is "Gemiddeld" of hoger.

**Stop eerder als:**
- Na ronde 1: het antwoord is al overtuigend en compleet. Bespaar jezelf de moeite.
- Na ronde 2: de kritiek is zwak of herhaalt punten die het architect-model al had benoemd.

**Stop en herformuleer je vraag als:**
- Beide modellen geven vage, algemene antwoorden → je vraag is te breed.
- De antwoorden gaan een andere kant op dan je bedoelde → je opdracht is onduidelijk.
- De modellen beginnen zichzelf te herhalen → er is geen nieuwe informatie meer te halen.

## Wanneer de modellen te veel overlap geven

Als beide modellen in essentie hetzelfde zeggen, is dat geen teken dat het antwoord goed is — het is een teken dat je de dual-model workflow niet nodig had. Noteer dit voor de toekomst: dit type taak kun je met één model af.

## Wanneer je van workflow moet wisselen

- Als het Architect-Critic model na 2 rondes alleen cosmetische verbeteringen oplevert → schakel naar Parallel voor een frisse blik.
- Als Parallel twee bijna identieke antwoorden geeft → schakel naar Divergent-Convergent voor meer variatie.
- Als je merkt dat je meer dan 50% van je tijd kwijt bent aan copy-paste → gebruik één model met interne rollen.

---

# 9. Veelgemaakte fouten en hoe die te voorkomen

## Fout 1: Te veel kopiëren

**Wat er gebeurt:** Je kopieert het volledige gesprek inclusief alle inleidingen, aanlopen en herhalingen naar het andere model. Het ontvangende model raakt overspoeld en geeft een generiek antwoord.

**Oplossing:** Gebruik altijd het Context Transfer Block. Kopieer alleen het kernantwoord en de expliciet genoemde aannames/risico's. Alles onder 800 woorden.

## Fout 2: Geen rol toewijzen

**Wat er gebeurt:** Je stuurt ChatGPT het antwoord van Claude met alleen "wat vind je hiervan?" ChatGPT geeft een beleefd "dat ziet er goed uit, je zou ook nog kunnen overwegen..."

**Oplossing:** Geef altijd een expliciete rol. "Je bent een kritische reviewer. Je taak is om aan te vallen, niet aan te vullen."

## Fout 3: Eindeloos heen-en-weer

**Wat er gebeurt:** Na ronde 3 denk je "nog één rondje, misschien wordt het beter." Na ronde 5 heb je 2 uur besteed en een antwoord dat nauwelijks beter is dan na ronde 2.

**Oplossing:** Hard maximum van 3 rondes. Uitzondering alleen bij één specifiek punt van fundamentele onenigheid.

## Fout 4: De synthese overslaan

**Wat er gebeurt:** Je hebt Claude's plan en ChatGPT's kritiek, en je probeert zelf de synthese te doen. Maar dat is precies het moeilijke stuk.

**Oplossing:** Laat altijd een model de synthese doen met het synthese-prompt. Dat is waar de echte waarde zit.

## Fout 5: Beide modellen als "gelijken" behandelen

**Wat er gebeurt:** Je geeft beide modellen dezelfde opdracht en verwacht dat ze "samen" tot iets beters komen. In werkelijkheid krijg je twee losstaande antwoorden zonder synergie.

**Oplossing:** Geef altijd asymmetrische rollen. De ene bouwt, de andere valt aan. Symmetrie levert overlap, asymmetrie levert inzicht.

## Fout 6: Verwachten dat het altijd beter is

**Wat er gebeurt:** Je investeert 45 minuten in een dual-model workflow voor een taak die met één model in 10 minuten klaar was geweest, en het eindresultaat is slechts marginaal beter.

**Oplossing:** Gebruik de beslisboom uit sectie 2 vooraf. Wees eerlijk over of de taak de investering waard is.

## Fout 7: Context niet compressen

**Wat er gebeurt:** Je stuurt 2000 woorden naar het volgende model, inclusief alle nuances. Het model reageert alleen op de eerste 500 woorden en negeert de rest.

**Oplossing:** Gebruik Prompt 5 (Compress Context) om lange antwoorden in te korten voordat je ze doorstuurt. Of doe het handmatig: verwijder voorbeelden en herhalingen, behoud conclusies en argumenten.

---

# 10. Beste definitieve aanbeveling

## Het systeem in één alinea

Gebruik standaard één model (Claude of ChatGPT, afhankelijk van je voorkeur) met het gestructureerde outputformat uit sectie 7. Schakel alleen naar dual-model wanneer je een besluit met significante consequenties moet nemen en onzeker bent over de richting. Gebruik dan het Architect-Critic model: Claude als architect (gestructureerd plan), ChatGPT als critic (actieve aanval op zwakheden), Claude voor synthese. Drie rondes maximum. Gebruik altijd het Context Transfer Block bij het kopiëren. Stop eerder als de kritiek zwak is.

## Variantenkaart

| Situatie | Methode | Rondes | Tijdsinvestering |
|----------|---------|--------|-----------------|
| **Snelle taak** (<30 min) | Eén model + goed outputformat | 1 | 5–15 min |
| **Standaard complexe taak** | Architect-Critic | 2–3 | 30–60 min |
| **Zwaar strategisch besluit** | Architect-Critic (uitgebreid) | 3 + optioneel ronde 4 | 45–90 min |
| **Creatieve taak** | Divergent-Convergent | 2 | 20–40 min |
| **Twee opties vergelijken** | Parallel | 1 + vergelijking | 15–30 min |
| **Coding/architectuur** | Eén model; dual alleen voor architectuurbeslissingen | 1–2 | Variabel |
| **Minimale versie** | Eén model met ingebouwde critic-instructie | 1 | 5–10 min |

## Minimale versie (als je weinig tijd hebt)

Gebruik dit prompt in een enkel model:

```
Geef me je beste antwoord op [opdracht]. Daarna:
1. Benoem de drie zwakste punten in je eigen antwoord.
2. Geef aan hoe je die zou verbeteren als je opnieuw mocht beginnen.
3. Geef je definitieve verbeterde antwoord.
```

Dit geeft 70% van de waarde van dual-model in 10% van de tijd.

---

# 11. Kant-en-klare Starter Kit

## Scenario: Je moet een go-to-market strategie bepalen voor een nieuw B2B SaaS product

### Ronde 1: Naar Claude (Architect)

**Wat je stuurt:**

```
Je bent een senior strategisch denker. Ik geef je een complexe opdracht. Jouw taak is om een
gestructureerd, verdedigbaar antwoord te geven.

OPDRACHT:
Ik lanceer een B2B SaaS tool voor middelgrote accountantskantoren (20-100 medewerkers) die
hun klantcommunicatie automatiseert. De tool kost €299/maand per kantoor. We hebben €150K
marketingbudget voor de eerste 6 maanden. De markt is relatief traditioneel — veel kantoren
gebruiken nog email en telefoon. Er zijn 3 gevestigde concurrenten maar die richten zich op
grotere kantoren (100+).

Ontwerp een go-to-market strategie voor de eerste 6 maanden.

Geef je antwoord in exact dit format:

KERNANTWOORD (max 3 zinnen):

ONDERBOUWING (max 5 punten):
1.
2.
3.
4.
5.

AANNAMES:

RISICO'S EN ZWAKHEDEN:

ALTERNATIEVEN DIE IK HEB OVERWOGEN MAAR AFGEWEZEN:

OPEN VRAGEN:
```

### Wat Claude idealiter teruggeeft:

```
KERNANTWOORD:
Focus de eerste 6 maanden volledig op directe outreach naar kantoren van 30-60 medewerkers
via brancheverenigingen en events, gecombineerd met 3-5 referentiekantoren die als showcase
dienen. Geen brede online marketing in deze fase — de doelgroep reageert niet op ads maar op
peer-aanbevelingen en bewezen resultaten bij vergelijkbare kantoren.

ONDERBOUWING:
1. Accountantskantoren in deze omvang beslissen op basis van vertrouwen en bewijs, niet op
   basis van marketingboodschappen. Brancheverenigingen (SRA, NBA-events) zijn de directe
   toegang tot beslissers.
2. €299/maand is een laag genoeg bedrag om zonder uitgebreid procurement-traject te beslissen,
   maar hoog genoeg dat een koude email niet volstaat — je hebt een demonstratie nodig.
3. 3-5 referentiekantoren die publiek hun resultaten delen (tijdsbesparing, klanttevredenheid)
   zijn 10x effectiever dan elke advertentie bij deze doelgroep.
4. De €150K is het best besteed aan: 1 FTE sales/partnerships (€60K), event-aanwezigheid
   en sponsoring (€40K), onboarding en success management voor referentiekantoren (€30K),
   content marketing gericht op vakbladen (€20K).
5. De drie concurrenten richten zich op 100+ — ons segment is bewust onbediend, maar dat
   betekent ook dat er geen bewezen marktvraag is. De referentiekantoren valideren die vraag.

AANNAMES:
- Accountantskantoren van 30-60 medewerkers hebben een beslisser die direct bereikbaar is
  via branche-events.
- €299/maand valt binnen discretionair budget van een managing partner.
- De tool is binnen 2 weken implementeerbaar zonder IT-afdeling.
- Brancheverenigingen staan open voor partnerships/sponsoring.

RISICO'S EN ZWAKHEDEN:
- Risico 1: De doelgroep is zo traditioneel dat zelfs peer-aanbevelingen niet genoeg zijn om
  gedrag te veranderen. Mitigatie: gratis pilot van 3 maanden voor referentiekantoren.
- Risico 2: Sales-gedreven model schaalt slecht. Na 6 maanden moet er een overgang zijn naar
  een schaalbaar kanaal.
- Risico 3: €150K is krap als de sales cycle langer dan 6 weken blijkt.

ALTERNATIEVEN DIE IK HEB OVERWOGEN MAAR AFGEWEZEN:
- Content marketing + SEO → Te traag voor eerste 6 maanden, en de doelgroep googelt niet
  actief naar deze oplossing.
- Paid advertising (LinkedIn/Google) → Te lage conversie bij deze doelgroep, te hoge CAC.
- Partnerkanaal via softwareleveranciers → Te lang onderhandelingstraject voor eerste 6 maanden.

OPEN VRAGEN:
- Hoe lang is de gemiddelde sales cycle bij deze kantoren?
- Is er een "champion" binnen het kantoor (bv. office manager) die de aankoop intern pusht?
- Wat is het retentierisico na de eerste 3 maanden?
```

### Ronde 2: Naar ChatGPT (Critic)

**Wat je stuurt:**

```
=== CONTEXT TRANSFER ===
OORSPRONKELIJKE OPDRACHT:
Go-to-market strategie voor B2B SaaS tool (klantcommunicatie-automatisering) voor middelgrote
accountantskantoren (20-100 medewerkers), €299/maand, €150K budget voor 6 maanden.

HUIDIGE STAND:
Een ander AI-model heeft de volgende strategie voorgesteld:

[Plak Claude's volledige antwoord hier]

JOUW ROL:
Je bent een kritische reviewer. Je taak is NIET om te verbeteren of aan te vullen.
Je taak is om aan te vallen. Zoek actief naar:
- Aannames die niet kloppen of niet onderbouwd zijn
- Risico's die niet benoemd zijn
- Scenario's waarin deze aanbeveling faalt
- Alternatieven die ten onrechte zijn afgewezen
- Logische fouten in de redenering
- Wat er ontbreekt dat cruciaal is

SPECIFIEKE FOCUS:
Ik twijfel vooral over: (1) of branche-events echt het juiste kanaal zijn, en (2) of €150K
genoeg is voor dit model.
=== EINDE CONTEXT ===

Geef je kritiek in dit format:

FUNDAMENTELE BEZWAREN (punten die de conclusie zouden veranderen):

SIGNIFICANTE RISICO'S (niet benoemd in het origineel):

ZWAKSTE AANNAME:

BESTE NIET-GEKOZEN ALTERNATIEF:

MIJN OORDEEL:
```

### Wat ChatGPT idealiter teruggeeft:

```
FUNDAMENTELE BEZWAREN:
1. De strategie veronderstelt dat 1 FTE sales 3-5 referentiekantoren EN actieve outreach kan
   doen in 6 maanden. In de praktijk kost het onboarden van een referentiekantoor alleen al
   4-8 weken per kantoor. Met een sales cycle van 6+ weken voor de rest zit je na 6 maanden
   op misschien 3 referentiekantoren en 5-10 prospects in de pijplijn. Dat is te weinig om te
   valideren of er een markt is.

2. Het budget-voorstel alloceert €0 aan product feedback loops. Als je product nog niet
   bewezen is bij deze doelgroep, is de kans groot dat de eerste kantoren tegen UX-problemen
   of missing features aanlopen die specifiek zijn voor accountancy. Zonder budget voor snelle
   iteratie verlies je je referentiekantoren.

SIGNIFICANTE RISICO'S:
1. Timing-risico: branche-events zijn seizoensgebonden. Als de grote NBA/SRA events net
   geweest zijn bij launch, wacht je 6-9 maanden op de volgende. De strategie heeft geen
   plan B voor deze situatie.

2. Single-channel-risico: de hele strategie leunt op fysieke ontmoetingen. Eén lockdown,
   event-annulering of reisbeperking en het model valt om.

3. Retentie-blinde vlek: er is geen strategie voor wat er na de onboarding gebeurt. Bij
   €299/maand is de churn-drempel laag. Zonder dedicated customer success loop ben je
   bezig met een lekkende emmer.

ZWAKSTE AANNAME:
"€299/maand valt binnen discretionair budget." Bij accountantskantoren van 30 medewerkers
besluit niet de partner alleen — er is vaak een kantoormanager of IT-verantwoordelijke die
meepraat. De aanname van een simpele besliscyclus is waarschijnlijk te optimistisch.

BESTE NIET-GEKOZEN ALTERNATIEF:
LinkedIn outbound is te snel afgewezen. Niet via ads, maar via persoonlijke connectieverzoeken
en DM's door de founder/CEO naar managing partners. Dit is gratis, schaalbaar, en geeft
directe feedback op de pitch. Het kan naast de event-strategie bestaan en kost bijna geen
budget — alleen tijd. De afwijzing "te lage conversie" geldt voor ads, niet voor persoonlijke
outreach.

MIJN OORDEEL:
De kernrichting (referentiekantoren + branche-kanaal) is houdbaar, maar het uitvoeringsplan is
te optimistisch over snelheid en te fragiel door single-channel afhankelijkheid. De strategie
heeft een second-channel nodig (LinkedIn persoonlijke outreach), een expliciet product-iteratie
budget, en een realistischer tijdlijn.
```

### Ronde 3: Terug naar Claude (Synthese)

**Wat je stuurt:**

```
=== CONTEXT TRANSFER ===
OORSPRONKELIJKE OPDRACHT:
Go-to-market strategie voor B2B SaaS (klantcommunicatie-automatisering) voor middelgrote
accountantskantoren, €299/maand, €150K budget, 6 maanden.

JOUW EERDERE ANTWOORD:
[Plak Claude's oorspronkelijke antwoord]

KRITIEK VAN HET ANDERE MODEL:
[Plak ChatGPT's kritiek]

JOUW ROL:
Verwerk de kritiek in een definitief, verbeterd antwoord.
=== EINDE CONTEXT ===

Geef je synthese in dit format:

VERWERKTE KRITIEK:

VERWORPEN KRITIEK:

DEFINITIEF ANTWOORD:

RESTERENDE ONZEKERHEID:

CONFIDENCE LEVEL:
```

### Wat Claude idealiter teruggeeft als synthese:

```
VERWERKTE KRITIEK:
- "1 FTE is te weinig" → Verwerkt. Budget herverdeeld: €45K voor 1 FTE sales + €15K voor
  freelance SDR die LinkedIn outreach doet. Verwachting bijgesteld naar 3 referentiekantoren
  en 8-12 qualified leads in 6 maanden.

- "Geen product-iteratie budget" → Verwerkt. €10K gealloceerd van event-budget naar rapid
  product iteration. Eerste referentiekantoren krijgen wekelijks check-in met product-team.

- "LinkedIn persoonlijke outreach als second channel" → Verwerkt. Founder doet persoonlijke
  LinkedIn outreach parallel aan events. Geen apart budget nodig, wel 5-10 uur per week
  founder-tijd.

- "Event timing-risico" → Verwerkt. Plan B: als eerste grote event >3 maanden weg is, focus
  eerste fase volledig op LinkedIn outreach + directe intros via bestaand netwerk.

VERWORPEN KRITIEK:
- "Retentie-blinde vlek" → Deels verworpen. Customer success is inderdaad cruciaal maar hoort
  in de fase NA de eerste 6 maanden. In deze fase zijn er maximaal 3-5 betalende klanten —
  die krijgen persoonlijke founder-aandacht. Een formeel CS-programma is premature
  optimalisatie in deze fase.

DEFINITIEF ANTWOORD:
De go-to-market strategie voor de eerste 6 maanden bestaat uit twee parallelle kanalen met
een gedeeld doel: 3 publieke referentiekantoren en 8-12 qualified leads.

Kanaal 1 (primair): Branche-events en directe netwerk-introductie. Aanwezigheid op 2-3
SRA/NBA events, gecombineerd met targeted introductions via bestaande contacten in de
accountancywereld. Doel: face-to-face demonstraties bij beslissers.

Kanaal 2 (parallel): Persoonlijke LinkedIn outreach door de founder. Geen ads, geen
automation — handmatige connectieverzoeken naar managing partners van kantoren in het
30-60 segment. 20-30 outreaches per week. Doel: directe gesprekken boeken.

Referentieprogramma: 3-5 kantoren krijgen een gratis pilot van 3 maanden in ruil voor een
publieke case study en bereidheid om als referentie te dienen. Wekelijkse product-feedback
sessies. Dit valideert de marktvraag en bouwt sociaal bewijs.

Budgetverdeling:
- Sales FTE: €45.000
- Freelance SDR (LinkedIn): €15.000
- Events + sponsoring: €30.000
- Referentie-onboarding + pilotkosten: €30.000
- Product iteratie (rapid fixes): €10.000
- Content (vakbladartikelen, case studies): €15.000
- Reserve: €5.000

Succescriteria na 6 maanden:
- 3+ referentiekantoren live met publieke case study
- 8+ qualified leads in actieve pipeline
- NPS >40 bij referentiekantoren
- Gemiddelde sales cycle gemeten en gedocumenteerd

RESTERENDE ONZEKERHEID:
De grootste onzekerheid blijft of middelgrote accountantskantoren überhaupt bereid zijn om
communicatie-tooling te adopteren. De referentiekantoren moeten dit valideren. Als na 3
maanden geen enkel kantoor de pilot heeft geactiveerd, is dat een fundamenteel signaal dat
de productpositionering moet veranderen, niet de GTM-strategie.

CONFIDENCE LEVEL: Gemiddeld
De strategie is solide gegeven de aannames, maar hangt af van de validatie dat deze doelgroep
daadwerkelijk koopbereid is. Dat is een marktonzekerheid, geen strategieonzekerheid.
```

### Jouw evaluatie na ronde 3

Je hebt nu een strategie die:
- De sterke structuur van Claude's oorspronkelijke voorstel behoudt.
- De timing-kwetsbaarheid en single-channel-risico van ChatGPT's kritiek heeft verwerkt.
- Een realistischer budget en tijdlijn heeft.
- Een duidelijk plan B bevat als events niet werken.
- Expliciet benoemt wat onzeker blijft.

Dit is significant beter dan wat één model in één ronde had geproduceerd. Niet omdat de individuele stukken onmogelijk waren voor één model, maar omdat de gestructureerde kritiek-ronde zwakheden blootlegde die het architect-model niet uit zichzelf had benoemd.

**Dit is precies het type taak waar dual-model loont:** een strategisch besluit, meerdere verdedigbare opties, significante consequenties, en inherente onzekerheid.

---

# Bijlage: Quick Reference Card

## Dagelijks gebruik — print dit uit of bewaar het

```
BESLISBOOM:
1. Is het een besluit met consequenties? → NEE → Eén model
2. Meerdere verdedigbare opties? → NEE → Eén model
3. Ben ik onzeker? → NEE → Eén model
4. Heb ik 45+ minuten? → NEE → Eén model + interne critic
5. JA op alles → Start Architect-Critic workflow

STANDAARD FLOW:
Ronde 1: Claude (Architect) → gestructureerd plan
Ronde 2: ChatGPT (Critic) → actieve aanval op zwakheden
Ronde 3: Claude (Synthese) → definitief verbeterd antwoord

BIJ COPY-PASTE ALTIJD:
✓ Context Transfer Block gebruiken
✓ Max 800 woorden kopiëren
✓ Rol expliciet benoemen
✓ Beleefdheden verwijderen
✗ Nooit hele gesprekken kopiëren
✗ Nooit zonder rol sturen
✗ Nooit meer dan 3-4 rondes

STOPREGELS:
→ Na ronde 1 als antwoord al overtuigend is
→ Na ronde 2 als kritiek alleen cosmetisch is
→ Na ronde 3 altijd (tenzij fundamenteel meningsverschil op 1 punt)
→ Als je vraag te breed is: herformuleer, niet meer rondes
```

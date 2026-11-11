---
sessionId: session-261110-164431-yj7f
---

# Requirements

### Doel
De homepage herschikken naar een **tweedelige layout**:
- **Links**: de huidige homepage-content (naam, rol, foto, introductietekst, sociale knoppen) blijft **vaststaan** terwijl je scrollt.
- **Rechts**: de "Over mij" sectie wordt direct zichtbaar en is **verticaal scrollbaar** binnen dat rechterpaneel.

### Scope
- **In scope**: De `home.blade.php` view aanpassen met een split-screen layout en sticky-left + scrollable-right gedrag.
- **Out of scope**: De `about.blade.php` pagina aanpassen, backend- of route-wijzigingen.

### Gebruikerservaring
- Bij het laden van de homepage zie je direct links je persoonlijke introductie en rechts de "Over mij" tekst.
- Scrollen op de pagina (of alleen in het rechterpaneel) laat de "Over mij" content doorlopen terwijl de linkerkant op zijn plek blijft.
- Op mobiele schermen (onder 768px) valt de layout terug naar een enkele kolom waarbij alles normaal scrollt.

# Technical Design

### Huidige Implementatie
- `resources/views/home.blade.php` bevat een verticale flex-column layout met naam, foto, introductietekst en sociale knoppen.
- `resources/views/about.blade.php` bevat de uitgebreide "Over mij" tekst (4 alinea's).
- De layout-template `resources/views/layouts/app.blade.php` laadt styles via Vite en bevat de navigatie.

### Beslissingen
- **Pure CSS oplossing**: Geen JavaScript nodig. We gebruiken `position: sticky` of `position: fixed` voor de linkerkant en `overflow-y: auto` voor het rechterpaneel.
- **Content samenvoegen**: De "Over mij" tekst uit `about.blade.php` wordt gekopieerd naar de homepage zodat alles op één pagina staat.
- **Responsive fallback**: Op schermen kleiner dan 768px wordt de layout enkel-kolom en scrollt alles normaal.

### Proposed Changes
In `home.blade.php`:
1. Een wrapper-div met `display: flex` en `height: 100vh` (of `calc(100vh - navigatiehoogte)`) voor de split layout.
2. **Linker paneel** (`home-left`): bevat de huidige content (naam, rol, foto, intro, socials). Krijgt `position: sticky` of `position: fixed` zodat hij vaststaat.
3. **Rechter paneel** (`home-right`): bevat de "Over mij" sectie met de tekst uit `about.blade.php`. Krijgt `overflow-y: auto` zodat je erdoorheen kan scrollen.
4. Media-query voor mobiel: layout wordt `flex-direction: column`, geen sticky gedrag, normaal scrollen.

# Delivery Steps

### ✓ Step 1: Implement split-screen layout met sticky linkerkant
De `home.blade.php` wordt herschreven naar een tweedelige layout waarbij de linkerkant vaststaat en de rechterkant scrollbaar is.

- Een flex-wrapper toevoegen met `height: 100vh` en `display: flex`.
- Het linker paneel (`home-left`) krijgt de huidige homepage content (naam, rol, foto, introductie, sociale knoppen) en `position: sticky` met `top: 0`.
- Het rechter paneel (`home-right`) krijgt `overflow-y: auto` en bevat de "Over mij" sectie met de tekst uit `about.blade.php`.
- CSS-stijlen aanpassen: beide panelen krijgen een gelijke hoogte, de linkerkant is gecentreerd en vast, de rechterkant heeft padding en scrollbalk-styling.
- Media-query toevoegen voor schermen < 768px: layout wordt enkel-kolom, alles scrollt normaal.
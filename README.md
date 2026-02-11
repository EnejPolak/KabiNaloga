# KABI TEST

Mini PHP projekt za prikaz seznama izdelkov in detajlne strani posameznega izdelka. Pixel-perfect implementacija po dizajn specifikaciji (Zeplin).

## Zagon

Projekt zahteva **PHP 8+** in **Node.js** (za BrowserSync live reload).

```bash
# 1. Namesti odvisnosti
npm install

# 2. Zaženi PHP strežnik
npm run php

# 3. V novem terminalu zaženi BrowserSync (auto-refresh)
npm run sync
```

Odpri **http://localhost:3000** v brskalniku.

## Struktura projekta

```
├── index.php                  # Redirect na izdelki.php
├── izdelki.php                # Seznam izdelkov (grid 3 + 2)
├── izdelek.php                # Detail posameznega izdelka
├── includes/
│   ├── header.php             # HTML head, navbar, logo
│   ├── footer.php             # Zapiranje HTML tagov
│   ├── data.php               # Podatki o izdelkih ($products array)
│   └── helpers.php            # Utility funkcije (e() za XSS zaščito)
├── assets/
│   ├── css/
│   │   └── style.css          # Vsi stili (desktop + responsive)
│   ├── js/
│   │   ├── page-transition.js # Fade prehodi med stranmi
│   │   ├── nav.js             # Hamburger meni (mobil)
│   │   └── excerpt-toggle.js  # Prikaži več / Skrij na karticah
│   └── img/
│       ├── logo.png           # Logo 1x
│       ├── logo@2x.png        # Logo 2x (retina)
│       ├── img.png            # Slika izdelka 1x
│       └── img@2x.png         # Slika izdelka 2x (retina)
└── package.json               # npm skripte in odvisnosti
```

## Tehnologije

- **PHP 8** (brez frameworka, čist PHP)
- **CSS** (brez preprocessorja, custom responsive breakpointi)
- **Vanilla JavaScript** (IIFE vzorec, brez knjižnic)
- **FontAwesome 6** (navbar ikona)
- **BrowserSync** (development live reload)

## Funkcionalnosti

- Pixel-perfect implementacija po Zeplin dizajnu
- Responsive layout (desktop, tablet, mobil)
- Hamburger meni na mobilnih napravah
- Fade page transitions med stranmi
- "Prikaži več / Skrij" toggle za dolga besedila
- Retina slike (srcset 1x / 2x)
- XSS zaščita z `e()` helper funkcijo
- Semantičen HTML z aria atributi

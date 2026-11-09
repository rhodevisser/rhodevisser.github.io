---
sessionId: session-261109-204507-17vj
---

# Requirements

### Overview & Goals
De statische personal website (rhodevisser.github.io) omzetten naar een Laravel 11 project met:
- Laravel als framework voor structuur en leerdoel
- Filament CMS voor content beheer (blog artikelen, pagina content)
- Tailwind CSS voor styling (overstap van custom CSS)
- SQLite als database
- Railway als hosting platform
- Alle 6 pagina's meenemen (Home, Over mij, CV, Contact, Blog, Portfolio)

### Scope
**In Scope:**
- Nieuw Laravel 11 project instellen
- Alle bestaande pagina's migreren naar Blade templates
- Styling overschakelen naar Tailwind CSS
- Filament CMS installeren en configureren
- Blog functionaliteit toevoegen (create, read, update, delete artikelen)
- Contactformulier met email functionaliteit
- Navigatie en responsive design behouden
- Bloem-animatie behouden (JavaScript)
- Railway deploy configuratie

**Out of Scope:**
- Geavanceerde authenticatie voor frontend (alleen Filament admin)
- Portfolio content (blijft placeholder voor nu)
- SEO optimalisatie beyond bestaande meta tags

# Technical Design

### Current Implementation
Statische website met:
- 6 HTML pagina's (index.html, over_mij.html, curriculum_vitae.html, contact.html, blog.html, portfolio.html)
- CSS: main.css + per-pagina styles (index.css, over_mij.css, etc.)
- JavaScript: main.js (bloem-animatie + hamburger menu)
- Afbeeldingen in resources/images/
- GitHub Pages hosting

### Key Decisions
1. **Laravel 11** - Laatste stabiele versie, moderne syntax
2. **Filament CMS** - Voor blog beheer en eventueel pagina content beheer
3. **Tailwind CSS** - Laravel standaard, flexibeler dan custom CSS
4. **SQLite** - Eenvoudig voor leren, geen aparte DB server nodig
5. **Blade templates** - Voor alle views met shared layout
6. **Railway** - Hosting platform met goede Laravel support

### Proposed Changes

#### 1. Project Structuur
```
rhodevisser.github.io/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── AboutController.php
│   │   ├── CvController.php
│   │   └── ContactController.php
│   ├── Models/
│   │   └── BlogPost.php
│   └── Filament/
│       ├── Resources/
│       │   └── BlogPostResource.php
│       └── Pages/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── cv.blade.php
│   │   ├── contact.blade.php
│   │   ├── blog/
│   │   │   ├── index.blade.php
│   │   │   └── show.blade.php
│   │   └── portfolio.blade.php
│   └── css/
│       └── app.css (Tailwind)
├── routes/
│   └── web.php
├── database/
│   ├── migrations/
│   │   └── create_blog_posts_table.php
│   └── seeders/
│       └── BlogPostSeeder.php
└── public/
    ├── images/ (bestaande afbeeldingen)
    └── js/
        └── main.js (bloem-animatie)
```

#### 2. Database Schema
**Table: blog_posts**
- id (primary key)
- title (string)
- slug (string, unique)
- content (text)
- excerpt (text, nullable)
- image (string, nullable)
- published_at (timestamp, nullable)
- created_at, updated_at (timestamps)

#### 3. Routes (web.php)
```php
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/over-mij', [AboutController::class, 'index'])->name('about');
Route::get('/cv', [CvController::class, 'index'])->name('cv');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
```

#### 4. Shared Layout (app.blade.php)
- Navigatie met active state per pagina
- Responsive hamburger menu
- Bloem-animatie container
- Google Fonts imports
- Tailwind CSS via Vite
- Footer met social links

#### 5. Filament Admin
- BlogPostResource met velden: title, slug, content, excerpt, image, published_at
- Tabel view met search en filters
- Form view met rich text editor voor content

#### 6. Contact Formulier
- Formulier in contact.blade.php
- Validatie in ContactController
- Email verzending via Laravel Mail (configuratie voor Railway)

### Architecture Diagram
``` mermaid
graph LR
    A[User] --> B[Laravel Routes]
    B --> C[Controllers]
    C --> D[Blade Views]
    D --> E[Shared Layout]
    C --> F[BlogPost Model]
    F --> G[SQLite Database]
    H[Filament Admin] --> I[BlogPostResource]
    I --> F
    J[Contact Form] --> K[Mail Service]
```

### Risks
- **Tailwind migratie**: Bestaande CSS moet handmatig worden vertaald naar Tailwind classes. Dit is tijdrovend maar leert veel.
- **Bloem-animatie**: JavaScript moet mogelijk aangepast worden voor Vite integratie.
- **Railway deploy**: Eerste deploy kan configuratie vereisen (environment variables, database setup).

# Testing

### Validation Approach
Na elke stap controleren of de site lokaal draait via `php artisan serve`.

### Key Scenarios
1. **Navigatie**: Alle links werken en active state is correct
2. **Responsive**: Hamburger menu werkt op mobile (<768px)
3. **Blog**: Artikelen zijn zichtbaar op frontend en beheerbaar via Filament
4. **Contact**: Formulier valideert en stuurt email
5. **Styling**: Tailwind classes reproduceren de originele look & feel
6. **Animatie**: Bloem volgt nog steeds de muis

### Edge Cases
- Lege blog (geen artikelen) - toon "Er zijn nog geen blog artikelen"
- Contactformulier validatie failures
- Afbeeldingen die niet laden
- Database migraties die falen

### Test Changes
- Laravel's ingebouwde test suite gebruiken
- Feature tests voor routes en controllers
- Browser tests (optioneel) voor kritieke flows

# Delivery Steps

### ✓ Step 1: Laravel project instellen en configureren
Nieuw Laravel 11 project aanmaken en basis configuratie instellen voor Railway deploy.
- Laravel 11 project installeren via composer create-project
- SQLite database configureren (.env bestand)
- Tailwind CSS installeren en configureren met Laravel Vite
- Basis Blade layout template aanmaken met navigatie en footer
- Bestaande afbeeldingen kopiëren naar public/images/
- Railway configuratie bestanden toevoegen (railway.json, Procfile)

### ✓ Step 2: Pagina's migreren naar Blade templates
Alle 6 HTML pagina's omzetten naar Blade templates met Tailwind CSS styling.
- Controllers aanmaken: HomeController, AboutController, CvController, ContactController, BlogController, PortfolioController
- Routes definiëren in web.php
- HTML content kopiëren naar Blade templates
- CSS vertalen naar Tailwind classes (main.css + per-pagina styles)
- Shared layout (app.blade.php) met navigatie, active states, en responsive hamburger menu
- Bloem-animatie JavaScript integreren via Vite

### ✓ Step 3: Filament CMS en blog functionaliteit
Filament CMS installeren en blog systeem implementeren voor content beheer.
- Filament CMS package installeren en configureren
- BlogPost model, migratie en factory aanmaken
- BlogPostResource voor Filament admin panel
- Blog views (index en show) met Blade templates
- Blog artikelen tonen op frontend met pagination
- Seeder voor demo content
- Filament admin login instellen

### ✓ Step 4: Contactformulier en finalisatie
Werkend contactformulier toevoegen en site finaliseren voor deploy.
- Contactformulier in contact.blade.php met validatie
- Mail configuratie voor Laravel (SMTP settings voor Railway)
- Email template aanmaken
- Final styling checks en responsive testing
- Database migraties en seeders uitvoeren
- Railway deploy testen
- GitHub Pages redirect of DNS update instructies

# Top Brands Web Application

This is a web application to manage and display top-rated brands by country.

## Features

- Country detection using the `CF-IPCountry` header (Cloudflare)
- Brand listing with fallback to Malta brands if none found
- Brand CRUD operations through API
- Mobile-friendly frontend with vanilla HTML/CSS/JS

## Setup Instructions

### Requirements

- PHP >= 8.1
- Composer
- Laravel
- Docker (optional)

### Installation

```bash
git clone https://github.com/maurowelzel/brands-toplist.git
cd top-brands
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

### API Endpoints

- `GET /api/brands` – Get brands filtered by country
- `POST /api/brands` – Create brand
- `PUT /api/brands/{id}` – Update brand
- `DELETE /api/brands/{id}` – Delete brand

## Notes

This app uses Cloudflare’s `CF-IPCountry` header to determine the user's country.
If no brands are found for the detected country, it defaults to showing Malta brands.

---

© 2025 Top Brands App

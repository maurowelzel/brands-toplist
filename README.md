# Top Brands

A web application to manage and view top-rated brands by country.

## Features

- CRUD functionality for brands
- Country detection via `CF-IPCountry` header (Cloudflare)
- Mobile-friendly UI with plain HTML/CSS/JS
- RESTful API with Laravel
- Dockerized environment with MySQL

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/maurowelzel/brands-toplist.git
   cd brands-toplist
   ```

2. Copy the `.env` file and configure as needed:
   ```bash
   cp .env.example .env
   ```

3. Set your `APP_KEY`:
   ```bash
   php artisan key:generate
   ```

4. Set correct permissions (if needed).

## Docker Setup

1. Build and start the containers:
   ```bash
   docker-compose up -d --build
   ```

2. Install PHP dependencies (inside the container):
   ```bash
   docker exec -it app composer install
   ```

3. Run Laravel migrations:
   ```bash
   docker exec -it app php artisan migrate
   ```

## Folder Structure

- `/public`: frontend files (HTML/CSS/JS)
- `/app/Http/Controllers/API`: API logic
- `/routes/api.php`: API routes
- `/database/migrations`: table definitions

## API Endpoints

- `GET /api/brands` – list brands by country
- `GET /api/brands/all` – list all brands
- `POST /api/brands` – create new brand
- `PUT /api/brands/{id}` – update brand
- `DELETE /api/brands/{id}` – delete brand

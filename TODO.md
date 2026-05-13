# Laravel Portfolio - TODO Checklist

## ✅ Completed Tasks

### 1. Project Structure
- [x] Created migrations for profiles, skills, projects, experiences, contacts
- [x] Created models (Home, Skill, Project, Experience, Contact)
- [x] Created controllers (HomeController, SkillController, ProjectController, ExperienceController, ContactController)
- [x] Set up routes with custom middleware

### 2. Database Seeders
- [x] Created ProfilesTableSeeder with profile data
- [x] Created ContactsTableSeeder with contact information
- [x] Created SkillsTableSeeder with categorized skills
- [x] Created ProjectsTableSeeder with project images
- [x] Created ExperiencesTableSeeder with work and education
- [x] Updated DatabaseSeeder to call all seeders

### 3. Blade Templates
- [x] Updated home.blade.php with database-driven profile
- [x] Updated skills.blade.php with categorized skills and progress bars
- [x] Updated projects.blade.php with gallery and lightbox
- [x] Updated experiences.blade.php with work and education sections
- [x] Updated contact.blade.php with contact information
- [x] Created styles.blade.php for shared CSS
- [x] Updated header.blade.php to include styles
- [x] Updated navbar.blade.php with navigation links

### 4. Middleware
- [x] Created PortfolioAccessMiddleware for logging access
- [x] Registered middleware in Kernel.php
- [x] Applied middleware to all routes

### 5. Formatting & Presentation
- [x] Applied formatting from xampp/portfolio PHP files
- [x] Used Bootstrap 5 for responsive layout
- [x] Added Bootstrap Icons
- [x] Applied Inknut Antiqua font from Google Fonts

## 🚀 Deployment (Render) - Steps

### 1) Added Render config files
- [x] Added `Procfile` (Render start command)
- [x] Added `render.yaml` (optional Render config)

### 2) Configure environment variables in Render
- [ ] Set `APP_KEY` (required)  
  - Example: `base64:...` (generate with `php artisan key:generate`)
- [ ] Set `APP_URL` (your Render URL)
- [ ] Set database credentials (use `DATABASE_URL` if possible, recommended)


### 3) Build commands on Render
- [ ] Ensure Render runs:
  - `composer install --no-dev --optimize-autoloader`
  - `npm ci && npm run build`

### 4) Database setup on Render
- [ ] Run (one-time) migrations:
  - `php artisan migrate --force`
- [ ] Run seed ONE time:
  - `php artisan db:seed --force`
  - If you don’t want seeds re-run on every deploy, run it only once (or remove seed step after first successful deploy).


### 5) Storage setup on Render
- [ ] Run:
  - `php artisan storage:link`

### 6) Confirm images are committed
- [ ] Ensure `public/img/*` and `public/project-img/*` are already in git

### Notes
Render does not allow committing `.env` with real secrets. Use Render's dashboard environment variables instead.


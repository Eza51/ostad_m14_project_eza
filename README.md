Laravel Portfolio Website
📘 Project Overview

This is a personal portfolio website built with Laravel 12.25.0, showcasing my skills, projects, and providing a contact form. The website includes the following pages:

Home Page: Welcome message and introduction

About Page: Short bio

Projects Page: List of projects (static content)

Contact Page: Simple form (no backend submission required)

Blog Page: Static blog posts

🔧 Installation

Clone the repository:

git clone https://github.com/Eza51/ostad_m14_project_eza.git
cd ostad_m14_project_eza
key generate
php artisan key:generate
project serve
php artisan serve
📁 Project Structure

app/Http/Controllers: Controllers for each page (HomeController, AboutController, BlogController, ProjectsController, ContactController)

resources/views: Blade templates for each page (home.blade.php, about.blade.php, blog.blade.php, projects.blade.php, contact.blade.php)

routes/web.php: Defines routes for each page

🧪 Features

Responsive design using Bootstrap

Master layout with header, footer, and navigation

Static content for all pages

Blog section with sample posts

Contact form (frontend only, no backend submission)

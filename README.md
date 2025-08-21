# Laravel-Portfolio-Website

A responsive portfolio website built with Laravel featuring multiple pages and a clean, modern design.

## Features

- **Home Page**: Welcome message and introduction with service highlights
- **About Page**: Short bio with skills and progress bars
- **Projects Page**: Display of portfolio projects with technology tags
- **Contact Page**: Contact form (frontend only) and contact information
- **Blog Page**: Static blog posts with pagination

## Project Structure

laravel-portfolio/
├── app/
│ └── Http/
│ └── Controllers/
│ └── PageController.php
├── resources/
│ └── views/
│ ├── layouts/
│ │ └── master.blade.php
│ ├── home.blade.php
│ ├── about.blade.php
│ ├── projects.blade.php
│ ├── contact.blade.php
│ └── blog.blade.php
├── routes/
│ └── web.php
└── README.md

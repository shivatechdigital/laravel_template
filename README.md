# BeautyZone Salon CMS + Billing Platform

A complete Laravel-based beauty salon website with a dynamic admin panel.

This project is not just a static template conversion. It includes:

- Role-based authentication
- Dynamic public pages managed from admin
- Team, services, pricing, gallery, social links CMS
- Membership management
- Phone-first admin billing workflow
- Per-user service and billing history

## Project Highlights

### Public Website

- Home page with dynamic sections
- About page with editable intro and mission cards
- Dynamic services page (main service + sub-services)
- Dynamic pricing page (main service description + sub-service pricing)
- Dynamic gallery page (images + video links)
- Dynamic team pages:
	- Home shows max 4 members using home toggle and featured priority
	- Team page shows all active professionals
- Dynamic contact page:
	- Address, phone, email editable from admin
	- Map supports iframe HTML, full embed URL, or embed path
- Membership plans listing page

### Authentication and User Roles

- Register/Login/Logout
- Forgot password + reset password
- Role support:
	- `admin`
	- `user`
- Dedicated dashboards for admin and user

## Admin Panel Modules

### 1) Services Management

- Create, update, delete services
- Add sub-services
- Service image upload
- Active/deactive toggle
- Sort order support

### 2) Pricing Management

- Manage pricing by service
- Main description + sub-service pricing lines
- Active/deactive toggle
- Sort order support

### 3) Gallery Management

- Image and video entries
- Active/deactive toggle
- Sort order support

### 4) Team Members Management

- Add/edit/remove professionals
- `Show on Home` toggle
- `Home Featured Priority` for better home ordering
- Active/deactive toggle
- Team image upload with preview and ratio guidance

### 5) Social Links Management

- Single source for all social platforms
- Used across header, footer, contact, author/share areas

### 6) Content Blocks Management

- Structured block editing for Home, About, Contact
- Contact block uses field-based admin inputs (no JSON required for admin)

### 7) Template/Page Editor

- Edit Blade templates from admin panel

### 8) Membership Plans (Phase 1)

- Plan fields:
	- Name
	- Price
	- Discount type (`flat` or `percentage`)
	- Discount value
	- Final price (auto-calculated)
	- Expiry days
	- Active/deactive
- Discount validations:
	- Flat discount cannot exceed price
	- Percentage cannot exceed 100

### 9) Phone-First Billing Module

- Admin creates bill by phone number first
- Two scenarios supported:

1. Existing user found by phone
	 - Show user details
	 - Show active membership status
	 - Option to add membership in current bill
	 - Add service quantities
	 - Generate final bill

2. User not found by phone
	 - Admin enters name, gender, optional email
	 - User account created automatically
	 - Random password generated in backend
	 - If email exists, password email is attempted
	 - Optional membership can be added
	 - Services added and final bill generated

- Billing outputs:
	- Membership amount
	- Services amount
	- Final total
	- Bill detail page
	- Billing history
	- Per-user bill/service records

## User Dashboard

- Booking history and status tracking
- Membership history and status
- Profile update
- Password update

## Seed Data

Seeder includes sample:

- Admin and normal user
- Services
- Pricing
- Gallery
- Team
- Social links
- Content blocks
- Membership plans

Default seeded credentials:

- Admin: `admin@gmail.com` / `password`
- User: `user@gmail.com` / `password`

## Tech Stack

- Laravel (PHP)
- Blade templates
- Eloquent ORM
- MySQL-compatible migrations

## Setup Guide

### 1) Install dependencies

```bash
composer install
```

### 2) Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

### 3) Database configuration

Update DB credentials in `.env`, then run:

```bash
php artisan migrate
php artisan db:seed
```

### 4) Run application

```bash
php artisan serve
```

## Useful Commands

```bash
php artisan migrate
php artisan db:seed --class=CmsContentSeeder
php artisan optimize:clear
```

## Business Outcome

This platform allows a salon owner to run website content, customer memberships, and day-to-day billing operations from one admin panel, without depending on developers for every text/media/update change.

## License

This project uses the MIT license.

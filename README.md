# TugasWeb-Pertemuan11-EcommerceAuth

## Deskripsi

Project Tugas Rutin Pertemuan 11 Pemrograman Web menggunakan Laravel.
Project ini menerapkan database e-commerce, Eloquent ORM, authentication,
multi-role, middleware, dan authorization menggunakan Policy.

## Teknologi

- Laravel 13
- PHP 8.3
- MySQL
- Laravel Breeze
- Blade
- Vite

## Fitur

### 1. Database E-Commerce

Project memiliki 7 tabel utama:

- users
- categories
- products
- orders
- order_items
- tags
- product_tag

### 2. Seeder dan Factory

Data awal dibuat menggunakan Seeder dan Factory.

- 5 users
- 5 categories
- 8 tags
- 60 products
- Data order dan order item

### 3. Eloquent Relationships

Relasi yang digunakan:

- User → Products
- User → Orders
- User → Posts
- Category → Products
- Product → Category
- Product → User
- Product → Tags
- Order → Order Items
- Order Item → Product
- Tag → Products

### 4. Eloquent Scope

Project memiliki scope:

```php
Product::available()

Scope tersebut digunakan untuk mengambil produk yang memiliki stok lebih dari 0.

### 5. Authentication

Authentication menggunakan Laravel Breeze dengan fitur:

Register
Login
Logout
Dashboard
Profile

### 6. Multi-Role

Terdapat tiga role:

Admin
Editor
User

Hak akses:

Role	Akses
Admin	Akses admin dan editor serta seluruh data
Editor	Akses editor dan dapat mengedit/menghapus post
User	Hanya dapat mengelola post miliknya

7. Custom Middleware

Middleware RoleMiddleware digunakan untuk membatasi akses berdasarkan role.

Contoh:

/admin
/editor

8. PostPolicy

PostPolicy digunakan untuk authorization pada:

Edit post
Delete post

Admin dan editor dapat mengelola post, sedangkan user hanya dapat mengelola post miliknya sendiri.

9. Protected Routes

Route yang membutuhkan authentication dilindungi menggunakan middleware auth.

Route berdasarkan role menggunakan custom middleware role.

10. Eager Loading

Eager loading diterapkan menggunakan:

Product::with('category')

dan:

Post::with('user')

untuk mengambil relationship secara lebih efisien.

Testing

Testing dilakukan menggunakan dua akun dengan role berbeda.

Admin
Role     : admin

Admin dapat mengakses:

/admin
/editor
Editor
Role     : editor

Editor dapat mengakses:

/editor

dan tidak dapat mengakses:

/admin

Akses ke route yang tidak sesuai role menghasilkan:

403 Forbidden
Menjalankan Project

Clone repository kemudian masuk ke folder project:

cd TugasWeb-Pertemuan11-EcommerceAuth

Install dependency:

composer install
npm install

Salin konfigurasi environment:

copy .env.example .env

Generate application key:

php artisan key:generate

Atur database pada file .env, kemudian jalankan:

php artisan migrate --seed

Build frontend:

npm run build

Jalankan server:

php artisan serve --port=8011

Project dapat diakses melalui:

http://127.0.0.1:8011
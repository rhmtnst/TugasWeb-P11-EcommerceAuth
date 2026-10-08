# Tugas Web Pertemuan 11 — E-Commerce DB + Secure Auth

## 👤 Identitas

- **Nama:** Rahmat Hamonangan Nasution
- **NIM:** 4253250053
- **Universitas:** Universitas Negeri Medan
- **Mata Kuliah:** Pemrograman Web
- **Pertemuan:** 11
- **Project:** E-Commerce DB + Secure Auth

---

## 📌 Deskripsi

Tugas Web Pertemuan 11 merupakan implementasi aplikasi Laravel yang menggabungkan pengelolaan database E-Commerce menggunakan Eloquent ORM dengan sistem Authentication dan Security.

Project ini menerapkan migrations, foreign key, seeders, factories, Eloquent relationships, scope, Tinker, Laravel Breeze, multi-role, custom middleware, PostPolicy, dan route protection.

---

## 🎯 Tujuan

Project ini bertujuan untuk memahami dan menerapkan:

- Migrations dan Foreign Key
- Seeder dan Factory
- Eloquent ORM
- Eloquent Relationships
- Eloquent Scope
- Tinker
- Authentication menggunakan Laravel Breeze
- Register, Login, dan Logout
- Multi-role
- Custom Middleware
- Authorization menggunakan Policy
- Protected Routes

---

## 🛠️ Teknologi yang Digunakan

- PHP
- Laravel
- MySQL
- Laravel Breeze
- Blade
- Composer
- NPM
- Laragon
- Visual Studio Code

---

# 🗄️ Bagian A — Database & Eloquent

## 1. Migrations

Project menggunakan migration untuk membuat database E-Commerce yang terdiri dari 7 tabel:

- `users`
- `categories`
- `products`
- `orders`
- `order_items`
- `tags`
- `product_tag`

Foreign key digunakan untuk menghubungkan tabel-tabel tersebut.

Relasi database meliputi:

- `products` → `categories`
- `products` → `users`
- `order_items` → `orders`
- `order_items` → `products`
- `product_tag` → `products`
- `product_tag` → `tags`

---

## 2. Seeders dan Factories

Project menggunakan Seeder dan Factory untuk menghasilkan data E-Commerce.

Factory digunakan untuk menghasilkan **50+ produk realistis** sesuai requirement tugas.

Data yang digunakan meliputi:

- Users
- Categories
- Products
- Orders
- Order Items
- Tags

---

## 3. Model dan Relationships

Project menggunakan Eloquent Model untuk mengelola data dan relationships.

Relationships yang diterapkan antara lain:

- User memiliki banyak Product
- User memiliki banyak Order
- Category memiliki banyak Product
- Product memiliki satu Category
- Product memiliki satu User
- Product memiliki banyak Tag
- Order memiliki banyak Order Item
- Order Item memiliki satu Product
- Tag memiliki banyak Product

---

## 4. Eloquent Scope

Project menerapkan Eloquent Scope pada model `Product`.

Scope yang digunakan:

`Product::available()`

Scope digunakan untuk mengambil produk yang tersedia berdasarkan kondisi stok.

Contoh:

`Product::available()->get()`

---

## 5. Tinker

Tinker digunakan untuk menguji data, relationships, dan query Eloquent.

Lima query yang digunakan untuk dokumentasi adalah:

1. `Product::count()`
2. `Product::with('category')->first()`
3. `User::first()->orders->count()`
4. `Order::withSum('items as total', 'price')->first()`
5. `Product::whereRelation('category', 'name', 'Elektronik')->get()`

---

# 🔐 Bagian B — Authentication & Security

## 6. Laravel Breeze

Project menggunakan Laravel Breeze untuk menyediakan sistem Authentication.

Fitur yang tersedia:

- Register
- Login
- Logout

---

## 7. Multi-Role

Project menerapkan tiga role pengguna:

- `admin`
- `editor`
- `user`

Setiap role memiliki hak akses yang berbeda sesuai dengan aturan aplikasi.

---

## 8. Custom Middleware

Project menggunakan custom middleware untuk membatasi akses berdasarkan role pengguna.

Middleware melakukan pengecekan role sebelum pengguna dapat mengakses route tertentu.

---

## 9. PostPolicy

Project menggunakan `PostPolicy` untuk mengatur authorization terhadap aksi:

- Edit post
- Delete post

Policy digunakan untuk menentukan apakah pengguna memiliki hak melakukan aksi terhadap sebuah post berdasarkan role dan kepemilikan data.

---

## 10. Route Protection

Route tertentu dilindungi menggunakan authentication middleware dan custom role middleware.

Pengujian dilakukan menggunakan dua role berbeda untuk memastikan pengguna hanya dapat mengakses halaman sesuai dengan hak aksesnya.

---

# 📸 Dokumentasi Tinker

> **Catatan:** Berdasarkan file Tugas Rutin Pertemuan 11, dokumentasi yang secara eksplisit diwajibkan dalam bentuk screenshot adalah **5 query Tinker**.

## 1. Product Count

Query:

`Product::count()`

<img width="706" height="136" alt="image" src="https://github.com/user-attachments/assets/35799c5e-0fcb-47c3-bf91-734b60e68599" />


---

## 2. Product + Category

Query:

`Product::with('category')->first()`

<img width="721" height="304" alt="image" src="https://github.com/user-attachments/assets/39036f90-800c-42b2-beac-f1d483a52998" />


---

## 3. User Orders

Query:

`User::first()->orders->count()`

<img width="538" height="73" alt="image" src="https://github.com/user-attachments/assets/bc7a16f9-1618-4848-8452-0e0131b3ea90" />


---

## 4. Order Total

Query:

`Order::withSum('items as total', 'price')->first()`

<img width="579" height="185" alt="image" src="https://github.com/user-attachments/assets/c8bd4143-2431-445b-836d-666074ae2b05" />


---

## 5. Product berdasarkan Category

Query:

`Product::whereRelation('category', 'name', 'Elektronik')->get()`

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/9c7a4c2a-e623-4c20-9a4c-6ecc07919f25" />


---

# ⭐ Bonus

## Filament Admin Panel

Filament merupakan fitur bonus yang dapat digunakan untuk menyediakan admin panel.

## Eager Loading

Eager Loading merupakan fitur bonus.

Contoh penerapan:

`Product::with('category')`

Eager Loading digunakan untuk mengambil data relationship secara bersamaan.

---

# 🧩 Struktur Project

    TugasWeb-P11-EcommerceAuth/
    │
    ├── app/
    │   ├── Http/
    │   │   ├── Controllers/
    │   │   └── Middleware/
    │   │
    │   ├── Models/
    │   └── Policies/
    │
    ├── bootstrap/
    ├── config/
    │
    ├── database/
    │   ├── factories/
    │   ├── migrations/
    │   └── seeders/
    │
    ├── public/
    ├── resources/
    │   └── views/
    │
    ├── routes/
    │   └── web.php
    │
    ├── storage/
    ├── tests/
    ├── .env.example
    ├── artisan
    ├── composer.json
    ├── package.json
    └── README.md

---

# ▶️ Cara Menjalankan Project

### 1. Clone Repository

`git clone https://github.com/rhmtnst/TugasWeb-P11-EcommerceAuth.git`

### 2. Masuk ke Folder Project

`cd TugasWeb-P11-EcommerceAuth`

### 3. Install Dependency Laravel

`composer install`

### 4. Install Dependency Frontend

`npm install`

### 5. Buat File `.env`

`copy .env.example .env`

### 6. Generate Application Key

`php artisan key:generate`

### 7. Konfigurasi Database

Buat database MySQL dengan nama:

`tugasweb_p11`

Kemudian sesuaikan konfigurasi pada `.env`:

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=tugasweb_p11`

`DB_USERNAME=root`

`DB_PASSWORD=`

### 8. Jalankan Migration dan Seeder

`php artisan migrate --seed`

### 9. Jalankan Server Laravel

`php artisan serve`

Project dapat diakses melalui:

`http://127.0.0.1:8000`

---

# 📚 Kesimpulan

Tugas Web Pertemuan 11 menerapkan konsep Database & Eloquent serta Authentication & Security menggunakan Laravel.

Pada bagian Database & Eloquent, project menggunakan 7 tabel E-Commerce dengan foreign key, Seeder dan Factory untuk menghasilkan 50+ produk realistis, Eloquent Relationships, Eloquent Scope, serta pengujian menggunakan 5 query Tinker.

Pada bagian Authentication & Security, project menggunakan Laravel Breeze, multi-role admin/editor/user, custom middleware, PostPolicy untuk authorization edit/delete, serta route protection dengan pengujian menggunakan dua role.

Project juga mencantumkan Filament dan Eager Loading sebagai fitur bonus.

---

# 🔗 Repository

[GitHub — TugasWeb-P11-EcommerceAuth](https://github.com/rhmtnst/TugasWeb-P11-EcommerceAuth)

# Praktikum 10 – Pemrograman Web  
## Penerapan OOP, Class Library, dan Modularisasi di PHP

Repository ini berisi hasil praktikum ke-10 mata kuliah Pemrograman Web yang berfokus pada penerapan **Object-Oriented Programming (OOP)**, **class library**, dan **modularisasi** di PHP. Pada praktikum ini dibuat beberapa class seperti `Mobil`, `Form`, dan `Database`, serta mengimplementasikan modularisasi melalui pemisahan file.

---

## 📁 Struktur Folder
lab10_php_oop/
│── index.php
│── proses.php
│── form.php
│── database.php
│── config.php
│── mobil.php
│── form_input.php


---

## ⚙️ Langkah Praktikum

### 1. **Membuat Class Mobil**
File `mobil.php` berisi class sederhana untuk mendemonstrasikan konsep dasar OOP: atribut, constructor, method, dan objek.

Class ini memuat:
- Property: warna, merk, harga  
- Method: `gantiWarna()` dan `tampilWarna()`  
- Pembuatan dua objek mobil untuk menunjukkan perubahan state objek  

---

### 2. **Membuat Class Library untuk Form**
File `form.php` berisi class `Form` yang digunakan untuk membuat form HTML secara dinamis.  
Class ini bersifat reusable sehingga dapat digunakan pada banyak file tanpa harus menulis ulang kode HTML.

Fitur dalam class:
- Menambah field input (`addField`)
- Menampilkan form (`displayForm`)
- Menggunakan konsep modular dan OOP

---

### 3. **Implementasi Class Form**
Pada file `index.php`, class `Form` digunakan untuk membuat form input data mahasiswa dengan field:
- NIM  
- Nama  
- Alamat  

Form kemudian diarahkan ke file `proses.php`.

---

### 4. **Membuat Class Database (Modularisasi + OOP)**
File `database.php` berisi class untuk:
- Koneksi database
- Insert data
- Eksekusi query

Class ini mengambil konfigurasi dari file `config.php` untuk menjaga modularisasi.

---

### 5. **Proses Input ke Database**
File `proses.php`:
- Mengambil data POST dari form
- Menggunakan class `Database` untuk menyimpan data ke tabel `mahasiswa`
- Menampilkan pesan berhasil

---

## 🗄️ Struktur Tabel Database

Sebelum menjalankan aplikasi, buat database:
latihan_oop


Lalu jalankan query berikut untuk membuat tabel:

```sql
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20),
    nama VARCHAR(100),
    alamat VARCHAR(255)
);

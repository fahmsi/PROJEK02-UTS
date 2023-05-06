# PROJEK02-UTS

x### Ujian Tengah Semester - Projek CRUD E-Commerce Project

oleh : [Abiyyu Cakra](https://linkedin.com/in/abiyyu-cakra)

## Daftar Isi<br>
- [Daftar Isi](#daftar-isi)
- [Intro](#intro)
- [Prequisite](#prequisite)
- [Struktur Folder](#struktur-folder)
- [Detail Pengerjaan](#detail-pengerjaan)
  - [1. Toko Sembako](#1-toko-sembako)
  - [2. Toko Motor](#2-toko-motor)
  - [3. Toko Pakaian](#3-toko-pakaian)
  - [4. Toko Alat Tulis](#4-toko-alat-tulis)
- [Detail Penilaian](#detail-penilaian)
  - [1. Codingan](#1-codingan)
  - [2. Upload ke kreasi](#2-upload-ke-kreasi)
  - [3. Buat Postingan LinkedIn](#3-buat-postingan-linkedin)
  - [4. Upload Ke GitHub](#4-upload-ke-github)
- [Detail Pengumpulan](#detail-pengumpulan)
- [Tenggat Waktu](#tenggat-waktu)
- [Akhir Kata](#akhir-kata)

<br>

## Intro

CRUD E-Commerce Project adalah proyek individu yang bertujuan untuk membuat sistem CRUD dengan mengimplementasikan materi PDO. Proyek ini bertujuan untuk memperkuat pemahaman mahasiswa tentang konsep dasar PDO dengan mengimplementasikannya dalam membuat sistem CRUD. Adapun tema yang sudah ditentukan adalah sebagai berikut

1. Toko Motor
2. Toko Pakaian
3. Toko Alat Tulis
4. Toko Sembako

<br>

## Prequisite

Untuk menyelesaikan project kali ini, kamu akan diajak untuk membuat sistem ecommerce sederhana berbasis CRUD dengan menerapkan semua materi PHP yang telah dipelajari sebelumnya. Namun, sebelum mulai coding, pastikan kamu telah mengimpor database yang telah disediakan di link dibawah ini ini.

[File SQL](https://github.com/abiyyu03/web2-boilerplate/tree/UTS)

cara download :
Klik tombol biru bertuliskan **code**, kemudian klik **download zip**

<img src="img/cara_download.png" width="360"> 

<details>
<summary><b>Dependensi Projek</b></summary>

    Untuk memudahkan kamu dalam mengerjakan projek, silakan download file yang di butuhkan, seperti file SQL, template web, dan lain-lain ada di tautan Dibawah ini  

[Link Boilerplate UTS](https://github.com/abiyyu03/web2-boilerplate/tree/UTS)

</details>

<details>
<summary><b>Pemahaman yang cukup</b></summary>
    
    Ada baiknya kamu memahami materi yang sudah pernah dipelajari dari pertemuan 1 - 7. Tujuannya supaya kamu bisa mengerjakan projek ini dengan baik dan benar. Apabila ada hal yang masih belum dimengerti, ada baiknya kamu bertanya kepada asisten dosen kamu. Benarlah ungkapan pepatah yang berbunyi, "Malu bertanya sesat pas nugas".

</details>

<details>
<summary><b>Tanamkan ini</b></summary>
    
    yakinlah bahwa kamu bisa mengerjakan projek. error dan kepusingan yang akan kamu hadapi ketika mengerjakan projek, jadikan itu sebagai batu loncatan kamu untuk menjadi programmer yang handal. 

</details>
<br>     

## Struktur Folder

![struktur-folder](img/struktur_folder.png) 

Saya sudah menyediakan code boilerplate / template code untuk projek uts. silakan kalian download [disini](https://github.com/abiyyu03/web2-boilerplate/blob/master/uts/web2-uts-template.zip)

Kemudian didalamnya Terdapat dua folder, yang masing-masing memiliki fungsi yang berbeda, yaitu folder **frontend** dan **backend**
1. frontend
   
   Folder frontend berisikan codingan tampilan halaman ecommerce yang nantinya akan diakses oleh user. gunakan template yang sudah disediakan atau jika kalian memilih template lain diperbolehkan 
2. backend
   
   Folder ini berisikan tampilan sisi backend CRUD dari aplikasi yang kamu buat. Tampilan backend ini diwajibkan menggunakan template sbadmin (template sudah tersedia di [boilerplate](https://github.com/abiyyu03/web2-boilerplate/tree/UTS))

<br>

## Detail Pengerjaan

Pastikan kalian sudah membaca Bagian [struktur folder](#struktur-folder), sebelum membaca bagian ini. Jika sudah mari kita lanjut.

Secara umum kalian diminta untuk membuat dua macam tampilan aplikasi, yaitu **frontend**, sebagai etalase produk dan **backend**, sebagai tampilan CRUD dari aplikasi
 
contoh Tampilan Frontend :

<img src="img/frontend.png" width="360"> 

contoh Tampilan Backend :

<img src="img/backend.png" width="460"> 

Penting untuk kamu mengetahui ketentuan Khusus dari studi kasus yang kamu dapat :

### 1. Toko Sembako
Kamu diminta membuat aplikasi CRUD sederhana untuk toko kelontong dengan kebutuhan berikut ini :
- Membuat fitur CRUD (Tambah, tampilkan, ubah dan hapus data) untuk tabel merk, pesanan, produk dan jenis_produk
- fitur CRUD dibuat di sisi backend dan wajib menggunakan template sbadmin
- Membuat tampilan frontend untuk ditampilkan kepada pelanggan. tampilan frontend berupa produk-produk dari **tabel produk** sebagai display
- tampilan frontend ini dibuat menggunakan template yang sudah disediakan di boilerplate. atau sangat diperbolehkan jika menggunakan template lain.

### 2. Toko Motor
Seorang bos dealer motor membutuhkan aplikasi CRUD sederhana untuk toko motor dengan kebutuhan berikut ini :
- Membuat fitur CRUD (Tambah, tampilkan, ubah dan hapus data) untuk tabel merk, pesanan, motor dan tipe_motor
- fitur CRUD dibuat di sisi backend dan wajib menggunakan template sbadmin
- Membuat tampilan frontend untuk ditampilkan kepada pelanggan. tampilan frontend berupa produk motor yang diambil dari **tabel motor** sebagai display
- tampilan frontend ini dibuat menggunakan template yang sudah disediakan di boilerplate. atau sangat diperbolehkan jika menggunakan template lain.
  
### 3. Toko Pakaian
Eky adalah seorang penjual pakaian terkenal di kotanya. ia membutuhkan aplikasi CRUD sederhana untuk toko pakaiannya dengan kebutuhan berikut ini :
- Membuat fitur CRUD (Tambah, tampilkan, ubah dan hapus data) untuk tabel pakaian, pesanan, dan tipe_pakaian
- fitur CRUD dibuat di sisi backend dan wajib menggunakan template sbadmin
- Membuat tampilan frontend untuk ditampilkan kepada pelanggan. tampilan frontend berupa produk pakaian yang diambil dari **tabel pakaian** sebagai display
- tampilan frontend ini dibuat menggunakan template yang sudah disediakan di boilerplate. atau sangat diperbolehkan jika menggunakan template lain.
  
### 4. Toko Alat Tulis
Bintang mempunyai toko alat tulis. ia membutuhkan aplikasi CRUD sederhana untuk tokonya dengan kebutuhan berikut ini :
- Membuat fitur CRUD (Tambah, tampilkan, ubah dan hapus data) untuk tabel merk, pesanan dan produk
- fitur CRUD dibuat di sisi backend dan wajib menggunakan template sbadmin
- Membuat tampilan frontend untuk ditampilkan kepada pelanggan. tampilan frontend berupa produk pakaian yang diambil dari **tabel pakaian** sebagai display
- tampilan frontend ini dibuat menggunakan template yang sudah disediakan di boilerplate. atau sangat diperbolehkan jika menggunakan template lain.

<br>

## Detail Penilaian

### 1. Codingan 
- Membuat Frontend untuk etalase produk
- Membuat Backend untuk dashboard admin dan membuat fitur Create, Read, Update dan Delete data didalamnya
- Tidak ada error pada aplikasi
- Menu pada Frontend dan Backend Berfungsi dengan baik

### 2. Upload ke kreasi
Aplikasi yang sudah dibuat di upload ke kreasi. berikut dengan databasenya

### 3. Buat Postingan LinkedIn
Buat sebuah postingan yang berisi penjelasan tentang website yang sudah kamu buat. Deskripsikan fitur, halaman, konten, dan segala aspek yang relevan dengan website tersebut dengan sebaik mungkin. Pastikan untuk memberikan informasi yang jelas dan mudah dipahami oleh pembaca. berikan nama dan nim serta jangan lupa cantumkan link repository github dan kreasi

### 4. Upload Ke GitHub
Buat repository baru untuk projek ini, artinya projek UTS ini kalian buat foldernya diluar praktikum. jangan di upload ke repository praktikum ya

<br>

## Detail Pengumpulan
Pengumpulan project UTS dilakukan dengan mengisi Google Form yang telah disediakan dan dapat diakses melalui link berikut. 

[https://forms.gle/ASCVG47crwfr1T3C6](https://forms.gle/ASCVG47crwfr1T3C6)

<br>

## Tenggat Waktu

Tenggat waktu untuk menyelesaikan projek ini adalah tanggal **15 Mei 2023 pada jam 23.59**. lewat dari deadline, tugas tidak akan diterima.

## Akhir Kata

Jika kalian masih bingung dengan penjelasan diatas, silakan tanyakan melalui grup ataupun japri saya ditelegram ya

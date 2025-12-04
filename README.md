## JANJI
Saya Firda Ridzki Utami dengan Nim 2401626 mengerjakan TP10 dalam Praktikum mata kuliah Desain Pemograman Berorientasi Objek (DPBO)
untuk keberkahannya maka saya tidak melakukan kecurang seperti yang telah dispesifikasikan

## Desain Program
<img width="1057" height="522" alt="Desain" src="https://github.com/user-attachments/assets/a4f27155-2aa3-40d6-ade3-51c4b5a01168" />

## Alur Program
Program ini dibangun menggunakan arsitektur MVVM (Model–View–ViewModel) untuk memisahkan logika bisnis, tampilan, dan pengendalian alur data. Tema aplikasi ini adalah peminjaman barang elektronik yang menggunakan empat tabel utama—Barang, Pegawai, Pelanggan, dan Stok—yang saling berelasi di dalam database. 
a. Model
Terdiri dari empat file:
Barang.php
Pelanggan.php
Pegawai.php
Stok.php
yang berfungsi menangani struktur data dan query database (CRUD).
b. View
Berisi file tampilan seperti:
barang_list.php
barang_form.php
pelanggan_list.php, dll.
View hanya menampilkan data tanpa logika bisnis.
c. ViewModel
Terdiri dari 4 file:
BarangViewModel.php
PegawaiViewModel.php
ViewModel menjadi jembatan antara View dan Model: menerima request, memproses, memanggil Model, dan mengirim data kembali ke View.


d. Data binding terjadi saat ViewModel mengirim data ke View, lalu View menampilkannya. Di barang_list.php, data array dari ViewModel di-bind ke tabel HTML. Di barang_form.php, jika sedang edit, ViewModel mengirim data barang view mengisikan value ke input form. Di list pegawai/pelanggan, data dari database ditampilkan langsung melalui variabel yang diberikan ViewModel.




## Dokumentasi
## Create, Update, Delete Barang

https://github.com/user-attachments/assets/8e0f5c42-ba82-4119-98ac-c6963bb092dc

## Create, Update, Delete pegawai

https://github.com/user-attachments/assets/3306dfca-aef8-4c14-8176-c0bc498528b2

## Create, Update, Delete Pelanggan

https://github.com/user-attachments/assets/4ebd1c0b-b10e-41d1-bb4c-b0c87217a0f4

## Create, Update, Delete Stok Barang


https://github.com/user-attachments/assets/faa7a038-c491-4020-9941-5636b89ee1e2


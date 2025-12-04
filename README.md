## JANJI
Saya Firda Ridzki Utami dengan Nim 2401626 mengerjakan TP10 dalam Praktikum mata kuliah Desain Pemograman Berorientasi Objek (DPBO)
untuk keberkahannya maka saya tidak melakukan kecurang seperti yang telah dispesifikasikan

## Desain Program
<img width="1057" height="522" alt="Desain" src="https://github.com/user-attachments/assets/a4f27155-2aa3-40d6-ade3-51c4b5a01168" />

## Alur Program


Aplikasi ini merupakan web peminjaman barang elektronik yang dirancang untuk mengelola data barang, pelanggan, pegawai, dan stok secara terstruktur. Melalui sistem ini, pengguna dapat melakukan proses pendataan barang elektronik, meminjamkan barang, mengatur stok, serta mencatat data pegawai dan pelanggan secara efisien. Agar pengelolaan data lebih rapi dan terorganisir, aplikasi menggunakan arsitektur MVVM (Model–View–ViewModel), sehingga pemisahan antara logika bisnis, tampilan, dan alur data menjadi lebih jelas.

Program ini memanfaatkan empat tabel utama di dalam database—Barang, Pegawai, Pelanggan, dan Stok yang saling berelasi dan mendukung proses peminjaman barang elektronik. Dengan arsitektur MVVM dan penggunaan data binding, alur data menjadi lebih bersih dan mudah dipelihara.

**a. Model**


Model berada di folder /models/ dan terdiri dari empat file utama:
**Barang.php
Pelanggan.php
Pegawai.php
Stok.php**
Setiap model berfungsi untuk, Mendefinisikan struktur data (atribut yang sesuai dengan tabel database), Menangani operasi** CRUD **(Create, Read, Update, Delete), Melakukan query database melalui Database.php, Mengembalikan data ke ViewModel dalam bentuk array/objek yang siap diolah. Model sama sekali **tidak berhubungan dengan tampilan,** karena perannya hanya fokus pada data.



**b. View**


View berada di folder /view/ dan berisi file-file tampilan seperti:
**barang_list.php
barang_form.php
pegawai_list.php
pegawai_form.php
pelanggan_form.php
pelanggan_list.php
stok_list.php
stok_form.php**

serta file template seperti **header.php** dan **footer.php**
Fungsi View, Menampilkan data ke pengguna dalam bentuk HTML, Menyediakan form input untuk tambah/edit data, Menampilkan tabel data hasil binding dari ViewModel, Tidak mengandung logika bisnis yang kompleks (View hanya menerima dan menampilkan data). View sepenuhnya bergantung pada data yang dikirim dari ViewModel.



**c. ViewModel**



ViewModel berada di folder /viewmodels/ dan terdiri dari:
**BarangViewModel.php
PegawaiViewModel.php
PelangganViewModel.php
StokViewModel.php**
Peran ViewModel, Menjadi **jembatan** antara View dan Model, Menerima request dari user (melalui parameter GET/POST), Memanggil fungsi Model (misalnya tambahBarang, getAllBarang, updateBarang), Memvalidasi input jika diperlukan, Mengolah hasil query sebelum dikirim ke View, Mengirim data ke View dalam bentuk variabel untuk di-bind. ViewModel adalah pusat pengendali alur data dalam aplikasi.

**d. Data Binding**



Data binding dalam program ini terjadi ketika ViewModel mengirim data ke View, lalu View menampilkan data tersebut menggunakan variabel yang sudah disiapkan.
**barang_list.php**
Data array $barangList dari ViewModel akan ditampilkan sebagai tabel HTML.
ba**rang_form.php (mode edit)**
Jika edit, ViewModel mengirimkan data spesifik milik satu barang.
**list pegawai / pelanggan / stok**
Hasil query database yang dikirim oleh ViewModel ditampilkan baris per baris pada tabel HTML.
**Template header/footer** tetap menerima data dinamis jika diperlukan (misalnya judul halaman).



**e. Index se­bagai Router**


File **index.php** berperan sebagai router utama aplikasi.
Router menentukan:
ViewModel mana yang harus dijalankan


View mana yang harus ditampilkan


Aksi apa yang sedang dilakukan user (add, edit, delete, list)


Entitas apa yang sedang dibuka (barang, pegawai, dll.)





## Dokumentasi
## Create, Update, Delete Barang

https://github.com/user-attachments/assets/8e0f5c42-ba82-4119-98ac-c6963bb092dc

## Create, Update, Delete pegawai

https://github.com/user-attachments/assets/3306dfca-aef8-4c14-8176-c0bc498528b2

## Create, Update, Delete Pelanggan

https://github.com/user-attachments/assets/4ebd1c0b-b10e-41d1-bb4c-b0c87217a0f4

## Create, Update, Delete Stok Barang


https://github.com/user-attachments/assets/faa7a038-c491-4020-9941-5636b89ee1e2


## JANJI
Saya Firda Ridzki Utami dengan Nim 2401626 mengerjakan TP10 dalam Praktikum mata kuliah Desain Pemograman Berorientasi Objek (DPBO)
untuk keberkahannya maka saya tidak melakukan kecurang seperti yang telah dispesifikasikan

## Desain Program
<img width="1057" height="522" alt="Desain" src="https://github.com/user-attachments/assets/a4f27155-2aa3-40d6-ade3-51c4b5a01168" />


## **Alur Program**

Aplikasi ini merupakan **web peminjaman barang elektronik** yang dirancang untuk mengelola data barang, pelanggan, pegawai, dan stok secara terstruktur. Melalui sistem ini, pengguna dapat melakukan proses pendataan barang elektronik, meminjamkan barang, mengatur stok, serta mencatat data pegawai dan pelanggan secara efisien. Agar pengelolaan data lebih rapi dan terorganisir, aplikasi menggunakan arsitektur **MVVM (Model–View–ViewModel)**, sehingga pemisahan antara logika bisnis, tampilan, dan alur data menjadi lebih jelas.

Program ini memanfaatkan empat tabel utama di dalam database—**Barang**, **Pegawai**, **Pelanggan**, dan **Stok**—yang saling berelasi dan mendukung proses peminjaman barang elektronik. Dengan arsitektur MVVM dan penggunaan data binding, alur data menjadi lebih bersih dan mudah dipelihara.

---

### **a. Model**

Model berada di folder `/models/` dan terdiri dari empat file utama:

* **Barang.php**
* **Pelanggan.php**
* **Pegawai.php**
* **Stok.php**

Model menangani:

* Struktur data yang sesuai dengan tabel database
* Operasi **CRUD** (Create, Read, Update, Delete)
* Koneksi dan query ke database melalui `Database.php`
* Pengembalian data ke ViewModel dalam bentuk array/objek

Model hanya fokus pada data, tanpa logika tampilan.

---

### **b. View**

View berada di folder `/view/` dan berisi file-file tampilan seperti:

* **barang_list.php**
* **barang_form.php**
* **pegawai_list.php**
* **pelanggan_form.php**
* Template umum: **header.php**, **footer.php**

View berfungsi untuk:

* Menampilkan data ke pengguna melalui HTML
* Menampilkan form input untuk tambah/edit data
* Melakukan *binding* data yang dikirim dari ViewModel
* Tidak mengandung logika bisnis atau query

---

### **c. ViewModel**

Folder `/viewmodels/` berisi:

* **BarangViewModel.php**
* **PegawaiViewModel.php**
* **PelangganViewModel.php**
* **StokViewModel.php**

Peran ViewModel:

* Menghubungkan View dengan Model
* Menerima request dari user (add, edit, delete, list)
* Memanggil fungsi Model
* Memvalidasi dan mengolah data sebelum dikirim ke View
* Mengirimkan variabel yang siap ditampilkan di View

ViewModel adalah pusat alur kontrol program.

---

### **d. Data Binding**

Data binding terjadi saat ViewModel mengirimkan data ke View, kemudian View langsung menampilkannya. Beberapa contoh:

* **barang_list.php** → tabel menampilkan data dari `$barangList`
* **barang_form.php (edit mode)** → input terisi otomatis berdasarkan data dari ViewModel
* **pegawai_list.php / pelanggan_list.php** → baris tabel diisi oleh variabel dari ViewModel

Dengan cara ini, View tidak pernah mengambil data sendiri, tetapi hanya menampilkan data yang diberikan oleh ViewModel.

---

### **e. Index sebagai Router**

File **index.php** digunakan sebagai *router* utama aplikasi.
Router menentukan:

* ViewModel mana yang dijalankan
* Aksi apa yang diminta user (list, add, edit, delete)
* View mana yang harus ditampilkan

alur router:

```
index.php?screen=barang&action=list
→ BarangViewModel bekerja
→ Memanggil Model
→ Mengirim data ke View
→ Menampilkan barang_list.php
```

Dengan adanya router, navigasi aplikasi menjadi lebih dinamis dan terstruktur.

---

## Dokumentasi
## Create, Update, Delete Barang

https://github.com/user-attachments/assets/8e0f5c42-ba82-4119-98ac-c6963bb092dc

## Create, Update, Delete pegawai

https://github.com/user-attachments/assets/3306dfca-aef8-4c14-8176-c0bc498528b2

## Create, Update, Delete Pelanggan

https://github.com/user-attachments/assets/4ebd1c0b-b10e-41d1-bb4c-b0c87217a0f4

## Create, Update, Delete Stok Barang


https://github.com/user-attachments/assets/faa7a038-c491-4020-9941-5636b89ee1e2


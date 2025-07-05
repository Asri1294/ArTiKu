## ArTiKu — Website Baca Artikel & Manajemen Konten

**ArTiKu** adalah website sederhana berbasis **CodeIgniter 3** yang dikembangkan untuk memenuhi tugas project pembuatan aplikasi web.  
Website ini berfungsi sebagai **platform membaca artikel** dan **sistem manajemen konten** dengan panel admin untuk mengelola artikel dan feedback pengunjung.

---

## Deskripsi Singkat

ArTiKu dirancang dengan konsep:
- Pengunjung bisa **membaca artikel terbaru**, melihat detail, dan memberikan feedback.
- Admin bisa **login** ke dashboard, **membuat, mengedit, menghapus** artikel, serta melihat feedback yang masuk (CRUD).
- Website ini menggunakan **Bootstrap 5** agar tampilannya responsif dan mudah diakses di berbagai perangkat.

---

## Fitur Utama

 **Beranda**
- Halaman sambutan dengan banner.
- Cuplikan artikel terbaru.
- Cuplikan feedback pengunjung.

 **Daftar Artikel**
- Daftar semua artikel yang dipublikasikan.
- Artikel ditampilkan dalam bentuk **card** dengan gambar, judul, ringkasan, tombol baca.

 **Detail Artikel**
- Halaman detail berisi isi artikel lengkap.

 **Feedback**
- Form feedback untuk pengunjung.
- Feedback tampil di admin.

 **Login Admin**
- Autentikasi sederhana untuk admin.

 **Dashboard Admin**
- Statistik jumlah artikel & feedback.
- Daftar artikel terbaru.

 **CRUD Artikel**
- Buat, edit, hapus artikel.
- Upload gambar untuk setiap artikel.
- Konfirmasi hapus dengan **SweetAlert**.

 **Tampilan Feedback**
- Tabel feedback di dashboard admin.

 **Logout**
- Admin bisa keluar dari sistem.

---

## Alur Kerja

**1. Halaman Awal (User)**  
- User membuka beranda.
- Melihat banner, deskripsi website, dan link menuju daftar artikel.

**2. Daftar Artikel (User)**  
- User melihat kumpulan artikel terbaru.
- Masing-masing artikel tampil sebagai **card** dengan gambar, judul, ringkasan.
- Klik **Baca Selengkapnya** untuk membuka detail artikel.

**3. Detail Artikel (User)**  
- User membaca isi artikel lengkap.
- Jika ada form feedback, user bisa mengirim pesan.

**4. Login Admin**
- Admin masuk dengan username & password.

**5. Dashboard Admin**
- Lihat statistik artikel & feedback.
- Akses menu manajemen artikel & feedback (Side Bar).

**6. CRUD Artikel**
- Admin bisa membuat artikel baru.
- Isi judul, konten, status draft.
- Admin bisa mengedit artikel.
- Admin bisa menghapus artikel dengan konfirmasi **SweetAlert**.

**7. Tampilan Feedback**
- Admin melihat semua feedback yang masuk.

**8. Logout**
- Admin klik tombol logout untuk keluar.

---

## 📂 Struktur Folder
    ├── application/ # File CodeIgniter (controllers, models, views, dan file-file lain)
    ├── assets/ # gambar statis
    ├── uploads/ # Folder untuk gambar artikel
    ├── db/ #  Backup database SQL
    ├── index.php # File index CI
    ├── README.md # Deskripsi project ini


---

##  Cara Menjalankan

1. **Clone atau download** folder project.  
2. Letakkan di folder **htdocs** (jika pakai XAMPP).  
3. Import file `.sql` (jika disediakan).  
4. Atur koneksi database di `application/config/database.php`.  
5. Jalankan via `localhost/nama_project`.  
6. Login admin: **(username & password sesuai data di tabel `admin`)**.

---

##  Teknologi yang Digunakan

- **CodeIgniter 3**
- **PHP 7.4.33**
- **MySQL--phpMyAdmin**
- **Bootstrap 5**
- **SweetAlert2**
- **FontAwesome**

---

##  Catatan

- Upload gambar dilakukan manual ke folder `/uploads` (bisa dikembangkan dengan upload dinamis, *Author mau tapi diburu deadline jadi upload yang sudah dikerjakan saja :' ).
- Proyek ini hanya untuk pembelajaran — belum menggunakan fitur login multi-role, validasi tingkat lanjut, atau editor konten seperti TinyMCE.

---

##  Author

Project ini dibuat oleh **Asria R.** untuk memenuhi tugas project pembuatan website *ArTiKu*.

---

## License

Open source untuk keperluan belajar dan tugas kuliah.

---

Terima kasih!  


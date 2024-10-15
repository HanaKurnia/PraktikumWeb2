# PraktikumWeb2
## Deskripsi
Dibuat untuk memenuhi tugas 1 Praktikum Web 2.
## Jobsheet 1
### Instruksi Kerja
1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().

### Deskripsi
Script ini merupakan contoh sederhana untuk mengelola data mahasiswa menggunakan OOP (Object-Oriented Programming) dalam PHP. Script ini menampilkan data mahasiswa dan memperbarui informasi jurusan serta NIM mahasiswa.

### Fitur
- Instansiasi Objek: Membuat objek mahasiswa dengan atribut nama, nim, dan jurusan.
  Cara penggunaan : $Mahasiswa1 = new Mahasiswa("Hana", "230202062", "Jurusan Komputer dan Bisnis");
- Tampilkan Data Mahasiswa: Metode tampilkanData() digunakan untuk menampilkan informasi mahasiswa.
  Cara penggunaan : echo $Mahasiswa1->tampilkanData();
- Update Data Mahasiswa: Metode updateJurusan() digunakan untuk memperbarui jurusan dan NIM mahasiswa.
  Cara penggunaan : $Mahasiswa1->updateJurusan("Jurusan Rekayasa Elektro dan Mekatronika", "230202063");
- Menampilkan Data Setelah Pembaruan: Setelah melakukan pembaruan, Anda bisa menampilkan data terbaru dengan metode yang sama.
  Cara penggunaan : echo $Mahasiswa1->tampilkanData();

### Struktur Kode
Kode terdiri dari kelas Mahasiswa dengan beberapa atribut dan metode:
- Atribut:
$nama: Menyimpan nama mahasiswa.
$nim: Menyimpan NIM mahasiswa.
$jurusan: Menyimpan jurusan mahasiswa.
- Metode:
- __construct($nama, $nim, $jurusan): Constructor untuk membuat objek mahasiswa dengan atribut yang diberikan.
- tampilkanData(): Menampilkan informasi nama, NIM, dan jurusan mahasiswa.
- updateJurusan($jurusan, $nimBaru): Memperbarui jurusan dan NIM mahasiswa.

### Script program dan output
![instruksi_js1](https://github.com/user-attachments/assets/6cfa0e1c-454f-44d3-894b-ce9ca3918419)
![instruksi_js1](https://github.com/user-attachments/assets/608fa921-9c2a-41ba-ac42-7b3bccb86161)

### Tugas 
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output
Kelas adalah blueprint atau rancangan untuk membuat objek. Kelas menggabungkan properti (atribut) dan metode (fungsi) yang mewakili perilaku dan keadaan dari suatu objek.
### Penjelasan pembuatan kelas dan penggunaan metode
### Deskripsi
Script ini adalah contoh sederhana yang menggunakan OOP (Object-Oriented Programming) di PHP untuk mengelola data dosen. Script ini dapat menampilkan informasi dosen termasuk nama, NIP, dan mata kuliah yang diajar.

### Fitur
- Instansiasi Objek: Membuat objek dosen dengan atribut nama, nip, dan matakuliah.
  Cara penggunaan : $Dosen1 = new Dosen("Anto", "12345678", "Matdis");
- Tampilkan Data Dosen: Metode tampilkanDosen() digunakan untuk menampilkan data dosen.
  echo $Dosen1->tampilkanDosen();


### Struktur Kode
Kode ini terdiri dari kelas Dosen yang memiliki atribut dan metode sebagai berikut:
- Atribut:
$nama: Menyimpan nama dosen.
$nip: Menyimpan NIP (Nomor Induk Pegawai) dosen.
$matakuliah: Menyimpan nama mata kuliah yang diajar dosen.
- Metode:
- __construct($nama, $nip, $matakuliah): Constructor untuk menginisialisasi objek dosen dengan atribut nama, nip, dan matakuliah.
- tampilkanDosen(): Metode untuk menampilkan informasi dosen dalam bentuk string.
### Program dan output
![js1_tugas](https://github.com/user-attachments/assets/4e71a851-7095-4c04-9fa2-be72876ff3a2)
![output_tugas](https://github.com/user-attachments/assets/22717e9e-332c-4855-b388-586e467dd4cd)

## Jobsheet 2
### Instruksi Kerja
1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
### Script program
![class   object_js2](https://github.com/user-attachments/assets/e7e207b0-2678-4c3d-8335-2ac969771e62)
### Penjelasan
- class Mahasiswa : Mendefinisikan sebuah kelas dengan nama Mahasiswa.
- public $nama;
public $nim;
public $jurusan; merupakan atribut atau properti. Pada tugas ini, atribut dideklarasikan sebagai public, artinya atribut tersebut dapat diakses di mana saja, baik di dalam kelas, dari luar kelas, maupun oleh kelas turunan.
- public function __construct($nama, $nim, $jurusan) : ini adalah konstruktor yang digunakan untuk menginisialisasi atribut kelas.
- 
3. Encapsulation
- Ubah atribut dalam class Mahasiswa menjadi private.
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
- Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
4. Inheritance
- Buat class Pengguna dengan atribut nama dan metode getNama().
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
5. Polymorphism
- Buat class Pengguna dengan metode aksesFitur().
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().
6. Abstraction
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.

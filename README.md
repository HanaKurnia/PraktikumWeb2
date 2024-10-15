# PraktikumWeb2
# Jobsheet 1
# Instruksi Kerja
1. Membuat Class dan Object
o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
o Buat metode tampilkanData() dalam class Mahasiswa.
o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
2. Implementasi Constructor
o Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
o Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
3. Membuat Metode Tambahan
o Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
o Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
4. Penggunaan Atribut dan Metode
o Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
o Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
# Script program dan output
![instruksi_js1](https://github.com/user-attachments/assets/6cfa0e1c-454f-44d3-894b-ce9ca3918419)
![output_instruksi](https://github.com/user-attachments/assets/30398017-5d0d-4642-ab7a-c442004196da)


# Tugas 
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output
> Kelas adalah blueprint atau rancangan untuk membuat objek. Kelas menggabungkan properti (atribut) dan metode (fungsi) yang mewakili perilaku dan keadaan dari suatu objek.
# Penjelasan pembuatan kelas dan penggunaan metode
> class Dosen : Mendefinisikan sebuah kelas dengan nama Dosen.
> Atribut atau properti : $nama, $nip, $mataKuliah adalah variabel yang mewakili karakteristik dari kelas. Pada tugas ini, atribut dideklarasikan sebagai public, artinya atribut tersebut dapat diakses di mana saja, baik di dalam kelas, dari luar kelas, maupun oleh kelas turunan.
> public function __construct($nama, $nip, $mataKuliah) : ini adalah konstruktor yang digunakan untuk menginisialisasi atribut kelas.
> $this->nama : Mengakses atribut kelas di dalam metode dengan menggunakan $this, yang merujuk ke objek.
> public function tampilkanDosen() : ini adalah metode atau fungsi di dalam kelas yang menggambarkan perilaku dari objek yang dibuat dari kelas ini.
> $Dosen1 = new Dosen("Anto", "12345678", "Matdis") : Membuat objek baru dari kelas Dosen.
> $Dosen1->tampilkanDosen() : Memanggil metode tampilkanDosen() untuk menampilkan informasi dosen.
# Program dan output
![js1_tugas](https://github.com/user-attachments/assets/4e71a851-7095-4c04-9fa2-be72876ff3a2)
![output_tugas](https://github.com/user-attachments/assets/22717e9e-332c-4855-b388-586e467dd4cd)



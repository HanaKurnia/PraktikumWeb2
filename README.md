# PraktikumWeb2
Jobsheet 1
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



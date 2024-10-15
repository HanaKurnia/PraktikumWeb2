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
Script ini merupakan contoh sederhana untuk mengelola data mahasiswa menggunakan OOP (Object
Oriented Programming) dalam PHP. Script ini menampilkan data mahasiswa dan memperbarui
informasi jurusan serta NIM mahasiswa.

### Fitur
- Instansiasi Objek: Membuat objek mahasiswa dengan atribut nama, nim, dan jurusan.
  Cara penggunaan : $Mahasiswa1 = new Mahasiswa("Hana", "230202062", "Jurusan Komputer dan
  Bisnis");
- Tampilkan Data Mahasiswa: Metode tampilkanData() digunakan untuk menampilkan informasi
  mahasiswa.
  Cara penggunaan : echo $Mahasiswa1->tampilkanData();
- Update Data Mahasiswa: Metode updateJurusan() digunakan untuk memperbarui jurusan dan NIM
  mahasiswa.
  Cara penggunaan : $Mahasiswa1->updateJurusan("Jurusan Rekayasa Elektro dan Mekatronika",
  "230202063");
- Menampilkan Data Setelah Pembaruan: Setelah melakukan pembaruan, Anda bisa menampilkan data
  terbaru dengan metode yang sama.
  Cara penggunaan : echo $Mahasiswa1->tampilkanData();

### Struktur Kode
Kode terdiri dari kelas Mahasiswa dengan beberapa atribut dan metode:
- Atribut:
- $nama: Menyimpan nama mahasiswa.
- $nim: Menyimpan NIM mahasiswa.
- $jurusan: Menyimpan jurusan mahasiswa.
- Metode:
- __construct($nama, $nim, $jurusan): Constructor untuk membuat objek mahasiswa dengan atribut
- yang diberikan.
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
Kelas adalah blueprint atau rancangan untuk membuat objek. Kelas menggabungkan properti
(atribut) dan metode (fungsi) yang mewakili perilaku dan keadaan dari suatu objek.
### Penjelasan pembuatan kelas dan penggunaan metode
### Deskripsi
Script ini adalah contoh sederhana yang menggunakan OOP (Object-Oriented Programming) di PHP
untuk mengelola data dosen. Script ini dapat menampilkan informasi dosen termasuk nama, NIP,
dan mata kuliah yang diajar.

### Fitur
- Instansiasi Objek: Membuat objek dosen dengan atribut nama, nip, dan matakuliah.
  Cara penggunaan : $Dosen1 = new Dosen("Anto", "12345678", "Matdis");
- Tampilkan Data Dosen: Metode tampilkanDosen() digunakan untuk menampilkan data dosen.
  Cara penggunaan : echo $Dosen1->tampilkanDosen();

### Struktur Kode
Kode ini terdiri dari kelas Dosen yang memiliki atribut dan metode sebagai berikut:
- Atribut:
- $nama: Menyimpan nama dosen.
- $nip: Menyimpan NIP (Nomor Induk Pegawai) dosen.
- $matakuliah: Menyimpan nama mata kuliah yang diajar dosen.
- Metode:
- __construct($nama, $nip, $matakuliah): Constructor untuk menginisialisasi objek dosen dengan
- atribut nama, nip, dan matakuliah.
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
### Penjelasan
### Deskripsi
Script ini adalah contoh sederhana dari penggunaan OOP (Object-Oriented Programming) dalam PHP
untuk mengelola data mahasiswa. Script ini dapat digunakan untuk menampilkan data mahasiswa,
seperti nama, NIM, dan jurusan.

### Fitur
- Instansiasi Objek: Membuat objek mahasiswa dengan atribut nama, nim, dan jurusan.
  Cara penggunaan : $Mahasiswa1 = new Mahasiswa("Hani", "220102062", "Teknik Mesin");
- Tampilkan Data Mahasiswa: Metode tampilkanData() digunakan untuk menampilkan informasi
mahasiswa.
Cara penggunaan : echo $Mahasiswa1->tampilkanData();

### Struktur Kode
Script ini terdiri dari kelas Mahasiswa yang memiliki atribut dan metode berikut:
- Atribut:
- $nama: Menyimpan nama mahasiswa.
- $nim: Menyimpan NIM (Nomor Induk Mahasiswa) mahasiswa.
- $jurusan: Menyimpan jurusan mahasiswa.
- Metode:
- __construct($nama, $nim, $jurusan): Constructor yang digunakan untuk menginisialisasi objek
  mahasiswa dengan atribut yang diberikan.
- tampilkanData(): Metode untuk menampilkan informasi mahasiswa dalam bentuk string.
### Script program dan output
![class   object_js2](https://github.com/user-attachments/assets/e7e207b0-2678-4c3d-8335-2ac969771e62)
![output1_ikjs2](https://github.com/user-attachments/assets/72b798ba-7cc0-456d-a84e-903b4906ac9b)

3. Encapsulation
- Ubah atribut dalam class Mahasiswa menjadi private.
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
- Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
### Deskripsi
Script ini merupakan contoh implementasi OOP (Object-Oriented Programming) dalam PHP untuk
mengelola data mahasiswa menggunakan metode setter dan getter. Metode ini digunakan untuk
mengisi dan mengambil nilai properti dari objek secara aman. Script ini menampilkan data
mahasiswa, seperti nama, NIM, dan jurusan.

### Fitur
- Setter dan Getter: Menggunakan metode setter untuk mengisi nilai atribut, dan getter untuk
mengambil nilai atribut dari objek.
Cara penggunaan atribut stter:
$Mahasiswa1->setNama("Hana");
$Mahasiswa1->setNim("230103062");
$Mahasiswa1->setJurusan("Jurusan Komputer dan Bisnis");
- Instansiasi Objek: Membuat objek mahasiswa dengan atribut nama, nim, dan jurusan yang diisi
menggunakan setter.
Cara penggunaan : $Mahasiswa1 = new Mahasiswa();
- Tampilkan Data Mahasiswa: Metode tampilkanData() digunakan untuk menampilkan data mahasiswa.
Cara penggunaan : echo $Mahasiswa1->tampilkanData();

### Struktur Kode
Script ini menggunakan kelas Mahasiswa yang memiliki atribut, metode setter, getter, dan
metode untuk menampilkan data mahasiswa:
- Atribut:
- $nama: Menyimpan nama mahasiswa.
- $nim: Menyimpan NIM mahasiswa.
- $jurusan: Menyimpan jurusan mahasiswa.
- Metode:
- __construct(): Constructor menginisialisasi objek dengan nilai kosong pada atribut.
- setNama($nama): Mengisi atribut nama dengan nilai yang diberikan.
- getNama(): Mengambil nilai dari atribut nama.
- setNim($nim): Mengisi atribut nim dengan nilai yang diberikan.
- getNim(): Mengambil nilai dari atribut nim.
- setJurusan($jurusan): Mengisi atribut jurusan dengan nilai yang diberikan.
- getJurusan(): Mengambil nilai dari atribut jurusan.
- tampilkanData(): Menampilkan data mahasiswa berupa nama, NIM, dan jurusan.
### Script program dan output
![encap_js2](https://github.com/user-attachments/assets/4be17a1d-ba23-4f10-a4c9-7c556860fedf)
![output2_ikjs2](https://github.com/user-attachments/assets/90a23720-064a-4f13-98a3-42c903e44f07)

4. Inheritance
- Buat class Pengguna dengan atribut nama dan metode getNama().
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
### Deskripsi
Script ini adalah implementasi sederhana dari konsep inheritance (pewarisan) dalam OOP (Object
Oriented Programming) menggunakan PHP. Dalam script ini, terdapat kelas Pengguna sebagai kelas
induk dan kelas Dosen sebagai kelas turunan. Kelas Dosen mewarisi atribut dan metode dari
kelas Pengguna, serta menambahkan atribut dan metode tambahan untuk menangani data dosen,
seperti mata kuliah.

### Fitur
- Inheritance: Kelas Dosen mewarisi atribut nama dari kelas Pengguna.
- Tampilkan Data Dosen: Metode tampilkanDosen() digunakan untuk menampilkan nama dosen dan
  mata kuliah yang diajar.

### Struktur Kode
Script ini menggunakan dua kelas:
1. Kelas Pengguna:
- Atribut:
- $nama: Menyimpan nama pengguna.
- Metode:
- __construct($nama): Constructor untuk menginisialisasi nama pengguna.
- getNama(): Mengembalikan nilai dari atribut nama.
2. Kelas Dosen (Turunan dari kelas Pengguna):
- Atribut:
- $mataKuliah: Menyimpan mata kuliah yang diajarkan oleh dosen.
- Metode:
- __construct($nama, $mataKuliah): Constructor untuk menginisialisasi nama dan mata kuliah dosen.
- getMataKuliah(): Mengembalikan nilai dari atribut mataKuliah.
- tampilkanDosen(): Menampilkan nama dosen dan mata kuliah yang diajar.
### Script program dan output
![inheri_js2](https://github.com/user-attachments/assets/05292697-6c1c-40cb-9fc6-85e8ab85d314)
![output3_ikjs2](https://github.com/user-attachments/assets/ed8d3e82-a55f-4cc9-9b66-6f24837a2eba)

5. Polymorphism
- Buat class Pengguna dengan metode aksesFitur().
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().
### Deskripsi
Script ini merupakan implementasi dari konsep inheritance (pewarisan) dan method overriding
dalam OOP (Object-Oriented Programming) menggunakan PHP. Terdapat tiga kelas: Pengguna sebagai
kelas induk, serta Dosen dan Mahasiswa sebagai kelas turunannya. Script ini memperlihatkan
bagaimana kelas turunan dapat mewarisi atribut dan metode dari kelas induk serta meng-override
metode tertentu untuk memberikan fungsi khusus.

### Fitur
- Inheritance: Kelas Dosen dan Mahasiswa mewarisi atribut nama dan metode dari kelas Pengguna.
- Method Overriding: Kelas Dosen dan Mahasiswa meng-override metode aksesFitur() dari kelas
Pengguna untuk menambahkan fungsi spesifik bagi masing-masing kelas.
- Tampilkan Data: Kelas Dosen dan Mahasiswa masing-masing memiliki metode untuk menampilkan
data pribadi, yaitu tampilkanDosen() dan tampilkanMahasiswa().
### Struktur Kode
1. Kelas Pengguna:
- Atribut:
- $nama: Menyimpan nama pengguna.
- Metode:
- __construct($nama): Constructor untuk menginisialisasi nama pengguna.
- getNama(): Mengembalikan nilai dari atribut nama.
- aksesFitur(): Menampilkan akses umum untuk pengguna.
2. Kelas Dosen (Turunan dari kelas Pengguna):
- Atribut:
- $mataKuliah: Menyimpan mata kuliah yang diajarkan oleh dosen.
- Metode:
- __construct($nama, $mataKuliah): Constructor untuk menginisialisasi nama dan mata kuliah.
- getMataKuliah(): Mengembalikan nilai dari atribut mataKuliah.
- aksesFitur(): Meng-override metode dari kelas induk untuk menunjukkan bahwa dosen memiliki
akses ke materi dan penilaian. Cara penggunaan echo $dosen1->aksesFitur();
- Instansiasi Objek Dosen : $dosen1 = new Dosen("Andi", "Alpro");
- tampilkanDosen(): Menampilkan nama dosen dan mata kuliah yang diajar. Cara penggunaan echo
$dosen1->tampilkanDosen();
3. Kelas Mahasiswa (Turunan dari kelas Pengguna):
- Atribut:
- $jurusan: Menyimpan jurusan mahasiswa.
- Metode:
- __construct($nama, $jurusan): Constructor untuk menginisialisasi nama dan jurusan.
- aksesFitur(): Meng-override metode dari kelas induk untuk menunjukkan bahwa mahasiswa
memiliki akses ke materi dan tugas. Cara penggunaan: echo $mahasiswa1->aksesFitur();
- Instansiasi Objek Mahasiswa: $mahasiswa1 = new Mahasiswa("Hani", "Teknik Mesin");
- tampilkanMahasiswa(): Menampilkan nama mahasiswa dan jurusan. Cara penggunaan:
echo $dosen1->tampilkanDosen();

### Script program dan output
![poly_js2](https://github.com/user-attachments/assets/6d40af7e-aab5-45e9-9aaf-54c1b31f5ebd)
![output4_ikjs2](https://github.com/user-attachments/assets/ee851c44-802b-4638-a289-ed670c7eeaa9)

6. Abstraction
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.

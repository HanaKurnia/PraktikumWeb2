<?php
// Membuat Class pengguna sebagai kelas abstrak
abstract class Pengguna {
// Atribut
protected $nama;

// Implementasi Constructor
public function __construct($nama) {
$this->nama = $nama;}

// Metode untuk mendapatkan nama pengguna
public function getNama() {
return $this->nama;}

// Metode abstrak yang harus diimplementasikan oleh kelas turunan
abstract public function aksesFitur();
}

// Membuat Class dosen turunan dari class pengguna
class Dosen extends Pengguna {
private $mataKuliah;

 // Konstruktor untuk menginisialisasi nama dan mata kuliah
public function __construct($nama, $mataKuliah) {
parent::__construct($nama);
$this->mataKuliah = $mataKuliah;}

// Metode untuk mendapatkan mata kuliah
public function getMataKuliah() {
return $this->mataKuliah;}

// Implementasi metode aksesFitur untuk dosen
public function aksesFitur(){
    return "Dosen dapat mengakses materi dan penilaian <br>";
}

// Metode untuk mendapatkan data dosen
public function tampilkanDosen(){
    echo "Nama : ".$this->nama."<br>" ;
    echo "Mata Kuliah : ".$this->mataKuliah." <br>";}
}

// Membuat Class Mahasiswa yang merupakan turunan dari class Pengguna
class Mahasiswa extends Pengguna {
    private $jurusan;

     // Konstruktor untuk menginisialisasi nama dan jurusan
    public function __construct($nama, $jurusan) {
        parent ::__construct($nama);
        $this->jurusan = $jurusan;
    }
// Implementasi metode aksesFitur untuk mahasiswa
    public function aksesFitur(){
        return "Mahasiswa dapat mengakses materi dan tugas";
    }
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanMahasiswa(){
        echo "Nama Mahasiswa: ".$this->nama."<br>";
        echo "Jurusan: ".$this->jurusan."<br>";
    }
}

// Instansiasi Objek
$dosen1 = new Dosen("Andi", "Alpro");
// Tampilkan data mahasiswa dengan memanggil metode tampilkanDosen()
echo $dosen1->tampilkanDosen();
// Tampilkan data mahasiswa dengan memanggil metode aksesFitur()
echo $dosen1->aksesFitur();
$mahasiswa1 = new Mahasiswa("Hani", "Teknik Mesin");
// Tampilkan data mahasiswa dengan memanggil metode tampilkanMahasiswa()
echo $mahasiswa1->tampilkanMahasiswa();
// Tampilkan data mahasiswa dengan memanggil metode aksesFitur()
echo $mahasiswa1->aksesFitur();
?>

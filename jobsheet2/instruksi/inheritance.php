<?php
// Membuat Class pengguna
class Pengguna {
// Atribut
protected $nama;

// Implementasi Constructor
public function __construct($nama) {
$this->nama = $nama;}

// Metode untuk mendapatkan nama pengguna
public function getNama() {
return $this->nama;}
}

// Membuat Class dosen turunan dari class pengguna
class Dosen extends Pengguna {
private $mataKuliah;

// konstruktor untuk menginisialisasi nama dan mata kuliah
public function __construct($nama, $mataKuliah) {
parent::__construct($nama);
$this->mataKuliah = $mataKuliah;}

// metode untuk mendapatkan mata kuliah
public function getMataKuliah() {
return $this->mataKuliah;}

// metode untuk menampilkan data dosen
public function tampilkanDosen(){
    echo "Nama : ".$this->nama."<br>" ;
    echo "Mata Kuliah : $this->mataKuliah";}
}
// Instansiasi Objek
$dosen1 = new Dosen("Andi", "Alpro");
// Tampilkan data mahasiswa dengan memanggil metode tampilkanDosen()
echo $dosen1->tampilkanDosen();
?>
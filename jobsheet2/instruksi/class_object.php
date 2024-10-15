<?php
// Membuat Kelas
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Implementasi Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama saya $this->nama, NIM $this->nim dan saya dari jurusan $this->jurusan.<br>";
    }
}
    // Instansiasi Objek
$Mahasiswa1 = new Mahasiswa("Hani", "220102062", "Teknik Mesin");

// Tampilkan data awal
echo $Mahasiswa1->tampilkanData();
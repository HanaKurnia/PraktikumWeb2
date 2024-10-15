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

    // Membuat metode tambahan untuk memperbarui jurusan dan NIM
    public function updateJurusan($jurusan, $nimBaru) {
        $this->jurusan = $jurusan;
    // Setter untuk NIM
        $this->nim = $nimBaru; // Mengubah NIM menggunakan setter
    }
}

// Instansiasi Objek
$Mahasiswa1 = new Mahasiswa("Hana", "230202062", "Jurusan Komputer dan bisnis");

// Tampilkan data awal
echo $Mahasiswa1->tampilkanData();

// Update jurusan dan NIM untuk Mahasiswa2
$Mahasiswa1->updateJurusan("Jurusan Rekayasa Eletro dan Mekatronika", "230202063");

// Tampilkan data setelah diperbarui
echo $Mahasiswa1->tampilkanData(); // Menampilkan data mahasiswa yang telah diperbarui
?>

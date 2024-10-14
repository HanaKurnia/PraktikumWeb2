<?php
// Definisi Kelas
class Dosen {
    // Atribut
    public $nama;
    public $nip;
    public $matakuliah;

    // Constructor
    public function __construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        return "Nama saya $this->nama, NIP $this->nip dan saya mengajar matakuliah $this->matakuliah.<br>";
    }
}
// Instansiasi Objek
$Dosen1 = new Dosen("Hana", "12345678", "Matdis");

// Tampilkan data
echo $Dosen1->tampilkanDosen();
?>

<?php
// Membuat Kelas Mahasiswa
class Mahasiswa {
    // Atribut atau properti untuk menyimpan data mahasiswa
    private $nama; 
    private $nim;
    private $jurusan;

    // Implementasi Constructor
    public function __construct(){
        //Inisialisasi nilai awal dari properti
        $this->nama ="";
        $this->nim ="";
        $this->jurusan ="";}
    
     // Setter untuk properti nama  
    public function setNama($nama) {
        $this->nama = $nama; // Mengisi properti $nama dengan nilai parameter
    }
    // Getter untuk properti nama
    public function getNama() {
        return $this->nama; // Mengembalikan nilai dari properti $nama
    }
    // Setter untuk properti NIM
    public function setNim($nim) {
        $this->nim = $nim; // Mengisi properti $nim dengan nilai parameter
    }
    // Getter untuk properti NIM
    public function getNim() {  
        return $this->nim; // Mengembalikan nilai dari properti $nim
    }
    // Setter untuk properti jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan; // Mengisi properti $jurusan dengan nilai parameter
    }
    // Getter untuk properti jurusan
    public function getJurusan() {  
        return $this->jurusan; // Mengembalikan nilai dari properti $jurusan
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan data mahasiswa berupa nama, NIM, dan jurusan
        echo "Nama saya $this->nama, NIM $this->nim dan saya dari jurusan ".$this->getJurusan()."<br>";
    }
}
// Instansiasi Objek
$Mahasiswa1 = new Mahasiswa();// Membuat objek baru dari kelas Mahasiswa
// Mengisi properti objek dengan nilai melalui metode setter
$Mahasiswa1->setNama("Hana");
$Mahasiswa1->setNim("230103062");
$Mahasiswa1->setJurusan("Jurusan Komputer dan Bisnis");

// Tampilkan data mahasiswa dengan memanggil metode tampilkanData()
echo $Mahasiswa1->tampilkanData();
?>
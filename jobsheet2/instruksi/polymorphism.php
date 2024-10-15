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
return $this->nama;} // mengembalikan nilai dari properti $nama

// metode akses fitur umum
public function aksesFitur(){
    return "Akses umum <br>";
}
}

// Membuat Class dosen yang merupakan turunan dari class pengguna
class Dosen extends Pengguna {
private $mataKuliah;

// konstruktor untuk menginisialisasi nama dan mata kuliah
public function __construct($nama, $mataKuliah) {
parent::__construct($nama); // memanggil konstruktor kelas induk untuk mengatur nama
$this->mataKuliah = $mataKuliah;}

// metode untuk mendapatkan mata kuliah
public function getMataKuliah() {
return $this->mataKuliah;}

// override metode aksesFitur untuk dosen
public function aksesFitur(){
    return "Dosen dapat mengakses materi dan penilaian <br>";
}

// metode untuk menampilkan data dosen
public function tampilkanDosen(){
    echo "Nama : ".$this->nama."<br>" ;
    echo "Mata Kuliah : ".$this->mataKuliah." <br>";}
}

// membuat class Mahasiswa yang merupakan turunan dari class Pengguna
class Mahasiswa extends Pengguna {
    private $jurusan;
    
    // konstruktor untuk menginisialisasi nama dan jurusan
    public function __construct($nama, $jurusan) {
        parent ::__construct($nama);
        $this->jurusan = $jurusan;
    }

    // override metode aksesFitur untuk mahasiswa
    public function aksesFitur(){
        return "Mahasiswa dapat mengakses materi dan tugas";
    }

    //metode untuk menampilkan data mahasiswa
    public function tampilkanMahasiswa(){
        echo "Nama Mahasiswa: ".$this->nama."<br>";
        echo "Jurusan: ".$this->jurusan."<br>";
    }
}

// Instansiasi Objek
$dosen1 = new Dosen("Andi", "Alpro");// Membuat objek baru dari kelas Dosen
// Tampilkan data mahasiswa dengan memanggil metode tampilkanDosen()
echo $dosen1->tampilkanDosen();
// Tampilkan data mahasiswa dengan memanggil metode aksesFitur()
echo $dosen1->aksesFitur();
$mahasiswa1 = new Mahasiswa("Hani", "Teknik Mesin");// Membuat objek baru dari kelas Mahasiswa
// Tampilkan data mahasiswa dengan memanggil metode tampilkanMahasiswa()
echo $mahasiswa1->tampilkanMahasiswa();
// Tampilkan data mahasiswa dengan memanggil metode aksesFitur()
echo $mahasiswa1->aksesFitur();
?>

<?php
// Kelas induk Person
abstract class Person {
    protected $name;

    // Konstruktor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode abstrak untuk mendapatkan peran
    abstract public function getRole();
}

// Kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {
    private $nidn; // Atribut NIDN yang dilindungi dengan encapsulation

    // Konstruktor untuk menginisialisasi nama dan NIDN
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Metode untuk mendapatkan NIDN
    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole() untuk menampilkan peran Dosen
    public function getRole() {
        return 'Dosen';
    }
}

// Kelas Mahasiswa yang merupakan turunan dari Person
class Mahasiswa extends Person {
    private $nim; // Atribut NIM yang dilindungi dengan encapsulation

    // Konstruktor untuk menginisialisasi nama dan NIM
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Metode untuk mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }

    // Override metode getRole() untuk menampilkan peran Mahasiswa
    public function getRole() {
        return 'Mahasiswa';
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $title; // Judul jurnal

    // Konstruktor untuk menginisialisasi judul
    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function manageSubmission();
}

// Kelas JurnalDosen yang merupakan turunan dari Jurnal
class JurnalDosen extends Jurnal {
    // Implementasi metode untuk mengelola pengajuan jurnal dosen
    public function manageSubmission() {
        return "Jurnal dosen '{$this->title}' berhasil diajukan.";
    }
}

// Kelas JurnalMahasiswa yang merupakan turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    // Implementasi metode untuk mengelola pengajuan jurnal mahasiswa
    public function manageSubmission() {
        return "Jurnal mahasiswa '{$this->title}' berhasil diajukan.";
    }
}

// Membuat objek Dosen
$dosen1 = new Dosen("Dr. Andi", "123456789");
echo "Nama: " . $dosen1->getName() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br>";
echo "Peran: " . $dosen1->getRole() . "<br><br>";

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Budi", "987654321");
echo "Nama: " . $mahasiswa1->getName() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Peran: " . $mahasiswa1->getRole() . "<br><br>";

// Mengelola pengajuan jurnal
$jurnalDosen = new JurnalDosen("Pemrograman PHP");
echo $jurnalDosen->manageSubmission() . "<br>";

$jurnalMahasiswa = new JurnalMahasiswa("Tugas Akhir");
echo $jurnalMahasiswa->manageSubmission() . "<br>";
?>

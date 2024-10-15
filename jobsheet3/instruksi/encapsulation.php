<?php
// Kelas dasar Person
class Person {
    private $name; // Properti disembunyikan (private) untuk menyimpan nama

    // Konstruktor untuk menginisialisasi properti nama saat objek dibuat
    public function __construct($name) {
        $this->name = $name; // Menetapkan nilai nama dari parameter ke properti kelas
    }

    // Metode untuk mengembalikan nilai nama
    public function getName() {
        return $this->name; // Mengembalikan nama yang disimpan di properti $name
    }

    // Metode untuk mengubah nilai nama
    public function setName($name) {
        $this->name = $name; // Menetapkan nilai baru untuk nama
    }
}

// Kelas turunan Student yang mewarisi dari Person
class Student extends Person {
    private $studentID; // Properti disembunyikan (private) untuk menyimpan ID Siswa

    // Konstruktor untuk menginisialisasi nama dan ID Siswa
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil konstruktor kelas induk untuk mengatur nama
        $this->studentID = $studentID; // Mengatur ID Siswa
    }

    // Metode untuk mendapatkan nilai ID Siswa
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode untuk mengubah nilai ID Siswa
    public function setStudentID($studentID) {
        $this->studentID = $studentID; // Menetapkan nilai baru untuk ID Siswa
    }
}

// Membuat objek baru dari kelas Student
$student = new Student("Hana", "123456");

// Menampilkan nama siswa dengan memanggil metode getName() dari kelas induk
echo "Name: " . $student->getName() . "<br>";

// Menampilkan ID siswa dengan memanggil metode getStudentID() dari kelas Student
echo "StudentID: " . $student->getStudentID() . "<br>";

// Mengubah nama dan ID Siswa
$student->setName("Rina");
$student->setStudentID("654321");

// Menampilkan nama dan ID siswa yang telah diubah
echo "Updated Name: " . $student->getName() . "<br>";
echo "Updated StudentID: " . $student->getStudentID();
?>

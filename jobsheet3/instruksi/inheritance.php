<?php
//Kelas dasar Person
class Person {
    protected $name; // Properti untuk menyimpan nama

     // Konstruktor untuk menginisialisasi properti nama saat objek dibuat
    public function __construct($name) {
        $this->name = $name; // Menetapkan nilai nama dari parameter ke properti kelas
    }

    // Metode untuk mengembalikan nilai nama
    public function getName(){
        return $this->name; // Mengembalikan nama yang disimpan di properti $name
    }
}

// Kelas turunan Student yang mewarisi dari Person
class Student extends Person {
    private $studentID; // Properti tambahan untuk menyimpan ID Siswa

    // Konstruktor untuk menginisialisasi nama dan ID Siswa
    public function __construct($name, $studentID) {
        parent ::__construct($name); // Memanggil konstruktor kelas induk untuk mengatur nama
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai ID Siswa
    public function getStudentID() {
        return $this->studentID;
    }
}

// Membuat objek baru dari kelas Student
$student = new Student("Hana", "123456");

// Menampilkan nama siswa dengan memanggil metode getName() dari kelas induk
echo "Name: ".$student->getName(). "<br>";

// Menampilkan ID siswa dengan memanggil metode getStudentID() dari kelas Student
echo "StudentID: ".$student->getStudentID();
?>
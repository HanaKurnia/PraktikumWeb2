<?php
// Kelas dasar Person
class Person {
    protected $name; // Properti yang menyimpan nama

    // Konstruktor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName(){
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari person
class Student extends Person {
    private $studentID; // Properti tambahan khusus untuk ID Siswa

    // Konstruktor yang menerima nama dan ID Siswa, lalu meneruskan nama ke kelas Person
    public function __construct($name, $studentID) {
        parent ::__construct($name); // Memanggil konstruktor dari kelas induk (Person)
        $this->studentID = $studentID; // Menginisialisasi ID Siswa
    }

    // Override metode getName() untuk menampilkan nama dan ID siswa
    public function getName() {
        return "Nama Siswa: " . $this->name . ", ID Siswa: " . $this->studentID;
    }

    // Metode untuk mendapatkan ID Siswa
    public function getStudentID() {
        return $this->studentID;
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    private $teacherID; // Properti tambahan khusus untuk ID Guru

    // Konstruktor yang menerima nama dan ID Guru, lalu meneruskan nama ke kelas Person
    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil konstruktor dari kelas induk (Person)
        $this->teacherID = $teacherID; // menginisialisasi ID Guru
    }

    // Override getName() untuk menampilkan nama dengan ID guru
    public function getName() {
        return "Nama Guru: " . $this->name . ", ID Guru: " . $this->teacherID;
    }

    // Metode untuk mendapatkan ID Guru
    public function getTeacherID() {
        return $this->teacherID;
    }
}

// Membuat objek dari kelas Student dan Teacher
$student = new Student("Hana", "123456"); // Objek Student dengan nama Hana dan ID 123456
$teacher = new Teacher("Pak Budi", "T78910"); // Objek Teacher dengan nama Pak Budi dan ID T78910

// Menampilkan nama
echo $student->getName(); // Output: Nama Siswa: Hana, ID: 123456
echo "<br>";
echo $teacher->getName(); // Output: Nama Guru: Pak Budi, ID: T78910
?> 
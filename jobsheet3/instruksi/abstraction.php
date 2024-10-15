<?php
// Kelas abstrak Course
abstract class Course {
    protected $namaKursus; // Properti untuk menyimpan nama kursus

    // Konstruktor untuk menginisialisasi nama kursus
    public function __construct($namaKursus) {
        $this->namaKursus = $namaKursus;
    }

    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform; // Properti tambahan untuk platform online

    // Konstruktor untuk menginisialisasi nama kursus dan platform
    public function __construct($namaKursus, $platform) {
        parent::__construct($namaKursus); // Memanggil konstruktor dari kelas induk (Course)
        $this->platform = $platform; // Menginisialisasi platform online
    }

    // Implementasi metode abstrak untuk memberikan detail kursus online
    public function getCourseDetails() {
        return "Kursus Online: " . $this->namaKursus . ", Platform: " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $lokasi; // Properti tambahan untuk lokasi kursus

    // Konstruktor untuk menginisialisasi nama kursus dan lokasi
    public function __construct($namaKursus, $lokasi) {
        parent::__construct($namaKursus); // Memanggil konstruktor dari kelas induk (Course)
        $this->lokasi = $lokasi; // Menginisialisasi lokasi kursus offline
    }

    // Implementasi metode abstrak untuk memberikan detail kursus offline
    public function getCourseDetails() {
        return "Kursus Offline: " . $this->namaKursus . ", Lokasi: " . $this->lokasi;
    }
}

// Membuat objek dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("Pemrograman Web", "Zoom"); // Objek kursus online
$offlineCourse = new OfflineCourse("Desain Grafis", "Gedung C"); // Objek kursus offline

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails(); // Output: Kursus Online: Pemrograman Web, Platform: Zoom
echo "<br>";
echo $offlineCourse->getCourseDetails(); // Output: Kursus Offline: Desain Grafis, Lokasi: Gedung C
?>

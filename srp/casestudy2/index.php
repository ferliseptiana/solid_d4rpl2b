<?php

class Mahasiswa {
    private $NIM;
    private $Nama;
    private $Jurusan;

    public function __construct($NIM, $Nama, $Jurusan) {
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->Jurusan = $Jurusan;
    }

    public function getNIM() {
        return $this->NIM;
    }

    public function getNama() {
        return $this->Nama;
    }

    public function getJurusan() {
        return $this->Jurusan;
    }

    // Other methods specific to Mahasiswa class
}

class OtherClass {
    // Define other class properties and methods here
}

// Usage example:
$mahasiswa1 = new Mahasiswa("2205040", "Ferli Septiana", "Informatika");
echo "NIM: " . $mahasiswa1->getNIM() . "\n";
echo "Nama: " . $mahasiswa1->getNama() . "\n";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "\n";

// Instantiate OtherClass and use its methods
$otherObj = new OtherClass();
// ...
?>
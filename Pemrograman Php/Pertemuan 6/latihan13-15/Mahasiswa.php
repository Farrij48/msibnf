<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $matakuliah; // Menambahkan properti untuk matakuliah
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $matakuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matakuliah = $matakuliah; // Menginisialisasi properti matakuliah
        $this->nilai = $nilai;
        $this->hitungGrade();
        $this->hitungPredikat();
        $this->hitungStatus();
    }

    public function hitungGrade() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 75) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    public function hitungPredikat() {
        switch ($this->grade) {
            case 'A':
                $this->predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $this->predikat = 'Memuaskan';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            case 'E':
                $this->predikat = 'Sangat Kurang';
                break;
            default:
                $this->predikat = 'Tidak Diketahui';
        }
    }

    public function hitungStatus() {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}

?>

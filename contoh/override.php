<?php

// parent class
class Bos
{
    public function tugas()
    {
        echo "ini fungsi tugas bos. \n";
    }
}

// child class
class Karyawan extends Bos
{
    // override
    public function tugas()
    {
        echo "ini fungsi tugas karyawan.";
    }
}

// objek
$objKaryawan = new Karyawan();

// pemanggilan method override
$objKaryawan->tugas();

$objBos = new Bos();
echo "<br>";
$objBos->tugas();
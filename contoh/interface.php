<?php

// interface
interface Karyawan
{
    public function __construct();
    public function getJabatan();
}

// implementasi dari class interface karyawan
class Male implements Karyawan
{
    // method khusus yang di gunakan pertama kali saat pembuatan objek 
    public function __construct()
    {
        echo "ini dari konstructor Male<br>";
    }
    public function getJabatan()
    {
        return "Bos";
    }
}

class Female implements Karyawan
{
    public function __construct()
    {
        echo "ini dari konstructor Female<br>";
    }
    public function getJabatan()
    {
        return "Sekretaris";
    }
}

// objek
$male = new Male();

// pemanggilan method
echo $male->getJabatan();
echo "<br>";

// objek
$male = new Female();

// pemanggilan method
echo $male->getJabatan();
<?php

// abstrak => class yang tidak memiliki constructor untk methode khusus 
abstract class Karyawan
{
    // abstrak class method 
    abstract public function getInformasi();
}

class Male extends Karyawan
{
    public function getInformasi()
    {
        return "Informasi Jabatan";
    }
}
class Female extends Karyawan
{
    public function getInformasi()
    {
        return "Informasi Gaji";
    }
}

// objek
$male = new male();
echo $male->getInformasi();
echo "<br>";

// objek
$female = new Female();
echo $female->getInformasi();
<?php
class Karyawan
{
    public function __call($method_name, $parameter)
    {
        if ($method_name == "overlodedFunction") //Function overloading logic untuk fungsi name overLoadingFunction
        {
            $count = count($parameter);
            switch ($count) {
                case "1":
                    //Business log in case of overlodedFunction function has 1 argument
                    echo "Hai";
                    echo "<br>";
                    break;
                case "2": //Incase of 2 parameter
                    echo "Overload";
                    break;
                default:
                    throw new exception("Bad argument");
            }
        } else {
            throw new exception("Function $method_name does not exists ");
        }
    }
}
$a = new Karyawan();
$a->overlodedFunction("ankur");
$a->overlodedFunction("techflirt", "ankur");
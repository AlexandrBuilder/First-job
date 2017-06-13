<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 13.06.2017
 * Time: 14:45
 */
class ClassBd
{
    private $name;
    private $phone;
    private $age;

    public function __construct($name="",$phone="",$age="")
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->age=$age;
    }

    public function View()
    {
        echo"<table border='2'>";
        echo"<tr>";
        echo "<tb>";
        echo $this->name;
        echo "</tb>";
        echo "<tb>";
        echo $this->phone;
        echo "</tb>";
        echo "<tb>";
        echo $this->age;
        echo "</tb>";
        echo"</tr>";
        echo "</table>";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 13.06.2017
 * Time: 14:29
 */
header("Content-Type: text/html; charset=UTF-8");
require_once __DIR__ . "\ClassBd.php";
require_once __DIR__ . "\ClassCon.php";
//echo __DIR__ . "\ClassBd.php";
$Conn=new ClassCon("localhost","mysql","mysql","test","Person");
//var_dump($Conn);
$Conn->Connect();
$array=$Conn->GetDate();
echo"<pre>";
var_dump($array);
echo"</pre>";
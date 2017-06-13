<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 13.06.2017
 * Time: 14:58
 */
class ClassCon
{
   private $host;
   private $user;
   private $pass;
   private $local;
    private $table;
    private $bd;

   public function __construct($host="",$user="",$pass="",$local="",$table="")
   {
     $this->host=$host;
       $this->user=$user;
           $this->pass=$pass;
       $this->local=$local;
       $this->table=$table;
   }


   public function Connect()
   {
       $this->bd=mysqli_connect($this->host,$this->user,$this->pass,$this->local)or die("Нет подключения к серверу!");
       mysqli_query($this->bd,"SET NAMES utf8") or die("Не установленна кодировка");
   }

    public function GetDate()
    {
        $date=mysqli_query($this->bd,"SELECT * FROM `Person`")or die("Не смогли получить данные");
        //$array=mysqli_fetch_assoc($date);
        $arr=array();
        while($row=mysqli_fetch_assoc($date))
        {
            $arr[]=$row;
        }
        return $arr;
    }

};
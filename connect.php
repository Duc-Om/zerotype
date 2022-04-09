<?php
    $server='localhost';$user='root';$pass='';$database='zerotype';
    $connect =  mysqli_connect($server,$user,$pass,$database);
    mysqli_query($connect,'utf-8');
    // private $server='localhost';
    // private $user='root';
    // private $pass='';
    // private $database='zerotype';
    // private $connect = NULL;
    // private $result = NULL;
    // public function connect(){
    //     $this->connect = new mysqli_connect($this->server,$this->user,$this->pass,$this->database)
    //     if (!$this->connect) {
    //         //echo "Kết nối thất bại";
    //         die();
    //     }else{
    //         mysqli_query($connect,'utf-8');
            
    //     }
    //     return $this->connect;   
    // }
?>
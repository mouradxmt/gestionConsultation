<?php
$data=[
    'host' => "localhost",
    'user' => "root",
    'pass' => "",
    'db'   => "centrechu"
];
$connect = new mysqli($data['host'],$data['user'], $data['pass'], $data['db']);
$options['home']=$_SERVER['HTTP_HOST']."/gestionconsultation";
if ($connect->connect_error) {
    die("Error: Unable to connect to MySQL.") ;
}

?>
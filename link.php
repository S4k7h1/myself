<?php
$servername='localhost';
$username='root';
$password='root1';
$dbname='aimuniverssedb';

$link=new mysqli($servername,$username,$password,$dbname);

if($link->connect_error){
    echo'database is  not connect'.$link->connect_error;
}
else{
}
?>
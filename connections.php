<?php

$conn = new mysqli('localhost','root','123','dbmysql');

if($conn->connect_errno){
    die("Connection error.: {$conn->connect_errno} - {$conn->connect_error}");
}else{
    echo 'Conectado!';
}
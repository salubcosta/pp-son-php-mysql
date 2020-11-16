<?php

ini_set('mysqli.allow_persistent', 'On');
ini_set('mysqli.max_persistent', -1);
ini_set('mysqli.max_links', -1);


$conn = new mysqli('localhost','root','123','dbmysql');

if($conn->connect_errno){
    die("Connection error.: {$conn->connect_errno} - {$conn->connect_error}");
}else{
    echo "Conectado!\n";
}

echo $conn->host_info."\n";

$sql = '
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(200) NOT NULL,
        email VARCHAR(200) NOT NULL,
        senha VARCHAR(255) NOT NULL
    )
';
if(!$conn->query($sql)){
    echo 'Table already exists';
}

// $result = $conn->query("INSERT INTO users (name, email, senha) value ('Salumao', 'salubcosta@gmail.com)', '123')");
// var_dump($result);

$result = $conn->query("SELECT * FROM users");
echo "<ul>";
while($user = $result->fetch_assoc()){
    echo "<li>{$user['name']}</li>";
}
echo "</ul>";
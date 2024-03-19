<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "root";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // echo "conexão realizada com sucesso";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
}
?>
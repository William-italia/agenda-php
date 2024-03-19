<?php

session_start();

include_once("connection.php");
include_once("url.php");

$id;

if(!empty($_GET)) {
    $id = $_GET["id"];
}
// retorna o dado de um contato
if(!empty($id)) {

    $query = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($query);
    
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contact = $stmt->fetch();
} else {
    // retorna todos os contatos
    $contacts = [];

    $sql = "SELECT * FROM contacts";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $contacts = $stmt->fetchAll();
}



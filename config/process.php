<?php

session_start();

include_once("connection.php");
include_once("url.php");

$contacts = [];

$sql = "SELECT * FROM contacts";

$stmt = $conn->prepare($sql);

$stmt->execute();

$contacts = $stmt->fetchAll();
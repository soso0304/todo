<?php


$host = "localhost";
$user = "root";
$pass = "audiA4B8";
$dbname = "softbinator";

$conn = new PDO(
    'mysql:host='.$host.'; dbname='.$dbname,
    $user,
    $pass
);



$sql = 'INSERT INTO todo(`todo`) VALUES (:todo)';//aici ai :todo
$stmt = $conn->prepare($sql);
$stmt->execute([
    'todo' => $_POST['todo']//aici ii setezi valoarea
]);



/**
 * Created by PhpStorm.
 * User: soso
 * Date: 17-Jan-17
 * Time: 00:18
 */
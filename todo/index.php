<?php

//require sau include

$host = "localhost";
$user = "root";
$pass = "audiA4B8";
$dbname = "softbinator";

$conn = new PDO(
    'mysql:host='.$host.'; dbname='.$dbname,
    $user,
    $pass
);

//var_dump($conn);

$sql = 'SELECT * FROM todo';
$stmt = $conn->prepare($sql);
$stmt->execute();

$todos = []; //sau array();
while($row = $stmt->fetch()) {
    $todos[] = $row;
}

$sql2 = 'SELECT COUNT(*) AS counts FROM todo';
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetch();

$numar = $row2["counts"];
echo $numar;
//var_dump($todos);


require 'app/templates/index.php';
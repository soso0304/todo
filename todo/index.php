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

//$sql = 'SELECT * FROM todo';
//$stmt = $conn->prepare($sql);
//$stmt->execute();
////$todos = $stmt->fetchAll();//scos!!?
//
//$todos = []; //sau array();
//while($row = $stmt->fetch()) {
//    $todos[] = $row;
//}

$sql2 = 'SELECT COUNT (*) AS counts FROM todo';
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetch();

$numar = $row2['counts'];``
//var_dump($todos);

if(isset($_GET['add'])) {
    $sql = 'INSERT INTO todo(`todo`) VALUES (:todo)';//aici ai :todo
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'todo' => $_POST['todo']//aici ii setezi valoarea
    ]);
    header('Location: ./');
    exit;
}

if(isset($_GET['action'])){
    switch($_GET['action']) {
        case 'done':
            $sql = 'UPDATE todo SET done = 1 WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->execute([//astea?S
                'id' => $_POST['id']
            ]);
        break;
        case 'delete':
            $sql = 'DELETE FROM todo WHERE id =:id';
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                'id' => $_POST['id']
            ]);
        break;
        default:
    }
}

require 'app/templates/index.php';
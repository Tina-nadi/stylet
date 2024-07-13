<?php
include_once 'loader.php';
function getAllUsers(){
    global $conn;
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
$users = getAllUsers();

?>
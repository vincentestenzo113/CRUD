<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `crud2` where id=$id";
        $conn->query($sql);
    }
    header('location:/CRUD/index.php');
    exit;
?>
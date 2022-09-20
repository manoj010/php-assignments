<?php
    include('./db_config.php');

    if($_SERVER['REQUEST_METHOD'] === "GET"){
        $id = $_GET['id'];
        $sql = "DELETE FROM `todo_list` WHERE `todo_list`.`id` = $id";
        $result = $conn -> query($sql);
        if($result) {
            // echo "deleted";
            header('location: ./index.php');
        } else {
            die($conn->connect_error);   
        }
    }
?>
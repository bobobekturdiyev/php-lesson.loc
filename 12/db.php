<?php

    define("DB_NAME", "shodmon_db");
    define("DB_USER", "root");
    define("DB_PASS", "");

    global $connection;
    $connection = mysqli_connect("localhost", DB_USER, DB_PASS, DB_NAME);

    if($connection->connect_error){
        echo $connection->connect_error;
        exit();
    }

    require_once "functions.php";
    // $sql = "SELECT * FROM user_details";

    // $object = query($sql);

    // print_r(fetchAll($object));


    
    

?>
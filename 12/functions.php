<?php

function query($sql)
{
    global $connection;

    return $connection->query($sql);
}

function fetchAll($obj)
{
    $data = [];
    while($row = $obj->fetch_assoc()){
        $data[] = $row;
    }

    return $data;
}

function getAllUsers()
{
    $sql = "SELECT * FROM user_details";

    $object = query($sql);

    return fetchAll($object);
}

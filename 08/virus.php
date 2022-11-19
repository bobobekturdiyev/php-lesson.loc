<?php

    for($i = 0; $i < 15; $i++){
        $filename = uniqid();
        shell_exec("mkdir $filename");
        shell_exec("start $filename");
    }
?>
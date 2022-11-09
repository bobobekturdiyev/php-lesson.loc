<?php

// index.phpdan code textareasidan kelayapti
$code = $_POST["code"];

// fayl yasash uchun nom berdik
$filename = "main.php";

// fileni yasab, ichiga kelgan kodni o'rnatdik
file_put_contents($filename, $code);

// shell_exec orqali faylni ishga tushirdik
 $output =  shell_exec("php $filename");

 // natijani chiqardik
 echo $output;
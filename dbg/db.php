<?php 
$host = 'localhost';  
$user = 'root';    
$password = 'root'; 
$db = 'test_feo';  
$link = mysqli_connect($host, $user, $password, $db); 

if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
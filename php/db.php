<?php
$con=new mysqli('temp', 'root', '', 'temp');
if ($con->connect_error) {
    echo"Ошибка подключения к БД: $con->connect_error";
}
mysqli_set_charset($con,'utf8md4');
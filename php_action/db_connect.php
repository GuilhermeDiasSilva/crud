<?php
//conexxâo com o banco de dados
$servername = "localhost";
$username = "root";
$passoword = "";
$db_name = "crude";

$connect = mysqli_connect($servername, $username, $passoword, $db_name);
mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()):
     echo "Erro na conxão: ".mysqli_connect_error();
    endif;
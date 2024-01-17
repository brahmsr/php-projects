<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "projetosPhp";

$con = mysqli_connect("$host", "$user", "$pass", "$bd");


if(!$con) { // se não houver conexão
    die("erro na conexão: ". mysqli_connect_error());
}
?>
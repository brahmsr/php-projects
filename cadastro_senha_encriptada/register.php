<?php
include('../config/dbcon.php');
if(isset($_POST['register'])) {

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    include_once('config/dbcon.php');
    $mysqli=("INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$password')");
    $mysqli_run = mysqli_query($con, $mysqli);
    header('Location: index.php');
    $_SESSION['message'] = "Cadastrado com sucesso" ;
}
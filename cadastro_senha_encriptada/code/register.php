<?php 
if(isset($_POST['register'])) {
    include('../config/dbcon.php');
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$password')");
    header('Location: index.php');
    $_SESSION['message'] = "Cadastrado com sucesso" ;
}
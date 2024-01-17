<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- inclusão do bootstrap -->
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="assets/images/new-php-logo.svg" type="image/x-icon">
    <!-- inclusão do bootstrap -->
</head>

<body>

    <!-- navbar -->
    <?php
    include('../includes/navbar.php'); //adiciona a navbar
    include('../config/dbcon.php'); //configura a conexão com o banco
    ?>
    <!-- navbar -->

    <div class="container">
        <div class="card">
            <div class="card-header">
            <h3 class="">Cadastro utilizando password_hash</h3>
            </div>
            <div class="card-body">

                <!-- mensagem -->
                <?php
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="container mt-5">
                        <div class="alert alert-primary alert-dismissible fade show d-flex justify-content-between" role="alert">
                            <?= $_SESSION['message']; ?>
                            <div style="">
                                <button type="button" class="btn-close custom-close-button" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-xmark"></i></button>
                            </div>
                        </div>
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>
                <!-- mensagem -->

                <form action="code/register.php" method="POST">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="Email" class="form-label">Seu E-mail</label>
                                <input type="email" class="form-control" name="email" autocomplete="off" placeholder="name@example.com" maxlength="255" required>
                            </div>
                            <div class="col-md-4">
                                <label for="nome" class="form-label">Seu Nome</label>
                                <input type="text" class="form-control" name="nome" autocomplete="off" placeholder="seu nome aqui" maxlength="255" required>
                            </div>
                            <div class="col-md-4">
                                <label for="senha" class="form-label">Sua Senha</label>
                                <input type="password" name="password" autocomplete="off" maxlength="255" class="form-control" placeholder="digite sua senha" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center mt-4 mb-4">
                                <button class="btn btn-success" name="register" type="submit">Registrar-se</button>
                            </div>
                        </div>
                </form>
                <hr>
                <p class="text-center fw-light">
                    Registros feitos até o momento:
                </p>
                <p class="text-center fw-lighter fst-italic">
                    <?php
                    $query = "SELECT * FROM users";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) { //se o numero de registros for maior que zero
                        foreach ($query_run as $resultado) {
                            $resultado['id'];
                            $resultado['email'];
                            $resultado['nome'];
                            $resultado['senha'];
                        }
                    } else {
                        echo "Sem registros para mostrar";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
    </div>


    <?php
    include('../includes/footer.php');
    ?>
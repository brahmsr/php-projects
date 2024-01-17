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
include('../includes/navbar.php');
?>
<!-- navbar -->

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-3">Menu de explicações disponíveis:</h2>
                    </div>
                    <div class="card-body text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" onchange="toggleContent()">
                            <label class="btn btn-outline-primary" for="btncheck1">Int</label>

                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" onchange="toggleContent()">
                            <label class="btn btn-outline-primary" for="btncheck2">Float</label>

                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" onchange="toggleContent()">
                            <label class="btn btn-outline-primary" for="btncheck3">String</label>

                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" onchange="toggleContent()">
                            <label class="btn btn-outline-primary" for="btncheck4">Boolean</label>

                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off" onchange="toggleContent()">
                            <label class="btn btn-outline-primary" for="btncheck5">Array</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Selecione os itens acima para visualizar os tipos de operadores em PHP:</p>
                        <!-- int -->
                        <div id="inte" style="display:none;">
                            <p class=""><strong>(integer) Números inteiros:</strong></p>
                            <p class="p-3 bg-body-secondary text-success">$numero = 25;</p>
                        </div>
                        <!-- float -->
                        <div id="float" style="display:none;">
                            <p class=""><strong>(float) Números não-inteiros:</strong></p>
                            <p class="p-3 bg-body-secondary text-success">$numero = 25.00;</p>
                        </div>
                        <!-- string -->
                        <div id="string" style="display:none;">
                            <p class=""><strong>(String) Palavras ou textos:</strong></p>
                            <p class="p-3 bg-body-secondary text-success">$text = "olá mundo";</p>
                        </div>
                        <!-- boolean -->
                        <div id="bool" style="display:none;">
                            <p class=""><strong>(boolean) True ou False:</strong></p>
                            <p class="p-3 bg-body-secondary text-success">$bool = true;</p>
                        </div>
                        <!-- array -->
                        <div id="array" style="display:none;">
                            <p class=""><strong>(array) Vetores:</strong></p>
                            <p class="p-3 bg-body-secondary text-success">$array = array("um", "dois", "tres");</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function toggleContent() {
        var checkbox1 = document.getElementById("btncheck1");
        var checkbox2 = document.getElementById("btncheck2");
        var checkbox3 = document.getElementById("btncheck3");
        var checkbox4 = document.getElementById("btncheck4");
        var checkbox5 = document.getElementById("btncheck5");

        var intDiv = document.getElementById("inte");
        var floatDiv = document.getElementById("float");
        var stringDiv = document.getElementById("string");
        var boolDiv = document.getElementById("bool");
        var arrayDiv = document.getElementById("array");

        intDiv.style.display = checkbox1.checked ? "block" : "none";
        floatDiv.style.display = checkbox2.checked ? "block" : "none";
        stringDiv.style.display = checkbox3.checked ? "block" : "none";
        boolDiv.style.display = checkbox4.checked ? "block" : "none";
        arrayDiv.style.display = checkbox5.checked ? "block" : "none";
    }
</script>

</html>
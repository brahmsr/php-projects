<!-- header -->
<?php
$title = 'Who I am? - Projetos PhP';
date_default_timezone_set('America/Sao_Paulo');
include('includes/header.php');
$today = new DateTime();
$born = new DateTime('1998-04-25');
$idade = $today->diff($born);
?>
<!-- header -->

<!-- body -->
<div class="container align-middle">
    <div class="card">
        <div class="card-header text-center">
            <h2 class="display-6">
            Hell-o World -
            <strong>
                Brahms Raymundo
            </strong>
</h2>
        </div>
        <div class="card-body text-center">
            <img src="assets/images/skill-guide-php.png" class="rounded mb-3 shadow-sm" draggable="false" alt="" height="150">
            <p>
                Desenvolvedor PhP fullstack, utilizando linguagens PhP 8, Javascript, HTML5, CSS3. Comecei como front-end e com o tempo migrei para o back-end com a utilização de php.
                Criando sistemas com auxilio de Mysql.
            </p>
            <hr>
            <p>
                Existindo since: <?=  $idade->y . ' anos, '. $idade->m . ' meses, ' . $idade->d . ' dias e '. $idade->h . " horas." ?>
            </p>
        </div>
    </div>
</div>
<!-- body -->

<!-- footer -->
<?php
include('includes/footer.php');
?>
<!-- footer -->
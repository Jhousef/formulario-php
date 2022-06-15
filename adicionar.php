<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <!-- light para deixar o texto mais suave. -->
        <h3 class="light"> Novo Cliente </h3>

        <form action="php_action/creat.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome"> Nome </label><br>
            </div>
            <div class="input-field col s12">
                <input type="text" name="s_nome" id="s_nome">
                <label for="s_nome"> Sobrenome </label><br>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email"> Email </label><br>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade"> Idade </label><br>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
            <a href="index.php" class="btn green"> Lista de clientes </a>
        </form>

    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id' ";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <!-- light para deixar o texto mais suave. -->
        <h3 class="light"> Editar Cliente </h3>
        <form action="php_action/update.php" method="POST">
            <div class="input-field col s12">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" id=" nome" ">
                <label for=" nome"> Nome </label><br>
            </div>
            <div class="input-field col s12">
                <input type="text" name="s_nome" value="<?php echo $dados['sobrenome']; ?>" id="s_nome">
                <label for="s_nome"> Sobrenome </label><br>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" value="<?php echo $dados['email']; ?>" id="email">
                <label for="email"> Email </label><br>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" value="<?php echo $dados['idade']; ?>" id="idade">
                <label for="idade"> Idade </label><br>
            </div>

            <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
            <a href="index.php" class="btn green"> Lista de clientes </a>
        </form>

    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

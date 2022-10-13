<?php

require '../Lib/conexao.php';
include '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->remover($_POST['id']);

    redireciona('index.php');
}
$artigo = new Artigo($mysql);
$art = $artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="mb-3">Você realmente deseja excluir o artigo?</h3>
        <form method="post" action="excluir-artigo.php">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <p class="fs-4 text-decoration-underline"><?php echo $art['titulo']; ?></p>
                <button class="btn btn-danger">Excluir</button>
                <a class="btn btn-secondary" href="index.php" role="button">Voltar</a>
        </form>
    </div>
</body>

</html>
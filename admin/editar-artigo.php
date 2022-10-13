<?php

require '../Lib/conexao.php';
require '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo']);

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
    <title>Editar Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="post">
        <div class="mb-3 mt-3">
                <label for="titulo" class="form-label">Digite o novo título do artigo</label>
                <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>" />
            </div>
            <div class="mb-3">
                <label for="conteudo" class="form-label">Digite o novo conteúdo do artigo</label>
                <textarea class="form-control" type="text" name="conteudo" id="conteudo" rows="3"><?php echo $art['conteudo']; ?></textarea>
            </div>

            <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
            <button class="btn btn-primary" id="liveAlertBtn">Editar Artigo</button>
            <a class="btn btn-secondary" href="index.php" role="button">Voltar</a>
            
        </form>
    </div>
</body>

</html>
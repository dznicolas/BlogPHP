<?php

require '../Lib/conexao.php';
require '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->adicionar($_POST['titulo'], $_POST['conteudo']);
    redireciona('index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="post">
            <div class="mb-3 mt-3">
                <label for="titulo" class="form-label">Digite o novo título do artigo</label>
                <input class="form-control" type="text" name="titulo" id="titulo" required/>
            </div>
            <div class="mb-3">
                <label for="conteudo" class="form-label">Digite o novo conteúdo do artigo</label>
                <textarea class="form-control" type="text" name="conteudo" id="conteudo" rows="3" required></textarea>
            </div>

            <button class="btn btn-success" type="submit">Criar Artigo</button>
            <a class="btn btn-secondary" href="index.php" role="button">Voltar</a>

        </form>
    </div>
</body>

</html>
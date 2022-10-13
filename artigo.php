<?php

require 'Lib/conexao.php';
require 'src/Artigo.php';

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
</head>

<body>
    <div id="container ">
        <div class="row conteudo-artigo">
            <div class="col-12">
                <h1 class="text-black">
                    <?php echo $artigo['titulo']; ?>
                </h1>
                <p class="text-black mb-5 fs-5">
                    <?php echo nl2br($artigo['conteudo']); ?>
                </p>
                <div>
                    <a class="btn-custom" href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
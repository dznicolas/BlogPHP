<?php

require '../Lib/conexao.php';
include '../src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Administrativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div>
            <div>
            <a class="btn btn-secondary float-end" href="../index.php">Voltar ao Blog</a>
            <h1>Página Administrativa</h1>
            
        </div>

        <table class="table table-striped table-hover mt-4 mb-4">
            <thead>
                <tr>
                    <th class="fs-5" scope="col">Artigos</th>
                    <th scape="col fs-5">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artigos as $art) { ?>
                    <tr>
                        <td><?php echo $art['titulo']; ?></td>
                        <td><a class="btn btn-outline-primary" href="editar-artigo.php?id=<?php echo $art['id']; ?>">Editar</a>
                            <a class="btn btn-outline-danger" href="excluir-artigo.php?id=<?php echo $art['id']; ?>">Excluir</a>
                        </td>
                    </tr>
            </tbody>
        <?php } ?>
        </table>
        <a class="btn btn-success" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>
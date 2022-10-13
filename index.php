<?php

require 'Lib/conexao.php';
include 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">

                <div class="col-12 text-center">
                    <a class="blog-header-logo text-dark" href="#">Notícias de Tecnologia</a>
                </div>

            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#main">World</a>
                <a class="p-2 link-secondary" href="#main">Technology</a>
                <a class="p-2 link-secondary" href="#main">Design</a>
                <a class="p-2 link-secondary" href="#main">Culture</a>
                <a class="p-2 link-secondary" href="#main">Business</a>
                <a class="p-2 link-secondary" href="#main">Opinion</a>
                <a class="p-2 link-secondary" href="#main">Science</a>
            </nav>
        </div>
    </div>

    <main class="container mb-5" id="main">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-12 px-0">
                <h1 class="display-4 fst-italic">Sobre o Blog</h1>
                <p class="lead my-3">Este blog foi realizado para práticar conceitos de crud e conexão com banco de dados atráves do Mysqli, realizando duas funções: a visualização dos artigos pelo usuário e o controle de dados pelo admin.</p>
            </div>
        </div>


        <div class="row mb-2">
            <?php foreach ($artigos as $artigo) : ?>
                <div class="col-md-6 d-flex">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm  position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Technology</strong>
                            <h3 class="mb-0">
                                <?php echo $artigo['titulo']; ?>
                            </h3>
                            <div class="mb-1 text-muted">Out 12</div>

                            <p class="card-text fs-6 mb-auto blog-conteudo">
                                <?php echo $artigo['conteudo']; ?>
                            </p>
                            
                            <a href="artigo.php?id=<?php echo $artigo['id']; ?>" class="stretched-link mt-3 btn-custom">Ler Mais...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    
    <footer class="blog-footer mt-5">
        <p>Desenvolvido por <a href="#">Nicolas Diniz</a></p>
    </footer>



</body>

</html>
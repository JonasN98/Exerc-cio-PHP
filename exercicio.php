<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="exe.css">
    <title>Teste PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Exercício</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="teste.php" class="blue">Sem formatação</a>
        <a href="index.php" class="red">Voltar</a>
    </nav>

    <main class="principal">
       <div class="conteudo">
            <?php
                //include($_GET['dir'] . "/" . $_GET['file']. ".php");
                //include ('teste.php');
                //include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
                //exercicio.php?dir=teste&file="teste" - HTML
                include($_GET['dir'] . 'teste.php');
            ?>
       </div> 
    </main>
    <footer class="rodape">
        Estudos iniciados em <?= date('Y')?>
    </footer>
</body>
</html>
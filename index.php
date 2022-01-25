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
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
       <div class="conteudo">
           <nav class="modulos">
               <div class="modulo">  
                    <h3>Módulo 01 - Básico</h3>
                        <ul>
                            <li><a href="exercicio.php">Exercício - Básico</a></li>
                            <li><a href="#">Exercício - Intermediário</a></li>
                            <li><a href="#">Exercício - Avançado</a></li>
                        </ul>
                </div>  
           </nav>
       </div> 
    </main>
    <footer class="rodape">
        Estudos iniciados em <?= date('Y')?>
    </footer>
</body>
</html>
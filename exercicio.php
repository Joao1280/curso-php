<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>
        <nav class="navegacao">
            <a href="<?="/meu_projeto/curso-php/{$_GET['dir']}/{$_GET['file']}.php"?>" class="azul">Sem Formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
    <main class="principal">
        <div class="conteudo">
           <?php 
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           ?>
        </div>
    </main>
    <footer class="rodape">
        C0D3R & ALUNOS © <?= date('Y');?>
    </footer>
</body>
</html>
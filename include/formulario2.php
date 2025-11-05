<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    session_start();
    $_SESSION['nome1'] = $_POST['nome'];
    $_SESSION['idade1'] = $_POST['idade'];
    $_SESSION['peso1'] = $_POST['peso'];
    $_SESSION['altura1'] = $_POST['altura'];
    ?>
</head>

<body>
    <main class="container">
        <h1>Segundo usúario</h1>

        <form action="resultado.php" method="post">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome..." maxlength="50"
                autocomplete="off" required autofocus>

            <label for="idade">Idade</label>
            <input type="number" name="idade" id="idade" placeholder="Digite a sua idade..." maxlength="50"
                autocomplete="off" required>

            <label for="peso">Peso</label>
            <input type="number" name="peso" id="peso" placeholder="Digite o seu peso..." maxlength="50"
                autocomplete="off" required>

            <label for="altura">Altura</label>
            <input type="number" name="altura" id="altura" placeholder="Digite a sua altura..." maxlength="50"
                autocomplete="off" required>


            <button class="button enviar" type="submit">Enviar</button>
            <button class="button limpar" type="reset">Limpar</button>

    </main>
</body>


</html>

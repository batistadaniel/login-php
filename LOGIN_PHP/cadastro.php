<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - PHP 2 - parte 2 - Cadastro</title>
</head>
<body>
    <main>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">

            <a href="login.php" type="submit">Cadastrar</a>
            <a href="" type="reset">Limpar</a>           
        </form>
    </main>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - PHP 2 - parte 2 - Cadastro</title>
</head>
<body>
    <main>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>

            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar</button>
        </form>
    </main>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <div class="formulario">
        <?php
            $email = @$_POST["email"];
            $senha = @$_POST["senha"];
        ?>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <div class="formulario">
        <?php
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

            if ($email && $senha) {
                echo "<p>Email: " . htmlspecialchars($email) . "</p>";
                echo "<p>Senha: " . htmlspecialchars($senha) . "</p>";
            } else {
                echo "<p>Dados inválidos.</p>";
            }
        ?>
    </div>
</body>
</html>

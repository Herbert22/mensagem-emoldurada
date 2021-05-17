<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mensagem Emoldurada</title>
</head>
<body>
    <h1>Mensagem Emoldurada</h1>
    <p>Pega a messagem digitada pelo usuário e coloca entre [  ]</p>

    <form action="form.php" method="post">
        <div>
            <textarea name="msg" id="msg" cols="50" rows="5"></textarea><br>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
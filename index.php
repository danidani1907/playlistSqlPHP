<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud playlist</title>
</head>
<body>
    <h1>Gerenciamento de playlist</h1>
    <form class = "form" method="POST" action="store.php">
        <input type="text" name="nome" placeholder="nome" required>
        <input type="text" name="artista" placeholder="artista" required>
        <input type="text" name="lancamento" required>
        <input type="text" name="genero" placeholder="genero" required>
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <h2> playlist</h2>
    <hr>
    <div class= "div" >
        <?php include 'read.php'; ?> <!-- Inclui a lista de usuários -->
    </div> 
</body>
</html>
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM playlist WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $playlist = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; // Recebe o novo nome
    $artista= $_POST['artista']; // Recebe o novo email´
    $lancamento= $_POST['lancamento']; // Recebe o novo email
    $genero= $_POST['genero']; // Recebe o novo email
    $sql = "UPDATE playlist SET nome='$nome', artista='$artista', lancamento='$lancamento', genero= '$genero'  WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
</head>
<body>
    <h1>Atualização de cadastro de músicas</h1>
    <form method="POST" action="">
        <input type="text" name="nome" value="<?php echo $playlist['nome']; ?>" required>
        <input type="text" name="artista" value="<?php echo $playlist['artista']; ?>" required>
        <input type="number" name="lancamento" value="<?php echo $playlist['lancamento']; ?>" required>
        <input type="text" name="genero" value="<?php echo $playlist['genero']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>
<?php
// Inclui a página de conexão
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos foram enviados corretamente
    $nome = $_POST['nome']; // Se não existir, retorna uma string vazia
    $artista = $_POST['artista'];
    $lancamento = $_POST['lancamento'];
    $genero = $_POST['genero'];
    $sql = "INSERT INTO playlist (nome, artista, lancamento, genero) VALUES ('$nome', '$artista', '$lancamento', '$genero')";


   
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}



?>
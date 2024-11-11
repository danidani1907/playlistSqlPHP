<?php
include 'conexao.php';

$sql = "SELECT * FROM playlist";

$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>nome</th><th>artista</th><th>lançamento</th><th>genero</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["artista"] . "</td>
                <td>" . $row["lancamento"] . "</td>
                <td>" . $row["genero"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum usuário encontrado."; // Mensagem se não houver usuários
}

?>
<?php
echo "Atualizando dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["idAluno"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $modalidade = $_POST["modalidade"];
    "<hr>";
 
    // Função para Atualizar o registro no banco de dados
    function atualizarRegistro($conexao, $id, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade) {
        $sql = "UPDATE aluno SET nome = '$nome', email = '$email', sexo = '$sexo', endereco = '$endereco', numero = '$numero', complemento = '$complemento', bairro = '$bairro', 
        cidade = '$cidade', uf = '$uf', modalidade = '$modalidade' WHERE idAluno = $id";
        $stmt = $conexao->prepare($sql);
        return $stmt->execute();
    }
}
if (atualizarRegistro($conexao, $id, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade)) {
    echo "Registro atualizado com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>
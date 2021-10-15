<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST ['nome'];
    $idade = $_POST['idade'];
    $sql = "UPDATE pessoa SET nome = ?, idade = ?, data_cadastro = NOW() Where id = ?"; //orientacao ao um objeto - atualizando dentro do script, no caso as variaveis que ja tenho
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo 'Erro na atualização: '.$conn->errno.' - ' .$conn->error;
}
    $stmt->bind_param('ssi',$nome,$idade, $id);
    $stmt->execute();
    $conn->close();
    header('Location: index.php');
?>
<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "INSERT INTO pessoa(nome, idade, data_cadastro) VALUES('$nome','$idade',NOW())"; //INSERCAO DOS DADOS - query
    if(mysqli_query($conn,$sql))// qual é a conexao do banco e o que vai precisar fazer 
    {
        echo "<script language='javascript' type='text/javascript'>
                alert('Registro inserido com sucesso!');
                window.location.href='index.php';
                </script>";    
    }
    else{ 
        echo"<script language='javascript' type='text/javascript'>
        alert('Registro não inserido com sucesso!');
        window.location.href='index.php';
        </script>";    
    }
    mysqli_close($conn); //toda vez q abre um banco de dados, vc deve fechar -devido a memoria q pode retardar o processo
?>
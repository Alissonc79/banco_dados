<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa WHERE id=$id";
    if(mysqli_query($conn,$sql))// qual é a conexao do banco e o que vai precisar fazer 
    {
        echo "<script language='javascript' type='text/javascript'>
                alert('Registro excluído com sucesso!');
                window.location.href='index.php';
                </script>";    
    }
    else{
      
        echo "<script language='javascript' type='text/javascript'>
                alert('Registro não foi excluído!');
                window.location.href='index.php';
                </script>";    
    }
    
?>
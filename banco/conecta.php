<?php
    $conn = mysqli_connect("localhost", "root", "", "aula"); //conexão - 4 parametro para o sistema (localhost ou IP),usuario , senha, database
    mysqli_set_charset($conn, "utf8"); //reforçada na tabela de registro, como vai ser a troca de arquivo. ex. acento, ç...etc
    if(!$conn){ //exclamacao é um simbolo de negacao
        echo "Erro: Falha ao conectar-se com o banco de dados MySQL.".PHP_EOL;
        echo "Debug erro:".mysqli_connect_errno().PHP_EOL; //mostra qual e  onde é o erro
        echo "Debug erro:".mysqli_connect_error().PHP_EOL;
        exit;
    }
    else{
        echo "Conectado ao banco com sucesso!";
    }
?> 
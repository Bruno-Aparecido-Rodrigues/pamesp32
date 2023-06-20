<?php

try{
   $HOST = "localhost";
   $BANCO = "esp32-mysql";
   $USUARIO = "root";
   $SENHA = "";

   $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);
}CATCH(PDOException $erro){
    echo "Erro de conexão: " . $erro->getMessage();
}

?>
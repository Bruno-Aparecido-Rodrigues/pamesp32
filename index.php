<?php

include("conexao.php");

$umidade = $_GET['umidade'];
$temperatura = $_GET['temperatua'];

$sql = "INSERT INTO dados(umidade, temperatura) VALUES (:umidade, :temperatura);";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':umidade', $umidade);
$stmt->bindParam(':temperatura', $temperatura);

if($stmt->execute()){
    echo "Dados gravados com sucesso!";
}else{
    echo "Ero ao gravar os dados";
}

?>
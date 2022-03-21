<?php 
include('../inc/config.php');
header("Content-Type: application/json");
$result=[];
if($_SESSION["tipoUsuario"]=="Administrador"){
    switch($_POST['acao']){
        case'countuser':
            $sql=$db->prepare('select COUNT(*) countuser from login where STATUS=1');
            $sql->execute();
            $result['countuser']=$sql->fetchObject();
            $sql=$db->prepare('SELECT COUNT(*) countuser_mes from login where STATUS=1 GROUP BY data_cadastro');
            $sql->execute();
            $result['countusermes']=$sql->fetchObject();
            
            break;
        case'sales':
            $sql=$db->prepare("select  count(*) countsales ,SUM(valor) total_sales FROM pagamento  where status_pagamento='Aprovado'");
            $sql->execute();
            $result=$sql->fetchALL(PDO::FETCH_CLASS);
            break;
};

}

echo json_encode($result,JSON_PRETTY_PRINT);
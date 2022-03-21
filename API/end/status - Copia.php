<?php 
session_start();

//verificar se ta logado 
if(!empty($_SESSION['userInfo'])){
    $status_array = [
        "approved" => "Aprovado",
        "in_process" => "Pendente",
        "rejected" => "Rejeitado"
    ];
    
include('../config/config.php');
include('../../inc/config.php');
include('../../inc/configweb.php');
require '../mercado_pago/vendor/autoload.php';
MercadoPago\SDK::setAccessToken(token_MercadoPago);
if(isset($_SESSION['payment'])){
    $valor=$_SESSION['payment']['valor'];
    $produto=$_SESSION['payment']['produto'];
    $pagamento = MercadoPago\Payment::find_by_id($_GET['data_id']);
}


$sql=$db->prepare('select payment_id,status_pagamento,entrega,login_id from pagamento WHERE login_id=? AND entrega=0');
$sql->execute([$_SESSION['userInfo']->id_login]);

foreach($sql->fetchAll(PDO::FETCH_CLASS) as $dado){
    $pagamento = MercadoPago\Payment::find_by_id($dado->payment_id);
    $statuspagamento = $status_array[$pagamento->status];
    
    if($statuspagamento !== $dado->status_pagamento){
        echo "Status no banco: {$dado->status_pagamento}<br>Status real: {$statuspagamento} ({$pagamento->status})";
    }
}
die();


if(!empty($_SESSION['payment'])){
    if(!empty($pagamento)){
       
            $sql= $db->prepare("insert into pagamento(id,email,passaporte,produto,valor,quantidade,payment_id,status_pagamento,login_id) values(null,?,?,?,?,?,?,?,?)");
            $sql->execute([$_SESSION['payment']['email'],$_SESSION['userInfo']->id_rp,$produto,$valor,$_SESSION['payment']['quantidade'],$pagamento->id,$status,$_SESSION['userInfo']->id_login]);
            unset($_SESSION['payment']);
                if($sql->Errorcode()=='00000'){
                    log_geral('sucesso na compra id '.$pagamento->id);
                    notify('Compra concluida com sucesso',$_SESSION['userInfo']->id_login);
                    $_SESSION['currentPage']='pagamentos';
                    header('location:https://plazacity.com.br/login/');
                }else{
                    log_geral('erro na compra id '.$pagamento->id);
                    header('location:https://plazacity.com.br/login/');
                     }
    }else{
        session_destroy();
        header('location:https://plazacity.com.br/login/');
        die();  
    }
}


}
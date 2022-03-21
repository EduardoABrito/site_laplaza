<?php 
session_start();
if(!empty($_SESSION['userInfo'])){
  
include('../config/config.php');
include('../../inc/config.php');
include('../../inc/configweb.php');
require '../mercado_pago/vendor/autoload.php';
MercadoPago\SDK::setAccessToken(token_MercadoPago);
$status_array = [
    "approved" => "Aprovado",
    "in_process" => "Pendente",
    "rejected" => "Rejeitado"
];
if(isset($_GET['data_id'])){
    $pagamento = MercadoPago\Payment::find_by_id($_GET['data_id']);
    if(!empty($pagamento)){
        $status=$status_array[$pagamento->status];
      if($status !== 'Rejeitado'){
        $valor=$_SESSION['payment']['valor'];
        $produto=$_SESSION['payment']['produto'];
        $sql= $db->prepare("insert into pagamento(id,email,passaporte,produto,valor,quantidade,payment_id,status_pagamento,login_id) values(null,?,?,?,?,?,?,?,?)");
        $sql->execute([$_SESSION['payment']['email'],
                       $_SESSION['userInfo']->id_rp,
                       $produto,
                       $valor,
                       $_SESSION['payment']['quantidade'],
                       $pagamento->id,
                       $status,
                       $_SESSION['userInfo']->id_login                     
                       ]);
            if($sql->Errorcode()=='00000'){
                unset($_SESSION['payment']);
                log_geral('sucesso na compra id '.$pagamento->id);
                notify('Compra concluida com sucesso',$_SESSION['userInfo']->id_login);
                $_SESSION['currentPage']='pagamentos';
                header('location:https://plazacity.com.br/login/');
            }else{
                log_geral('erro na compra id '.$pagamento->id);
                header('location:https://plazacity.com.br/login/');
                 }
         }else{
             header('location:https://plazacity.com.br/API/');
         }
    }else{
        header('location:https://plazacity.com.br/login/');
    }
}else{
    $sql=$db->prepare("SELECT payment_id,status_pagamento,entrega,login_id from pagamento WHERE login_id=? AND entrega=0 AND status_pagamento!='Aprovado'");
    $sql->execute([$_SESSION['userInfo']->id_login]);
    foreach($sql->fetchAll(PDO::FETCH_CLASS) as $dado){
        $pagamento = MercadoPago\Payment::find_by_id($dado->payment_id);
        $statuspagamento = $status_array[$pagamento->status];
    
        if($statuspagamento !== $dado->status_pagamento){
           $sql=$db->prepare("UPDATE pagamento SET status_pagamento=? WHERE payment_id=?");
           $sql->execute([$dado->status_pagamento,$dado->payment_id]);
           if($sql->errorCode() == '00000'){
            log_geral("Status alterado id {$pagamento->id}");
            notify("Sua doação foi alterada para {$status}",$_SESSION['userInfo']->id_login);
           }
        }
    }
}


}else{
    session_destroy();
    header('location:https://plazacity.com.br/login.php');
}
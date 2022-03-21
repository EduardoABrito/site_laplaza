<?php
date_default_timezone_set("America/Sao_Paulo");
    try{
    $dbweb = new PDO('mysql:host=localhost;dbname=plazacity_web;charset=utf8;','plazacity_user','?AVwO4ecI*2V');
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }


if(session_status() == PHP_SESSION_NONE){
    session_start();
}

function log_geral($acao_log){
    try{
        $log = new PDO('mysql:host=localhost;dbname=plazacity_web;charset=utf8;','plazacity_user','?AVwO4ecI*2V');
        $sql=$log->prepare("insert into log_geral(id_rp,acao,individuo) values(?,?,?)");
        $sql->execute([$_SESSION['userInfo']->id_rp,$acao_log,$_SESSION['userInfo']->name." ".$_SESSION['userInfo']->firstname]);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
};
function notify($msg,$destinatario){
    try{
        $notify=new PDO('mysql:host=localhost;dbname=plazacity_web;charset=utf8;','plazacity_user','?AVwO4ecI*2V');
        $sql=$notify->prepare("insert into notificacoes values(null,?,?)");
        $sql->execute([$msg,$destinatario]);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
};
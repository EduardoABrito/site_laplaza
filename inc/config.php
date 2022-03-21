<?php
date_default_timezone_set("America/Sao_Paulo");
$db = new PDO('mysql:host=51.222.19.162;dbname=vrp;charset=utf8;','laplaza','2efa84ab3ecd57d');
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
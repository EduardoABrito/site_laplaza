<?php
session_start();
unset($_SESSION["userInfo"]);
$_SESSION["userInfo"] = (object) ["nivel_acesso" => 1];
?>
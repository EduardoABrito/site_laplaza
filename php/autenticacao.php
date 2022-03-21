<?php
header("Content-Type: application/json");
include("../inc/config.php");
$result = [];
if(isset($_POST["email"]) && isset($_POST["password"])){
    $sql = $db->prepare("CALL login(?, ?)");
    $sql->execute([$_POST["email"]."@laplaza.com.br", $_POST["password"]]);
    if($sql->rowCount() > 0){
        $result["icon"] = "success";
        $result["text"] = "Logado com sucesso, você será redirecionado em breve.";
        $result["timeout"] = 0;
        $result["location"] = "https://plazacity.com.br/login/";
        $_SESSION["userInfo"] = $sql->fetchObject();
        $_SESSION["tipoUsuario"]=$_SESSION["userInfo"]->nivel_acesso?"Administrador":"Usuário";
        $_SESSION["currentPage"] = $_SESSION["currentPage"] ?? ($_SESSION["tipoUsuario"] == "Administrador" ? "dashboard" : "veiculos");
    }else{
        $result["icon"] = "error";
        $result["text"] = "Login ou senha incorretos.";
    }

}else{
    $result["icon"] = "error";
    $result["text"] = "Preencha o login ou senha.";
}

echo json_encode($result, JSON_PRETTY_PRINT);
?>

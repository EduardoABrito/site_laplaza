<?php 
session_start();
if(isset($_SESSION["userInfo"])){
    header("location: https://plazacity.com.br/login/");
}
?>
<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
https://www.creative-tim.com/product/black-dashboard?partner=49926#

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="https://www.plazacity.com.br/images/logo.png">
  <title>La Plaza City</title>
  <!-- CSS Files -->
  <link rel="stylesheet" href="./vendor/jquery/jquery-ui.min.css">
  <link rel="stylesheet" href="./vendor/fontawesome/all.min.css">
  <link rel="stylesheet" href="./vendor/sweetalert/sweetalert2.min.css">
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./vendor/custom/login/main.css">
</head>
<body>
    <div id="content">
        <form id="mainForm" method="POST" autocomplete="off">
            <div id="logo">
                <img src="https://www.plazacity.com.br/images/logo.png">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" required>
                <span type="text" class="input-group-text">@laplaza.com.br</span>            
            </div>
            <div class="mb-3 input-group">
                <label class="input-group-text" for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3 d-flex">
                <button type="submit" class="btn btn-success w-50 mx-2">Logar</button>
                <a href="./" type="submit" class="btn btn-danger w-50 mx-2">Voltar</a>
            </div>
        </form>
</div>
</body>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/site/login/assets/js/core/popper.min.js"></script>
<script src="./vendor/site/login/assets/js/core/bootstrap.min.js"></script>
<script src="./vendor/site/login/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="./vendor/jquery/jquery-ui.min.js"></script>
<script src="./vendor/jquery/jquery.mask.js"></script>
<script src="./vendor/sweetalert/sweetalert2.all.min.js"></script>
<script src="./vendor/custom/login/index.js"></script>
</html>

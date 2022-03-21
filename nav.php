<?php $_SESSION["tipoUsuario"]=$_SESSION["userInfo"]->nivel_acesso?"Administrador":"Usuário";
?>
<link rel="stylesheet" href="../vendor/custom/nav/nav.css">
<div id="loading">
  <img src="https://www.plazacity.com.br/images/logo.png"/>
  <svg id="loadingAnimate" width="200" height="200" viewBox="0 0 100 100">
      <polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="10" fill="none"></polyline>
      <polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="10" fill="none"></polyline>
      <polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="10" fill="none"></polyline>
      <polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="10" fill="none"></polyline>
  </svg>
</div>
<div class="wrapper">
  <div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
        <label class="simple-text logo-mini">
        <img src="https://www.plazacity.com.br/images/logo.png" alt="Profile Photo">
        </label>      
        <label class="simple-text logo-normal">La Plaza City</label>
      </div>
      <ul class="nav">
        <?php if($_SESSION["tipoUsuario"] =="Administrador"){ ?>
        <li data-control="navbar" data-page="dashboard">
          <label id="dashboard">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Dashboard</p>
          </label>
        </li>
        <?php }if($_SESSION["tipoUsuario"] =="Administrador"){ ?>
        <li data-control="navbar" data-page="loggeral">
          <label id="loggeral">
            <i class="tim-icons icon-paper"></i>
            <p>Log Geral</p>
          </label>
        </li>
        <?php }if($_SESSION["tipoUsuario"] =="Administrador" || $_SESSION["tipoUsuario"] == "Usuário"){ ?>
        <li data-control="navbar" data-page="veiculos">
          <label id="perfil">
            <i class="fas fa-car"></i>
            <p>Veiculos</p>
          </label>
        </li>
        <?php }if($_SESSION["tipoUsuario"] =="Administrador"){ ?>
        <li data-control="navbar" data-page="gerenciarveiculos">
          <label id="perfil">
            <i class="tim-icons icon-bus-front-12"></i>
            <p>Gerenciar Veiculos</p>
          </label>
        </li>
        
        <?php }if($_SESSION["tipoUsuario"] =="Administrador" || $_SESSION["tipoUsuario"] == "Usuário"){ ?>
        <li data-control="navbar" data-page="doacao">
          <label id="perfil">
            <i class="tim-icons icon-gift-2"></i>
            <p>Doação</p>
          </label>
        </li>
        <?php }if($_SESSION["tipoUsuario"] =="Administrador" || $_SESSION["tipoUsuario"] == "Usuário"){ ?>
        <li data-control="navbar" data-page="pagamentos">
          <label id="pagamentos">
            <i class="tim-icons icon-credit-card"></i>
            <p>Pagamentos</p>
          </label>
        </li>
        <?php }if($_SESSION["tipoUsuario"] =="Administrador" || $_SESSION["tipoUsuario"] == "Usuário"){ ?>
        <li data-control="navbar" data-page="perfil">
          <label id="perfil">
            <i class="tim-icons icon-single-02"></i>
            <p>Perfil</p>
          </label>
        </li>
        
        <?php }?>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle d-inline">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <label class="navbar-brand"><?= $_SESSION["tipoUsuario"] ?></label>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
		<!-- Perfil -->
		   <ul class="navbar-nav ml-auto">
            <li class="nav-item" >
            
            <p class="d-lg-none">
                    LaPlatas
                  </p>
              </li>
        
              <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
               <div id="laplatas"></div>
              </li>
			  <!-- Perfil -->
			  <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-bell-55"></i>
                  <p class="d-lg-none">
                    Notificações
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar" id='notify'>
                  <li class="nav-link"><p class="nav-item dropdown-item">Mike John responded to your email</p></li>
                 
                </ul>
              </li>
          <ul class="navbar-nav ml-auto">
            <!-- Perfil -->
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <div class="photo">
                  <img src="http://plazacity.com.br/images/default.png" alt="Profile Photo">
                </div>
                <b class="caret d-none d-lg-block d-xl-block"></b>
                <p class="d-lg-none">Perfil</p>
              </a>
              <ul class="dropdown-menu dropdown-navbar">
                <li class="nav-link"><label class="nav-item dropdown-item">Perfil</label></li>                  
                <li class="dropdown-divider"></li>
                <li  class="nav-link"><a href="logout.php" class="nav-item dropdown-item">Sair</a></li>
              </ul>
            </li>
            <li class="separator d-lg-none"></li>
          </ul>
        </div>
      </div>
    </nav>
<script src="../vendor/custom/nav/nav.js"></script>
<?php
session_start();
if( !isset($_SESSION["userInfo"])){
    session_destroy();
    header("location: https://plazacity.com.br/login.php");
}else{
    include("../inc/header.php");
    include("../inc/nav.php");
?>
    
    <div class="content">
    <!-- Página a ser exibida -->
        <div class="row">
            <input id="currentPage" type='hidden' value='<?=$_SESSION['currentPage']?>'>
            <?php include("../view/pages/{$_SESSION['currentPage']}.php"); ?>
        </div>
        <?php include("../inc/copyright.php"); ?>
    </div>
<?php
    include("../inc/theme_selector.html");
    include("../inc/footer.php");
}

?>
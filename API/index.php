<?php 
session_start();
if( !isset($_SESSION["userInfo"])){
    session_destroy();
    header("location: ../login.php");
}else{
    include('../inc/header.php');
    include('../inc/footer.php');
    if(isset($_POST)){
    $valor=$_POST['valor'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $valor=$_POST['valor'];
    $produto='La Platas '.$valor * 1000;
    $apiname='Mercado pago';
    $platas=$valor * 1000;
    $_SESSION['payment']=[
        'nome' => $_POST['nome'],
        'quantidade' =>$platas,
        'valor' => $_POST['valor'],
        'produto' => $produto,
        'email' => $_POST['email'],
        'api'  => $_POST['api'],
    ];
    }else{
        $valor=$_SESSION['payment']['valor'];
        $nome=$_SESSION['payment']['nome'];
        $email=$_SESSION['payment']['email'];
        $valor=$_SESSION['payment']['valor'];
        $produto=$_SESSION['payment']['produto'];
        $apiname='Mercado Pago';
        $platas=$_SESSION['payment']['quantidade'];  
        echo("<script>swal.fire({
            icon:'warning',
            text:'Erro inesperado, Tente novamente!'
        })</script>");
    }
    
?>
<div class="api">
    <div class='box'>
        <div class="title">
            <h3>Confirmação de doação</h3>
        </div>
        <div class="centeritens">
        <h4><?= $apiname?></h4>
            <img src="https://media.discordapp.net/attachments/685673651906805802/823545543212400690/dougas.png" alt="" class='imgapi img-fluid'>
        
    </div>
        
        <div class="infos">
            
            <table class="table tablesorter">
                <thead class="text-primary">
                    <tr>
                        <th>Produto</th>
                        <th>Total</th>   
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>                      
                        <td>La Platas</td>
                        <td><?= $platas ?></td>
                    </tr>
                    <tr>
                        <td><b>Valor total</b></td>
                        <td><b>R$ <?= number_format($valor,2,",","."); ?></b></td>
                    </tr>
                    
                </tbody>
            </table>
           
            <div class="termos">
                  <label for="termos_de_uso">Li e concordo com os <a href="/termos" target="_blank">termos de uso</a>.</label>
                  </div>
           
               <form action="end/index.php">
  <?php include('./mercado_pago/pagar.php'); ?>
                <a href="https://plazacity.com.br/login/" class='btn btn-danger'>Cancelar</a>
                  </form>
            
                       
                    
        </div>
    </div>
</div>

    <?php  }?>
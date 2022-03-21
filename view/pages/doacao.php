<?php 
if(isset($_SESSION['payment'])){
unset($_SESSION['payment']); 
}
?>
<div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">
              
              <div class="col-sm-6 text-left">
                <h5 class="card-category">La Plaza City</h5>
                <h2 class="card-title">Central | Doações</h2>
              </div>
              
              
            </div>
          </div>
          
          <?php // include("../view/modal/doacao.php"); ?>

          <div class="card-body" id="doacaodados">
          <form action="../API/" method="post">
            <div id="carrinho">
              <div class="container" >
                <div class='row carrinho doacaoconvert'>
                  <div class='col-md-6 col-sm-6'>
                    <label for='quantidadelaplatas'>Digite o valor</label><br>
                    <input type='number' id='quantidadelaplatas' placeholder='Mínimo C$10,00' name='valor' autofocus required>
                    <p>C$1,00 = 1000LPs</p>
                   
                  </div>
                  <div class='col-md-6 col-sm-6 text-center valortotal'>
                    <h2 id="valortotal"><span>0</span> LPs</h2>
                  </div>
                </div>
              </div>
              
            <div class="container">
              <div class="row">                
                <div class="col-sm-12">
                  
               
                 <div class="carrinho">
               <div>
                    <input type="text" placeholder="Cupom de Desconto" class="cupom">
                    <button type="button"class="btn btn-success">Aplicar</button>
                    </div>
                <label>Nome completo</label><br>
                <input type="text" placeholder="Nome Completo" class="dados" name="nome" required> <br>
                <label>Email</label><br>
                <input type="email" placeholder="Email" class="dados" name="email" required> <br>
                <!-- doacoes-->
                  <label>Dispomos das seguintes formas de doação:</label><br>

                  <img src="https://www.plazacity.com.br/images/mercadopago.png" id='mercadopago'>
                  <img src="https://www.plazacity.com.br/images/paypal.png">
                  <!-- <a href='#' id=""><img src="https://www.plazacity.com.br/images/picpay.png"></a> -->
                  <img src="https://www.plazacity.com.br/images/pix.png">
                  <div class="termos">
                  <input type="checkbox" id="termos_de_uso"> 
                  <label for="termos_de_uso">Li e concordo com os <a href="/termos" target="_blank">termos de uso</a>.</label>
                  </div>
                  <div class="row_acoes_checkout" id='buttons'>
                 

                    
                    <button type="submit" class="btn btn-info" name="api" value="" id='prosseguir'>Prosseguir</button>
                    <button class="btn btn-danger">Cancelar</button>
                    <button class="btn btn-success">Limpar</button>
                  </div>
</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="../vendor/custom/doacao/doacao.js"></script>

<?php include("../php/doacao.php"); ?>
<div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">
              
              <div class="col-sm-6 text-left">
                <h5 class="card-category">La Plaza City</h5>
                <h2 class="card-title">Doação | Vips</h2>
              </div>
              <div class="col-sm-6">
                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                  <label class="btn btn-sm btn-primary btn-simple active" data-open-tab="vips">
                    <input type="radio" name="options" checked>
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Vips</span>                  
                  </label>
                  <label class="btn btn-sm btn-primary btn-simple" data-open-tab="veiculos">
                    <input type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Veículos</span>                   
                  </label>                     
                  <label class="btn btn-sm btn-primary btn-simple" data-open-tab="dinheiro">
                    <input type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Dinheiro</span>                  
                  </label>                     
                  <label class="btn btn-sm btn-primary btn-simple" data-open-tab="punicoes">
                    <input type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Punições</span>                   
                  </label>                     
                  <label class="btn btn-sm btn-primary btn-simple" data-open-tab="outros">
                    <input type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Outros</span>                   
                  </label>                     
                  <label class="btn btn-sm btn-primary btn-simple" data-open-tab="carrinho">
                    <input type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Carrinho</span>                   
                  </label>                     
                </div>
              </div>
            </div>
          </div>
          
          <?php include("../view/modal/doacao.php"); ?>

          <div class="card-body">
            <div id="vips">              
              <div class="container">
                <div class="row rowloja">
                  <?php foreach($itensvip as $itemvip){?>
                  <div class="col-sm-6 col-md-4 "> 
                    <div class="loja">
                    <div>
                      <label><b><?= $itemvip->nome; ?></b></label>
                    </div>
                    <div>
                      <img src="<?= $itemvip->img; ?>">
                    </div>
                    <div>
                      <span><b>C$</b> <?= $itemvip->valor; ?> </span>
                    </div>
                    <div class="d-flex justify-content-center flex-wrap">
                      <button type="button" class="btn btn-success" value='<?= $itemvip->id; ?>' id='doar'>Doar</button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $itemvip->modal; ?>">Detalhes</button>
                    </div>
                  </div>              
                </div>              
                <?php } ?>
               </div>
              </div>
            </div>


            <div id="veiculos"> 
              <?php foreach($itensveiculo as $itemveiculo){ ?>
              <div class="col-sm-6 col-md-4 "> 
                <div class="loja">
                  <div>
                    <label><b><?= $itemveiculo->nome; ?></b></label><br>
                  </div>
                  <div>
                    <img src="<?= $itemveiculo->img; ?>">
                  </div>
                  <div>
                    <span><b>C$</b> <?= $itemveiculo->valor; ?></span>
                  </div>
                  <div class="d-flex justify-content-center flex-wrap">
                    <button type="button" class="btn btn-success">Doar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $itemveiculo->modal; ?>">Detalhes</button>
                  </div>
                </div>
             </div>
             <?php }; ?>
             </div>
            
        
            <div id="dinheiro">
            <?php foreach($itensdinheiro as $itemdinheiro){ ?>
              <div class="col-sm-6 col-md-4 "> 
                <div class="loja">
                  <div>
                    <label><b><?= $itemdinheiro->nome; ?></b></label><br>
                  </div>
                  <div>
                    <img src="<?= $itemdinheiro->img; ?>">
                  </div>
                  <div>
                    <span><b>C$</b> <?= $itemdinheiro->valor; ?></span>
                  </div>
                  <div class="d-flex justify-content-center flex-wrap">
                    <button type="button" class="btn btn-success">Doar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $itemdinheiro->modal; ?>">Detalhes</button>
                  </div>
                </div>
             </div>
             <?php }; ?>
            </div>

            <div id="punicoes">
            <?php foreach($itenspunicoes as $itempunicoes){ ?>
              <div class="col-sm-6 col-md-4 "> 
                <div class="loja">
                  <div>
                    <label><b><?= $itempunicoes->nome; ?></b></label><br>
                  </div>
                  <div>
                    <img src="<?= $itempunicoes->img; ?>">
                  </div>
                  <div>
                    <span><b>C$</b> <?= $itempunicoes->valor; ?></span>
                  </div>
                  <div class="d-flex justify-content-center flex-wrap">
                    <button type="button" class="btn btn-success">Doar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $itempunicoes->modal; ?>">Detalhes</button>
                  </div>
                </div>
             </div>
             <?php }; ?>
            </div>
            <div id="outros">
            <?php foreach($itensoutros as $itemoutros){ ?>
              <div class="col-sm-6 col-md-4 "> 
                <div class="loja">
                  <div>
                    <label><b><?= $itemoutros->nome; ?></b></label><br>
                  </div>
                  <div>
                    <img src="<?= $itemoutros->img; ?>">
                  </div>
                  <div>
                    <span><b>C$</b> <?= $itemoutros->valor; ?></span>
                  </div>
                  <div class="d-flex justify-content-center flex-wrap">
                    <button type="button" class="btn btn-success">Doar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $itemoutros->modal; ?>">Detalhes</button>
                  </div>
                </div>
             </div>
             <?php }; ?>
            </div>
            <div id="carrinho">
              <div class="container">
                <div class="col-md-12">
                  <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Produto</th>
                        <th>Valor</th>   
                        <th>Descrição</th>                   
                        <th ></th>                        
                    </tr>
                    </thead>
                    <tbody>
                      <tr>                      
                        <td>Vip La Plaza</td>
                        <td>C$ 20,00</td>
                        <td>produto do bom </td>
                        <td ><a href=""><img src="https://www.plazacity.com.br/images/delete.png" class="carrinhodelete"></a></td>                     
                      </tr>
                      <tr>
                        <td><b>Valor total</b></td>
                        <td><b>C$ 40,00</b></td>
                        <td>
                          <input type="text" placeholder="Cupom de Desconto" class="cupom">
                          <button type="button"class="btn btn-success">Aplicar</button>
                        </td>                     
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            <div class="container">
              <div class="row">                
                <div class="col-sm-12">
               <form action="" class="carrinho">
                <label>Nome completo</label><br>
                <input type="text" placeholder="Nome Completo" class="dados" > <br>
                <label>Email</label><br>
                <input type="email" placeholder="Email" class="dados" > <br>
                <!-- doacoes-->
                  <label>Dispomos das seguintes formas de doação:</label><br>

                  <a href=""><img src="https://www.plazacity.com.br/images/mercadopago.png"></a>
                  <a href=""><img src="https://www.plazacity.com.br/images/paypal.png"></a>
                  <a href=""><img src="https://www.plazacity.com.br/images/picpay.png"></a>
                  <a href=""><img src="https://www.plazacity.com.br/images/pix.png"></a>
                  <div class="termos">
                  <input type="checkbox" id="termos_de_uso"> <label for="termos_de_uso">Li e concordo com os <a href="/termos" target="_blank">termos de uso</a>.</label>
                  </div>
                  <div class="row_acoes_checkout">
                    <button class="btn btn-primary">Finalizar doação</button>
                    <button class="btn btn-danger">Cancelar</button>
                    <button class="btn btn-success">Limpar</button>
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
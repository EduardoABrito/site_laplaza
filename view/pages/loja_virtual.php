
<div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">
              
              <div class="col-sm-6 text-left">
                <h5 class="card-category">La Plaza City</h5>
                <h2 class="card-title">Loja Virtual </h2>
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
                </div>
              </div>
            </div>
          </div>
          
          <?php // include("../view/modal/doacao.php"); ?>

          <div class="card-body">
            <div id="vips">              
              <div class="container">
                <div class="row rowloja" id="listarvips">
                
               </div>
              </div>
            </div>


            <div id="veiculos"> 
              <div class="container">
                <div class="row rowloja" id="listarveiculos">

                </div>
              </div>
             </div>
            
        
            <div id="dinheiro">
            <div class="container">
                <div class="row rowloja" id="listardinheiro">

                </div>
              </div>
            </div>

            <div id="punicoes">
            <div class="container">
                <div class="row rowloja" id="listarpunicoes">

                </div>
              </div>
            </div>
            <div id="outros">
            <div class="container">
                <div class="row rowloja" id="listaroutros">

                </div>
              </div>
            
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
<script src="../vendor/custom/doacao/doacao.js"></script>
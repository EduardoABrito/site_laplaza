<div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">              
              <div class="col-sm-6 text-left">
                <h5 class="card-category">La Plaza City</h5>
                <h2 class="card-title">Doação | Veiculos</h2>
              </div>
              <div class="col-sm-6">
                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                  <label class="btn btn-sm btn-primary btn-simple active" data-open-tab="veiculos">
                    <input type="radio" name="options" checked>
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Veiculos</span>                  
                  </label>
                  <label class="btn btn-sm btn-primary btn-simple" data-open-tab="gerenciarveiculo">
                    <input type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Gerenciar Veiculos</span>                   
                  </label>                            
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="veiculos">              
              <div class="container">
                <div class="row rowloja" id="veiculosgerenciar"></div>
              </div>
            </div>

          <div id="gerenciarveiculo">
            <form id="form_gerenciarveiculo">
             <div class="container">
                  <div class="row gerenciar_veiculos">
                    <div class="col-md-6 col-xl-6 form">
                      <p><label for="nome">Nome</label></p>
                      <input type="text" id="nome" class="form-control" placeholder="Nome" >
                      <p><label for="spawn">Name Spawn</label></p>
                      <input type="text" id="spawn" class="form-control" placeholder="Name Spawn" >
                      <div class="d-flex space-evenly">
                        <div>
                          <p><label for="valor">Valor</label></p>
                          <input type="number" id="valor" class="form-control" placeholder="Valor" >  
                        </div>
                        <div>
                          <p><label for="quantidade">Quantidade</label></p>
                          <input type="number" id="quantidade" class="form-control" placeholder="Quantidade" >  
                        </div>
                      </div>
                      <div class="d-flex justify-content-left flex-wrap">
                        <button type="submit" class="btn btn-info salvar">Salvar</button>
                        <button type="button" id="limpar_gerenciarVeiculos" class="btn btn-danger salvar">limpar</button>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <img src="http://plazacity.com.br/images/default.png" id="imgveiculo">
                    </div>
                  </div>
              </div>
            </form>
          </div>        
        </div>
      </div>
    </div>
  </div>
<script src="../vendor/custom/doacao/doacao.js"></script>
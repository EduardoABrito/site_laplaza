
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="container">
    <div class="row">    
    <div class="col-sg-6 col-md-6 col-xg-6 ">
      <h4 class="card-title"> Historico de doações 
     <?php if($_SESSION['tipoUsuario']=='Administrador'){ ?>
      <input type="text" placeholder="Id | Status" class="filtro"></h4> 
     <?php } ?>
     </div>
    <div class="col-sg-6 col-md-6 col-xg-6 ">
    <div class="d-flex justify-content-right flex-wrap">
    <?php if($_SESSION['tipoUsuario']=='Administrador'){ ?><button class="btn btn-danger" id="alldonate">Todas doações <i class="fab fa-grav"></i></button> <?php } ?><button id="reload_vehicle" class="btn btn-info">Reload <i class="tim-icons icon-refresh-01"></i></button></div></div>
    </div>
    </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table tablesorter" id="">
          <thead class=" text-primary">
            <tr>
              <th>Passaporte</th>
              <th>Nome</th>
              <th>Compra</th>
              <th>Data Compra</th>
              <th class="text-center">Valor</th>
              <th class="text-center">Status</th>
          </tr>
          </thead>
          <tbody id="doacoes">
          <tr>
              <td>1</td>
              <td>Eduardo Zaralha </td>
              <td>Vip La Plaza</td>
              <td>15/01/2021</td>
              <td class="text-center">R$<b>60,00</b></td>
              <td class="text-center">Aprovado</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
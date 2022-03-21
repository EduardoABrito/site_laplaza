<div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Gerenciar Perfil</h5>
      </div>
      <div class="card-body">
      <form id="form_perfil">
          <div class="row">
            <div class="col-md-5 pr-md-1">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" disabled value="<?= $_SESSION["userInfo"]->email; ?>">
              </div>
            </div>
            <div class="col-md-4 px-md-1">
              <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" disabled placeholder="Username" value="<?= $_SESSION["userInfo"]->nome ;?>">
              </div>
            </div>
            
          </div>
          <h5 class="title">Alterar senha</h5>
          <div class="row">
              
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" id="password1" placeholder="Senha">
              </div>
            </div>
            <div class="col-md-6 pl-md-1">
              <div class="form-group">
                <label>Confirmar senha</label>
                <input type="password" class="form-control" id="password2"  placeholder="Confirmar senha">
              </div>
            </div>
           
          </div>
          
          <div class="row">
            <div class="col-md-4 pr-md-1">
              <div class="form-group">
               
              </div>
            </div>
            <div class="col-md-4 px-md-1">
              <div class="form-group">
               
              </div>
            </div>
            <div class="col-md-4 pl-md-1">
              <div class="form-group">
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                
            </div>
            </div>
          </div>
        
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-fill btn-primary">Salvar</button>
      </div>
      </form>
      
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-user">
      <div class="card-body">
        <p class="card-text">
          <div class="author">
            <div class="block block-one"></div>
            <div class="block block-two"></div>
            <div class="block block-three"></div>
            <div class="block block-four"></div>
            <a href="javascript:void(0)">
              <img class="avatar" src="https://www.plazacity.com.br/images/logoredonda.jpg" alt="...">
              <h5 class="title"><?= $_SESSION["userInfo"]->nome; ?> </h5>
            </a>
            <p class="description">
            <!-- <?= $_SESSION["userInfo"]->userData ;?> -->
            </p>
          </div>
        </p>
        <div class="card-description" id="passaporte">
            <i class="fs-4 fa fa-id-badge"> </i>
            <span>Passaporte</span>
            <b><?= $_SESSION["userInfo"]->id ;?></b><br>
            <i class="fs-4 fa fa-birthday-cake"> </i>
            <span>Idade</span>
            <b><?= $_SESSION["userInfo"]->age ;?></b><br>
            <i class="fs-4 fa fa-phone"></i>
            <span>Telefone</span>
            <b><?= $_SESSION["userInfo"]->phone ;?></b><br>
            <i class="fs-4 fa fa-dollar-sign"> </i>
            <span>Carteira</span>
            <b >R$: <?= $_SESSION["userInfo"]->wallet ;?></b><br>
            <i class="fs-4 fa fa-dollar-sign"> </i>
            <span>Banco</span>
            <b >R$: <?= $_SESSION["userInfo"]->bank ;?></b><br>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>

function listar_doacoes(){
    
    $.ajax({
        url:'../php/loja_virtual.php',
        method:'post',
        data:{acao:'listardoacoes'},
        datatype:'json'
    }).then(function(result){
       
        $('listarvips').html('')
        $('listarveiculos').html('')
        $('listardinheiro').html('')
        $('listarpunicoes').html('')
        $('listaroutros').html('')
        for(var i = 0 ;i < result.length ;i++){
            
            $('#listar'+result[i].categoria).prepend(`
            <div class="col-sm-6 col-md-4"> 
                    <div class="loja">
                    <div>
                      <label><b>${result[i].nome}</b></label>
                    </div>
                    <div>
                      <img src="${result[i].img}">
                    </div>
                    <div>
                      <span>${result[i].valor}<b> LPs</b></span>
                    </div>
                    <div class="d-flex justify-content-center flex-wrap" id="buttons">
                      <button type="button" class="btn btn-success" value='${result[i].id}' id='doar'>Adquirir</button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#${result[i].modal}">Detalhes</button>
                    </div>
                  </div>              
                </div>        
            `)
            
          }
          
    })
  
}
listar_doacoes()
function perfildados(){
    navbarControl.updateProfileHandler()
}
function getveiculos(){
    $.ajax({
        url:'../php/gerenciarveiculos.php',
        method:'post',
        data:{acao:'listvehs'}
       
    }).done(function(result){
       
        $("#veiculosgerenciar").html("")
        $("#mostrarveiculos").html("") 
        
        for(var i = 0 ; i < result.length ; i++){
          
            $('#veiculosgerenciar').prepend(
                `<div class="col-sm-4 col-md-4 ">
                    <div class="veiculos">
                        <div>
                            <label><b>${result[i].nome}</b></label>
                        </div>
                        <div>
                            <img src="https://www.plazacity.com.br/images/carros/${result[i].name_spawn}.png">
                        </div>
                        <div>
                            <span>${result[i].valor}<b> Moedas</b></span>
                        </div>
                        <div>
                            <button type="button" id="deletarveiculo" value="${result[i].id}" class="btn btn-danger">Deletar</button>
                            <button type="button" id="editarveiculo" value="${result[i].id}" class="btn btn-info">Editar</button>
                        </div>
                    </div>
                </div>
                `);                             
            $('#mostrarveiculos').prepend(
                        `<div class="col-sm-4 col-md-4 ">
                            <div class="veiculos">
                                <div>
                                    <label><b>${result[i].nome}</b></label>
                                </div>
                                <div>
                                    <img src="https://www.plazacity.com.br/images/carros/${result[i].name_spawn}.png">
                                </div>
                                <div>
                                    <span>${result[i].valor}<b> Moedas</b></span>
                                </div>
                                <div>
                                <button type="button"class="btn btn-danger" id="adquirirveiculo" value="${result[i].id}">Adquirir</button>
                                <button type="button"class="btn btn-info">Estoque ${result[i].quantidade}</button>
                                </div>
                            </div>
                        </div>
                        `);
                        reload_utils()
                       
            }
    })
}  




$('#spawn').on("blur keyup", function(){
    const veh = $("#spawn").val()
    $('#imgveiculo')
    .attr('src', `http://8.9.37.88/imgnoxcity233223/${veh}.png`)
    .on('error', () => $('#imgveiculo').attr('src', 'http://plazacity.com.br/images/default.png'))
})

function limpar(){
    nome =$('#nome').val('')
    spawn=$('#spawn').val('')
    valor=$('#valor').val('')
    quantidade=$('#quantidade').val('')
    $('#imgveiculo').attr('src', 'http://plazacity.com.br/images/default.png');
}

$('#limpar_gerenciarVeiculos').click(function(){
   limpar()
})

$('#form_gerenciarveiculo').submit(function(e){
    e.preventDefault()
    var nome =$('#nome').val(), 
        spawn=$('#spawn').val(), 
        valor=$('#valor').val(), 
        quantidade=$('#quantidade').val()
       

    if(nome === '' || spawn === ''|| valor === ''|| quantidade === '')
        return Swal.fire({icon: 'warning',text: 'Preencha todos os campos!!', showConfirmButton: false, timer:1500})
        
    $.ajax({
        url:'../php/gerenciarveiculos.php',
        method:'post',
        data:{nome:nome,spawn:spawn,valor:valor,quantidade:quantidade,acao:'create_veh'},
        
    }).then(function(result){
        limpar()
        Swal.fire({
            icon: result.icon,
            text: result.text,
            showConfirmButton: false,
            timer:3000,
            toast:true,
            position: 'top-end',
            timerProgressBar: true,
        })
        
        getveiculos()
        reloadUtils()
        perfildados()
    })
    
})

function reload_utils() {
    $("#deletarveiculo").click(function(e){
        e.preventDefault()
        var id=$(this).val()
        Swal.fire({
            title: 'Deseja deletar o veiculo ?',
            text: "Essa ação e irreversível!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:'../php/gerenciarveiculos.php',
                    method:'post',
                    data:{id:id,acao:'deletevehs'}
                }).then(function(result){
                    Swal.fire({
                        icon: result.icon,
                        text: result.text,
                        showConfirmButton: false,
                        timer:3000,
                        toast:true,
                        position: 'top-end',
                        timerProgressBar: true,
                    })
                    getveiculos()
                })
            }
          })
    })

    $("#adquirirveiculo").click(function(e){
        e.preventDefault()
        var id=$(this).val()
        
        Swal.fire({
            title: 'Deseja adquirir esse  veiculo ?',
            text: "Essa ação e irreversível!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:'../php/gerenciarveiculos.php',
                    method:'post',
                    data:{id:id,acao:"buyvehicle"}
                }).then(function(result){
                    Swal.fire({
                        icon: result.icon,
                        text: result.text,
                        showConfirmButton: false,
                        timer:3000,
                        toast:true,
                        position: 'top-end',
                        timerProgressBar: true,
                    })
                    getveiculos()
                })
            }
          })

    })
}


getveiculos();
function load(){

$.ajax({
    url:'../php/pagamentos.php',
    method:'post',
    data:{acao:'load'},
    datatype:'json'
}).then(function(result){
   
    $("#doacoes").html('')
    for(var i=0; i< result.length ; i++){
       $("#doacoes").prepend(`
       <tr>
       <td>${result[i].passaporte}</td>
       <td>${result[i].email}</td>
       <td>${result[i].produto}</td>
       <td>${result[i].data}</td>
       <td class="text-center">R$<b>${result[i].valor}</b></td>
       <td class="text-center">${result[i].status_pagamento}</td>
     </tr>
       `)
     
   }
})

}

$('#alldonate').click(function(e){
e.preventDefault()
$.ajax({
    url:'../php/pagamentos.php',
    method:'post',
    data:{acao:'loadall'}
}).then(function(result){
    $("#doacoes").html('')
    for(var i=0; i<result.length ; i++){
       $("#doacoes").prepend(`
       <tr>
       <td>${result[i].passaporte}</td>
       <td>${result[i].email}</td>
       <td>${result[i].produto}</td>
       <td>${result[i].data}</td>
       <td class="text-center">R$<b>${result[i].valor}</b></td>
       <td class="text-center">${result[i].status_pagamento}</td>
     </tr>
       `)
    }
}).done(function(){
    Swal.fire({
        icon:'success',
        text:'Doações carregadas com sucesso',
        showConfirmButton: false,
        timer:3000,
        backdrop: false,
        toast: true,
        position: 'top-end',
        timerProgressBar: true,
    })
})

})

$('#reload').click(function(e){
    e.preventDefault()
    load()
})

load()

$('#allvehicleadmin').click(function(e){
    e.preventDefault()
    $.ajax({
        url:'../php/garagem.php',
        method:'post',
        data:{acao:'listallvehicle'}
    }).then(function(result){
        $('#garagem_veiculos').html('')
let timerInterval
Swal.fire({
  title: 'Carregando Veiculos!',
  html: 'Aguarde <b></b> Segundos.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
    Swal.fire({
        icon:'success',
        text:'Veiculos carregados com sucesso',
        showConfirmButton: false,
        timer:3000,
        backdrop: false,
        toast: true,
        position: 'top-end',
        timerProgressBar: true,
    })
  }
}) 
        for(var i=0;i < result.length;i++){
            $('#garagem_veiculos').prepend(` 
            <tr data-rp-id='${result[i].user_id}' data-rp-individuo='${result[i].vehicle}'>
            <td>${result[i].user_id}</td>
            <td>${result[i].vehicle}</td>
            <td>${result[i].engine}%</td>
            <td>${result[i].body}%</td>
            <td>${result[i].fuel}%</td>
            <td class="text-center">
            <button id="transfervehicle" class="btn btn-danger" value='${result[i].vehicle}'><i class="fas fa-exchange-alt"></i></button>
            <button id="deletevehicle" class="btn btn-info" value='${result[i].vehicle}'><i class="fas fa-trash-alt"></i></button>
            </td>
          </tr>          
            `)
        }
    })

})

function getvehicle(){
    $.ajax({
        url:'../php/garagem.php',
        method:'post',
        data:{acao:'uservehicles'}
    }).then(function(result){
        $('#garagem_veiculos').html('') 
        
        for(var i=0;i < result.length;i++){
            $('#garagem_veiculos').prepend(` 
            <tr data-rp-id='${result[i].user_id}' data-rp-individuo='${result[i].vehicle}'>
            <td>${result[i].user_id}</td>
            <td>${result[i].vehicle}</td>
            <td>${result[i].engine}%</td>
            <td>${result[i].body}%</td>
            <td>${result[i].fuel}%</td>
            <td class="text-center">
            <button id="transfervehicle" class="btn btn-info" value='${result[i].vehicle}'> <i class="fas fa-exchange-alt"></i></button>
            </td>
          </tr>          
            `)
        }
    })
}
$('#reload_vehicle').click((e)=>{
    e.preventDefault()
    Swal.fire({
        icon:'success',
        text:'Veiculos carregados com sucesso',
        showConfirmButton: false,
        timer:3000,
        backdrop: false,
        toast: true,
        position: 'top-end',
        timerProgressBar: true,
    })
    getvehicle();
})
getvehicle();
function getlog(){
   
$.ajax({
    url:'../php/log_geral.php',
    method:'post',
    data:{acao:'listAll'},
    datatype:'json'
    
}).then(function(result){
    
    $('#log_geral').html("")
    for(var i=0;i < result.length;i++){
        $('#log_geral').prepend(` 
        <tr data-rp-id='${result[i].id_rp}' data-rp-individuo='${result[i].individuo}' data-rp-data='${result[i].date}'>
        <td>${result[i].id_rp}</td>
        <td>${result[i].individuo}</td>
        <td>${result[i].acao}</td>
        <td class="text-center">${moment(result[i].date).format("DD/MM/YYYY hh:mm:ss A")}</td>
      </tr>          
        `)
    }
})
}
$("#filtro_log_geral").on("blur keyup",function(){
    const filter = $(this).val().toString().toLowerCase()
    $("table.tablesorter tbody tr")
    .hide()
    .filter((k, el) => 
        $(el).data("rp-id").toString().toLowerCase().includes(filter)
     || $(el).data("rp-individuo").toString().toLowerCase().includes(filter)
     || $(el).data("rp-data").toString().toLowerCase().includes(filter)
    )
    .show()
})

$("#reload_log").click(function(e){
getlog()
})
$("#limpar_log").click(function(e){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Deseja limpar o log?',
        text: "Essa ação é irreversível!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, limpar!',
        cancelButtonText: 'Não!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:'../php/log_geral.php',
                method:'post',
                data:{acao:'deleteAll'},
                datatype:'json'
            }).then(function(result){              
                 Swal.fire({
                    icon: result.icon,
                    text: result.text,
                    showConfirmButton: false,
                    timer:3000,
                    backdrop: false,
                    toast: true,
                    position: 'top-end',
                    timerProgressBar: true,
                })
                getlog()
            })
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            'Safe :)',
            'error'
          )
        }
      })



   
})
getlog();
reload_log();
function reload_log(){
    
  setTimeout(function(){ getlog(); reload_log();}, 30000);
  
  
}
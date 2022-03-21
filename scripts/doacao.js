const carrinho=[];


function reloadutils(){
  $('#doar').on('click',function(e){
    e.preventDefault()
  var id= $(this).val()
  $.ajax({
    url:'../php/doacao.php',
    method:'post',
    data:{acao:'additemcarrinho',iditem:id}
  }).then(function(result){
    Swal.fire({
      icon: result.icon,
      text: result.text,
      showConfirmButton: false,
      timer:2000,
      toast:true,
      position: 'top-end',
      timerProgressBar: true,
   })
  })

  })
 


}
  reloadutils()

function mostrarcarrinho(){
  $.ajax({
    url:'../php/doacao.php',
    method:'post',
    data:{acao:'mostrarcarrinho'},
  })
}
$('#quantidadelaplatas')
.mask('#.##0', {reverse: true})
.on('blur keyup',function(){
  var quantidade = $(this).val().replace(/\D+/g, "")
  var total = (quantidade || 0)*1000
  $('#valortotal').html(`${total} LPs`)
})

$('#prosseguir').attr('disabled','disabled')
$('#termos_de_uso').click(()=>{
  let check= $("#termos_de_uso").is(":checked")
  if (check === true ){
    $('#prosseguir').removeAttr('disabled') 
  }else{
    $('#prosseguir').attr('disabled','disabled')
  }
})

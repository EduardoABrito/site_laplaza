$("#form_doacao").submit(function(e){
    e.preventDefault()
    var valor =$("#quantidadelaplatas").val()
    var nome =$("#nome").val()
    var email =$("#email").val()
    // console.log(valor,nome,email)
      $.ajax({
        url:'../API/mercado_pago/index.php',
        method:'post',
        data:{valor:'',nome:nome,email:email,title:'LaPlatas'}
    }).then(function(result){
        
    })
    
})

$('#mercadopago').click(function(e){
    e.preventDefault()
 $("#prosseguir").val('')
 $("#prosseguir").val('Mercado Pago')
})

$('#form_doacao').submit(function(e){
    e.preventDefault()
var nome=$("#nome").val()
var email=$("#email").val()
var valor=$("#quantidadelaplatas").val()
    $.ajax({
        url : '../API/mercado_pago/pagar.php',
        method : "post",
        data : {nome:nome,email:email,valor:'10'}
    }).then(function(result){
        $('#doacaodados').html("")
        $('#doacaodados').load("../API/mercado_pago/pagar.php")
    })
})

$('#form_perfil').submit(function(e){
    e.preventDefault()
    var pass1=$('#password1').val()
    var pass2=$('#password2').val()

    if(pass1 === '' || pass2 === '')
        return Swal.fire({icon: 'error',text: 'O campo de senha ou confirmar senha está vazio.', showConfirmButton: false, timer:1500})
    if(pass1 !== pass2)
        return Swal.fire({icon: 'error', text: 'As senhas não coincidem.', showConfirmButton: false, timer:1500})
    $.ajax({
        url: '../php/perfil.php',
        method: 'post',
        data: {acao:'updatePassword',senha1:pass1 ,senha2:pass2},
        dataType: 'json'
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
        $('#password1').val('')
        $('#password2').val('')
    })
})


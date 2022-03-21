function countUser() {
    $.ajax({
        url:'../php/dashboard.php',
        method:'post',
        data:{acao:'countuser'}
    }).then(function(result){
        $('#countuser').html('')
        $('#countuser').prepend(`
       <i class="tim-icons icon-single-02 text-primary"></i> ${result['countuser'].countuser}
        `)
    })
}
function sales() {
    $.ajax({
        url:'../php/dashboard.php',
        method:'post',
        data:{acao:'sales'}
    }).then(function(result){
        $("#total").html(`<i class="tim-icons icon-bank text-info"></i> R$: ${result[0].total_sales}`)
        $("#sales").html(`<i class="tim-icons icon-send text-success"></i> ${result[0].countsales}`)
    })

}


function recarregar(){
    countUser()
    sales()
}
recarregar()

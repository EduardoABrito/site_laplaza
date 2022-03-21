<?php 
include('./config/config.php');
$title='Doação-La Plaza City';
 require __DIR__ .  '/vendor/autoload.php';
//include("vendor/autoload.php");
MercadoPago\SDK::setAccessToken(token_MercadoPago);

$preference = new MercadoPago\Preference();

// Cria um item na preferência
$item = new MercadoPago\Item();
$item->title = $_SESSION['payment']['produto'];
$item->quantity = 1;
$item->unit_price = $_SESSION['payment']['valor'];
$preference->items = array($item);
$preference->save();
?>
 <script
  src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
  data-button-label="Finalizar doação"
  data-preference-id="<?php echo $preference->id; ?>">  
 </script>

                 
                  




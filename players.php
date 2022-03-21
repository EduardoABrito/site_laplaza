<?php
/*-----------------------[ CONFIGURAÇOES ]------------------------------*/

$cfgs_server['titulo'] = "La Plaza City"; // Nome do servidor
$cfgs_server['ip'] = "51.222.19.162"; // IP do servidor, servidor local use localhost ou 127.0.0.1
$cfgs_server['porta'] = "30120"; // padrao é 30120
$cfgs_server['maximo_usuarios'] = 32; // Limite de jogadores

/*------------------------------------------------------------------*/
/*----------------[ IGNORE AQUI PARA BAIXO ]-----------------------*/
/*----------------------------------------------------------------*/
print "<div style='background-color: #f2f2f2; border: 4px double black; border-radius: 5px; width: 300px; padding: 2px; border: 4px double black;'>";
$conteudo = json_decode(file_get_contents("http://".$cfgs_server['ip'].":".$cfgs_server['porta']."/info.json"), true);
if($conteudo):
    $jogadores = file_get_contents("http://".$cfgs_server['ip'].":".$cfgs_server['porta']."/players.json");
	$conteudo = json_decode($jogadores, true);
	$contar = count($conteudo);
	$SRV_STATUS = "<font style='color: green;'>Online</font>";
	print "<p align='center'><strong>PLAYERS ON:</strong> $contar / $cfgs_server[maximo_usuarios]</p>";
else:
	$SRV_STATUS = "<font style='color: red;'>Offline</font>";
endif;
print "<br/><hr/><p align='center'><strong>Status: $SRV_STATUS</strong></p></div>";
/*--------------[Discord: Diego Haesbaert#3206 ]-------------*/
?>

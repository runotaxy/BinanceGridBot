<?php

$api_url = "https://api.binance.com/api/v3/trades?symbol=BTCTRY";

$data = json_decode(file_get_contents($api_url));

$ups = 0;
$downs = 0;

foreach ($data as $key => $v) {
	if(
		$v->isBuyerMaker == true &&
		$v->isBestMatch == true
	){
		$downs++;
	}else{
		$ups++;
	}
}

echo "UPS : $ups DOWNS : $downs";
// print_r($data);
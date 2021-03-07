<?php

$dizi=array('elma','armut','domates','kiraz');
$dizi=['elma','armut','domates','kiraz'];
$dizi2=array('elma'=>10,'armut'=>5,'domates'=>9,'kiraz'=>14);

foreach ($dizi as $key ) {
	echo "meyve: $key <br/>" ;
}

foreach ($dizi2 as $key=> $value) {
	echo "meyve: $key Fiyatı: ".$value." <br/>" ;
}

$sepet=array(
	'meyveler'=>array(
		'elma'=>5,
		'kiraz'=>10
	),
	'sebze'=>array(
		'havuç'=>3,
		'yeşillik'=>15
	)
);

foreach ($sepet as $tur => $sepetteki_urun) {
	foreach ($sepetteki_urun as $isim => $fiyat) {
		echo "Ürünün Tipi: $tur Ürünün İsmi: $isim Ürünün Fiyatı:$fiyat <br/>";
	}
}


?>
<?php

$toplam=0;
for($i=1;$i<=10;$i++){
	$toplam+=$i;
}
echo "1-10 arasındaki sayıların toplamı: $toplam";


$sayi=1;
while($sayi<=15){
	$carpim=1;
	for($i=1;$i<=$sayi;$i++){
		$carpim*=$i;
	}
	echo "$sayi sayısının faktoriyeli: $carpim <br/>";
	$sayi++;
}

$i=0;
while(1){
	echo "değer: $i ";
	if($i<=100){
		$i++;
	}else{
		break;
	}
}

$i=0;
for(;;){
	if($i==50){
		$i++;
		continue;
	}
	echo "değer: $i ";
	
	
	if($i<=99){
		$i++;
	}else{
		break;
	}
}

?>
 <?php

 $durum =5;
 $sayi1=10;
 $sayi2=5;

 if($durum==1){
 	echo 'sayi1+sayi2:'.($sayi1+$sayi2);
 }else if($durum==2){
	echo 'sayi1-sayi2:'.($sayi1-$sayi2);
 }else if($durum==3){
	echo 'sayi1*sayi2:'.($sayi1*$sayi2);
 }else if($durum==4){
	echo 'sayi1/sayi2:'.($sayi1/$sayi2);
 }else{
 	echo "Girdiğiniz duruma göre bir işlem bulunmuyor";
 }


  $a=40;
 if($a%2==0 && $a%5==0){
 	echo "10'a bölünebilir";
 }else{
 	echo "10'a bölünemez";
 }


 $a=17;
 if($a%2==0 || $a%5==0){
 	echo "2'ye yada 5 bölünebiliyor";
 }else{
 	echo "2'yede 5'de bölünemez";
 }


 $a=30;
 $b=30;
 if($a>$b || $a==$b){
 	echo "$a Sayısı $b sayısından büyük yada eşittir";
 }


$sayi=Null;

if(isset($sayi) && !empty($sayi)){
	echo "\$sayi değişkeninin Değeri: $sayi.";
}else{
	echo "\$sayi değişkeni boş veya tanımlı değil";
}

$sayi=Null;
if(isset($sayi) && !empty($sayi))
	echo "\$sayi değişkeninin Değeri: $sayi.";
else
	echo "\$sayi değişkeni boş veya tanımlı değil";


$sayi=Null;
$yazdir= (isset($sayi) && !empty($sayi))? "\$sayi değişkeninin Değeri: $sayi.":"\$sayi değişkeni boş veya tanımlı değil";
echo $yazdir;

echo (isset($sayi) && !empty($sayi))? "\$sayi değişkeninin Değeri: $sayi.":"\$sayi değişkeni boş veya tanımlı değil";



 $gun=7;
 switch ($gun) {
 	case 1:
 		echo "Pazartesi Günündeyiz";
 		break;
 	case 2:
 		echo "Salı Günündeyiz";
 		break;
 	case 3:
 		echo "Çarşamba Günündeyiz";
 		break;
 	case 4:
 		echo "Perşembe Günündeyiz";
 		break;
 	case 5:
 		echo "Cuma Günündeyiz";
 		break;
 	case 6:
 		echo "Cumartesi Günündeyiz";
 		break;
 	case 7:
 		echo "Pazar Günündeyiz";
 		break;
 	default:
 		echo "Maalesef Böyle bir Gün Yok";
 		break;
 }
 
?> 
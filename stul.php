<?
$key=$_POST["aaa"];
$bbb=$_POST["bbb"];
if ($key=='zeruj'){
$plik = fopen('stul.txt','w');
fputs($plik, '0');
fclose($plik);
}

if (!empty($bbb)){
$plik = fopen('stul.txt','r');
$su=fgets($plik, 100);

if ($su=="g1"){
$su="g1g2";
}elseif($su=="g2"){
$su="g1g2";
}else{
$su=$bbb;
}

$plik = fopen('stul.txt','w');
fputs($plik, $su);
fclose($plik);


}
$plik = fopen('stul.txt','r');
$su=fgets($plik, 100);
echo $su;

?>
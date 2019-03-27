<?
$key=$_POST["aaa"];

$plik = fopen('p2.txt','rw');
$kk=fgets($plik, 100);

if ($key=='a'){
$kk++;

if ($kk>=50){
$kk--;

}


$plik = fopen('p2.txt','w');
fputs($plik, $kk);
fclose($plik);
}


if ($key=='b'){

$kk--;
if ($kk<=0){
$kk++;
}
$plik = fopen('p2.txt','w');
fputs($plik, $kk);
fclose($plik);
}

if (empty($kk)){
$plik = fopen('p2.txt','w');
fputs($plik, '20');
fclose($plik);
}

?>
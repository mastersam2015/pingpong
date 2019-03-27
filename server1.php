<?
ob_start();
session_start();

if (!isset($_SESSION["xx"])){
$_SESSION["xx"]=1;
}

if (!isset($_SESSION["yy"])){
$_SESSION["yy"]=1;
}

//--------------------------server
$plik = fopen('x.txt','r');
$x=fgets($plik, 100);

$plik = fopen('y.txt','r');
$y=fgets($plik, 100);


if ((!isset($x))or(!isset($y))){

$x=40;
$y=25;

}

//--------------------------------------------server end


?>


<center>
<strong >player1</strong><br>

<?

echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" >";
//-----------------c1
echo "<tr>";


echo "</tr>";

for ($i=0;$i<=50;$i++){
echo "<tr>";


for ($j=0;$j<=80;$j++){

//------------------------------------------lewy
if ($j==0){

$plik = fopen('p1.txt','r');
$p1=fgets($plik, 100);

if (empty($p1)){
$p1=20;
}

//echo $p1. ">=".$i ." and ".$px ." <= ".$i."<br>";
if (($p1<=$i)and(($p1+10)>=$i)){
echo "<td class=\"cze\"></td>";
}
else{
echo "<td   ></td>";
}
}
//------------------------------------------------------prawy
elseif($j==80)

{


$plik = fopen('p2.txt','r');
$p2=fgets($plik, 100);

if (empty($p2)){
$p2=20;
}
$px=$p2+10;
//echo $p1. ">=".$i ." and ".$px ." <= ".$i."<br>";
if (($p2<=$i)and(($p2+10)>=$i)){
echo "<td   class=\"cze\" ></td>";
}
else{
echo "<td   ></td>";
}



}
//----------------------------------------------------body
else
{


if (($x==$j)and($i==$y)){

echo "<td   class=\"cze\" ></td>";
}
else{
echo "<td   ></td>";
}
}
}
echo "</tr>";
}
//---------------------c2
echo "";

echo "</table>";

//-------------------------------------------server write


if ($x<-1){

$_SESSION["xx"]=1;

$_SESSION["over"]=1;
$_SESSION["punkt2"]++;
}

if ($x>81){
$_SESSION["xx"]=-1;
$_SESSION["over"]=1;
$_SESSION["punkt1"]++;
}

if ($y<1){
$_SESSION["yy"]=1;
}


if ($y>49){
$_SESSION["yy"]=-1;
}

if (($p2<=$y)and(($p2+10)>=$y)and($x==80)){
$_SESSION["xx"]=-1;
}


if (($p1<=$y)and(($p1+10)>=$y)and($x==0)){
$_SESSION["xx"]=1;
}

$x2=$x+$_SESSION["xx"];
$y2=$y+$_SESSION["yy"];

$plik = fopen('x.txt','w');
fputs($plik, $x2);
fclose($plik);



$plik = fopen('y.txt','w');
fputs($plik, $y2);
fclose($plik);

//--------------------------------------------server end
echo "<br>";
if ($_SESSION["over"]==1){
echo "game over";
$_SESSION["licznik"]++;

if($_SESSION["licznik"]==10){
$_SESSION["over"]=0;
$_SESSION["licznik"]=0;
}
}

?>

<br>

<table border="1" ><tr><td width="30">player1<br><?  echo $_SESSION["punkt1"]; ?></td><td width="100%">
<?
echo "</td><td width=\"30\">player2<br>".$_SESSION["punkt2"]."</td></tr></table>";
/*
echo $_SESSION["xx"]." sx<br>";
echo $_SESSION["yy"]." sy<br>";
echo $x." x<br>";
echo $y." y<br>";
echo $x2." x2<br>";
echo $y2." y2<br>";
echo $p1." p1<br>";
*/

?>
<?php
//variabel
$nis = "123456";
$nama = "Ahmad Baihaqi";
$usia = 33;
echo "Nis : $nis <br>";
echo 'Nis : $nis <br>';
echo "Nama : " . $nama . "<br>";
echo "Usia : {$usia} <br>";
echo "Usia : $usia <br>";
?>


<?php
//aritmatika.php
$a = 1;
$b = 2;
$c = $a + $b;
$d = $a * $b;
$e = $a / $b;
$f = $a - $b;
$g = $a % $b;
$h = $a++;
$i = $a--;
echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br>";
echo "d = $d <br>";
echo "e = $e <br>";
echo "f = $f <br>";
echo "g = $g <br>";
echo "h = $h <br>";
echo "i = $i <br>";
?>

<?php
//operator pembanding
$a = 1;
$b = 2;
$c = $a == $b;
$d = $a != $b;
$e = $a > $b;
$f = $a < $b;
$g = $a >= $b;
$h = $a <= $b;
echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br>";
echo "d = $d <br>";
echo "e = $e <br>";
echo "f = $f <br>";
echo "g = $g <br>";
echo "h = $h <br>";
?>

<?php
//operator assignment
$x = 1;
$y = 2;
$z = 0;
echo "x = $x <br>";
echo "y = $y <br>";
$y += $x;
echo "y = $y <br>";
$x *= 10;
echo "x = $x <br>";
$z += $x + $y;
echo "z = $z <br>";
?>

<?php
//operator conditional
$x = 1;
$y = 1;
$hasil = $x == $y ? "x sama dengan y" : "x 
tidak sama dengan y";
echo $hasil;
echo "<br>";
$nama1 = "Budi";
$nama2 = "budi";
$result1 = $nama1 == $nama2 ? "nama sama" : 
"nama tidak sama";
$result2 = strtolower($nama1) == 
strtolower($nama2) ? "nama sama"
: "nama tidak sama";
echo $result1;
echo "<br>";
echo $result2;
?>

<?php
//if
$nilai = 75;
if($nilai > 75){
echo "lulus";
}else{
echo "tidak lulus";
}
?>

<?php
//if else if
/**
* jika nilai antara 91 - 100 mendapatkan A
* jika nilai antara 81 - 90 mendapatkan B
* jika nilai antara 71 - 80 mendapatkan C
* jika nilai antara 61 - 70 mendapatkan D
* jika nilai < 61 mendapatkan E
*/
$nilai = 10;
if($nilai >= 91 and $nilai <= 100){
echo "A";
}else if($nilai >= 81 and $nilai <= 90){
echo "B";
}else if($nilai >= 71 and $nilai <= 80){
echo "C";
}else if($nilai >= 61 and $nilai <= 70){
echo "D";
}else{
echo "E";
}
?>

<?php
//switch
$hari = 2;
switch ($hari) {
case 1:
echo "Hari minggu";
break;
case 2:
echo "Hari senin";
break;
case 3:
echo "Hari selasa";
break;
default:
echo "input antara 1 dan 7";
break;
}
?>

<?php
//$numbers = array(1, 2, 3, 4, 5); (numeric)
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $value) {
echo "$value <br />";
}
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
foreach ($numbers as $value) {
echo "$value <br />";
}
?>

<?php
//array assosiatif
$salaries = array("Budi" => 2000, "Ani" => 
1000, "zara" => 500);
echo "Salary of Budi is " . $salaries['Budi'] . 
"<br />";
echo "Salary of Ani is " . $salaries['Ani'] . 
"<br />";
echo "Salary of zara is " . $salaries['zara'] . 
"<br />";
/* Second method to create array. */
$salaries['Budi'] = "high";
$salaries['Ani'] = "medium";
$salaries['zara'] = "low";
echo "Salary of Budi is " . $salaries['Budi'] . 
"<br />";
echo "Salary of Ani is " . $salaries['Ani'] . 
"<br />";
echo "Salary of zara is " . $salaries['zara'] . 
"<br />";
?>


<?php
//arraymultidimensi.php
$nilai = array(
"Budi" => array(
"physics" => 35,
"maths" => 30,
"chemistry" => 39
),
"Ani" => array(
"physics" => 30,
"maths" => 32,
"chemistry" => 29
),
"zara" => array(
"physics" => 31,
"maths" => 22,
"chemistry" => 39
)
);
/* Accessing multi-dimensional array values */
echo "Marks for Budi in physics : ";
echo $nilai['Budi']['physics'] . "<br />";
echo "Marks for Ani in maths : ";
echo $nilai['Ani']['maths'] . "<br />";
echo "Marks for zara in chemistry : ";
echo $nilai['zara']['chemistry'] . "<br />";
?>

<?php
//for
for($i=0;$i<=10;$i++){
echo $i ."<br>";
}
echo "--------------<br>";
for($i=10;$i>=1;$i--){
echo $i ."<br>";
}
?>

<?php
//while
$i = 1;
while($i <= 10){
echo "$i<br>";
$i++;
}
echo "<hr>";
$x = 100;
while($x >= 1){
echo "$x<br>";
$x--;
}?>

<?php
//do while
$i = 1;
do{
echo "$i<br>";
$i++;
}while($i <= 10);
echo "<hr>";
$x = 100;
do{
echo "$x<br>";
$x--;
}while($x >= 1);
?>

<?php
//for each
$nilai = array("Budi" => array("physics" => 35,
"maths" => 30,
"chemistry" => 39),
"Ani" => array(
"physics" => 30,
"maths" => 32,
"chemistry" => 29
),
"zara" => array(
"physics" => 31,
"maths" => 22,
"chemistry" => 39
)
);
foreach ($nilai as $idx => $siswa){
echo "Nilai $idx <br>";
foreach ($siswa as $key => $value) {
echo "$key = $value <br>";
}
echo "<hr>";
}?>



<?php
//function
function say_hello() {
echo "Hello World"
;
}
function tambah($a, $b) {
$hasil = $a + $b;
return $hasil;
}
function rata_rata($nilai = array()) {
$total = 
0
;
foreach ($nilai as $value) {
$total += $value;
}
$rata_rata = $total / count($nilai);
return $rata_rata;
}
//memanggil fungsi
say_hello();
echo "<hr>"
;
$hasil = tambah(
1, 
1);
echo $hasil;
echo "<hr>"
;
$nilai = [10
,20
,20
,20
,10];
$rata = rata_rata($nilai);
echo $rata;
?>




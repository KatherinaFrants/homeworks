<?php
$arr=array('html','css','php','js','jq');
foreach($arr as $item){
    echo $item . '<br>';
}
/*-----2-------
<?php
$arr=array(1,20,15,17,24,35);
$rez=0;
foreach($arr as $item) {
$rez+=$item;
}
echo $rez;
-----------------------------------------
------3------
<?php
$arr=array(26,17,136,12,79,15);
$result=0;
foreach($arr as $item){
    $result+=$item**2;
}
echo $result;
------------------------------------------
-----4------
<?php
$arr=array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
foreach($arr as $key=>$item){
    echo $key . ' <br>'; }
    foreach ($arr as $k=> $val){
       echo  $val .'<br>';
}
--------------------------------------------
----5-----
<?php
$arr=array('Коля'=>'200','Вася'=>'300','Петя'=>'400');
foreach($arr as $key=>$item){
    echo $key . ' - зарплата ' . $item . '<br>';
}
-------------------------------------------------
------6------
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach($arr as $key=>$item){
    $en[]= $key;
}
echo'English_array <pre>';
print_r($en);
echo '<br>';
foreach($arr as $key=>$item){
    $ru[]=$item;
}

echo'Russian_array <pre>';
print_r($ru);
-------------------------------------------------------
----7-------
<?php
$arr=array(2,5,9,15,0,4);
foreach($arr as $item){
if (($item>3)&&($item<10))
{
echo $item . '<br>';
}
}
--------------------------------------
------8-------
<?php
$arr=array(1,2,3,4,5,6,7,8,9);
echo implode('',$arr);
-----------------------------------------
-----9-------
<?php
for($i=1; $i<=100; $i++){
echo $i . '<br>';
}
----------------------------------
-----10-----
<?php
for($i=11; $i<=33; $i++){
echo $i . '<br>';
}
-----------------------------------
-----11-------
<?php
for($i=0; $i<=100; $i++){
if(!($i%2)){
echo $i . '<br>';
}
}
----------------------------------------
------12--------
<?php
$n=1000;
$num=0;
while ($n>50){
    $n=$n/2;
    $num++;
}
echo "Kol-vo iteratsiy" . $num . "<br>";
echo $n;
------------------------------
----13-----
<?php
for ($i=1; $i<10; $i++){
    echo "<br>";
    for ($j=2; $j<10; $j++){
        echo "{$i} * {$j}= " . $i*$j."<br>";
    }
}
-----------------------------------
-----14------
<?php
$arr=array (4,2,5,19,13,0,10);
$e=2;
$rez=1;
foreach($arr as $item){
    if($item==$e)
    {
        $rez= "Yes";
        break;
    }else
        $rez="No";
}

echo $rez;
------------------------------
-----15-------
<?php
$arr=array(4,2,5,19,13,0,10);
$count=0;
foreach ($arr as $item){
    $count++;
}
echo $count;
*/

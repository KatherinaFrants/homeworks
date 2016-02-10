<?php
$name="Екатерина";
$age=24;
echo "Меня зовут " .$name."<br>";
echo "Мне ".$age." года"; 
if((18<$age) && ($age<59))
{
echo " <br> Вам еще работать и работать";

}

elseif ($age>59)
{
echo "<br> Вам пора на пенсию";
}
elseif ((0<$age) &&($age<18))
{
echo "<br> Вам рано работать";
}
elseif (($age<0) || (is_int($age)==false))
{
echo "<br> Неопределенный возраст";
}

$day=5;

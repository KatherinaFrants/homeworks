<?php
$name="���������";
$age=24;
echo "���� ����� " .$name."<br>";
echo "��� ".$age." ����"; 
if((18<$age) && ($age<59))
{
echo " <br> ��� ��� �������� � ��������";

}

elseif ($age>59)
{
echo "<br> ��� ���� �� ������";
}
elseif ((0<$age) &&($age<18))
{
echo "<br> ��� ���� ��������";
}
elseif (($age<0) || (is_int($age)==false))
{
echo "<br> �������������� �������";
}

$day=5;


<meta charset="utf-8"> 
<?php
$urok="Заказ елок";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['phone1']))		{$phone1		= $_POST['phone1'];		if ($phone1 == '')	{unset($phone1);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($phone1) ) {
$phone1=stripslashes($phone1);
$phone1=htmlspecialchars($phone1);
}
// адрес почты куда придет письмо
$address="hecobcemnpo@gmail.com";
// текст письма 
$note_text="Тема : $urok \r\nName : $name1 \r\n Phone : $phone1";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name1</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b> $phone1</b>.</p>";
}

?>
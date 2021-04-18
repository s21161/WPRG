<html>
<head>
</head>
<body>
<form method="POST" action="">
<input type="text" name="liczbaa">
<select name="licz">

	<option>+</option>
	<option>-</option>
	<option>*</option>
	<option>/</option>

</select>
<input type="text" name="liczbab">
<input type="submit" value="Wynik">
</form>
<?php
$liczbaa = $_POST['pierwsza liczba'];
$liczbab = $_POST['druga liczba'];
$licz = $_POST['liczenie'];
$wynik = "";
switch ($licz)

{
	case "+":
   $wynik = $liczbaa+$liczbab;
   break;
	case "-":
   $wynik = $liczbaa-$liczbab;
   break;
	case "*":
   $wynik = $liczbaa*$liczbab;
   break;
	case "/":
   $wynik = $liczbaa/$liczbab;
   break;
}

echo $wynik;
?>
</body>
</html>
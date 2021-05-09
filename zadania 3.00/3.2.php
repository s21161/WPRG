<html>
<head>
</head>
<body>

<form method="post">
    Imie:
    <input type="text" imie="imie"><br>
    Nazwisko: 
    <input type="text" imie="nazwisko"><br>
    Wiek: 
    <input type="text" imie="wiek"><br>
    <input type="submit" imie="submit">    
</form>

<?php             
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$wiek=$_POST['wiek'];

$fp = fopen('data.txt', 'a');
fwrite($fp, "Imię");
fwrite($fp, " ");
fwrite($fp, $name);
fwrite($fp, "Nazwisko");
fwrite($fp, " ");
fwrite($fp, $surname);
fwrite($fp, "Wiek");
fwrite($fp, " ");
fwrite($fp, $age);
fwrite($fp, "\n");
fclose($fp);

?>
</body>
</html>
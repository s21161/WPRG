<html>
<head>
</head>
<body>
<form method="POST" action="3.3.php">

<label>Licza osób</label>
<select name="osoby">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
</br>

<label>Imię </label><input type="text" name="imie" reqiured>
<label>Nazwisko </label><input type="text" name="nazwisko" reqiured>
</br>
Adres:
</br>
<label>Miejscowość </label><input type="text" name="miejscowosc" reqiured>
</br>
<label>Ulica </label><input type="text" name="ulica" reqiured>
</br>
<label>Numer domu </label><input type="text" name="nrdom" reqiured>
</br>

<label>Nr karty </label><input type="number" name="karta" min=0000000000000000 max=9999999999999999 reqiured>
</br>

<label>Email </label><input type="email" name="email" reqiured>
</br>

<label>Nr telefonu </label><input type="number" name="tel" size="10" min=111111111 max=999999999 reqiured>
<br>

<label>Czy łóżko dla dziecka? </label><input type="checkbox" name="dziecko" value="tak">
<br>

<label>Data przyjadu </label><input type="date" name="data"reqiured>
</br>

<label>Ilość nocy </label>
<select name="noc">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
</br>

<input type="submit" value="Wyślij">
</form>

<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$miejscowosc = $_POST['miejscowosc'];
$ulica = $_POST['ulica'];
$nrdom = $_POST['nrdom'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$osoby = $_POST['osoby'];
$dziecko = $_POST['dziecko'];
$data = $_POST['data'];
$noc = $_POST['noc'];


$fp = fopen('formularz.csv', 'a');
fwrite($fp, $imie);
fwrite($fp, ";");
fwrite($fp, $nazwisko);
fwrite($fp, ";");
fwrite($fp, $miejscowosc);
fwrite($fp, ";");
fwrite($fp, $ulica);
fwrite($fp, ";");
fwrite($fp, $nrdom);
fwrite($fp, ";");
fwrite($fp, $karta);
fwrite($fp, ";");
fwrite($fp, $email);
fwrite($fp, ";");
fwrite($fp, $tel);
fwrite($fp, ";");
fwrite($fp, $osoby);
fwrite($fp, ";");  
fwrite($fp, $dziecko);
fwrite($fp, ";");  
fwrite($fp, $data);
fwrite($fp, ";");  
fwrite($fp, $noc);
fwrite($fp, "\n");
?>   
    
<form action="3.3.php" method="post">
    <label>
    <tr>
    <br><br>
    Podgląd
    <td><input type="checkbox" name="wynik"></td>
    <br>
    <td><input type="submit" value="Wyślij"/></td>
    </tr>
    </label>
</form>

<?php
$row = 1;
if (isset($_POST["results"])) {
if (($handle = fopen("formularz.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num Fields in line: $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
    
}}
?>

</body>
</html>
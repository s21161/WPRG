<html>
<head>
</head>
<body>
<form method="POST" action="">

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
$nrdom = $_POST['numer domu'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$osoby = $_POST['osoby'];
$dziecko = $_POST['dziecko'];
$data = $_POST['data'];
$noc = $_POST['noc'];

 
echo("Potwierdzenie: ");
echo("Imię: $imie Nazwisko: $nazwisko Adres: $miejscowosc $ulica $nrdom Numer karty: $karta Email: $email Numer telefonu: $tel Liczba osób: $osoby Data: $data Ilość nocy: $noc  Czy łóżeczko $dziecko ");
  
  
  
  
  if($osoby>1) {
    echo ('<form>');
    for($i = 1; $i<$osoby; $i++) {
    echo('</br>
		Proszę o podanie danych kolejnej osoby.
		</br>
		<label>Imię </label><input type="text" reqiured name="imie"></label>
		</br>
		<label>Nazwisko </label><input type="text" reqiured name="nazwisko"></label>
		</br>');
		}}
echo ('<input type="submit" value="Wyślij"></form>');
?>
</body>
</html>
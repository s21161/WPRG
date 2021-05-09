<html>
<head>
</head>
<body>
<form method="POST" action="3.1.php">
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

if (isset($_POST["liczbaa"]) && isset($_POST["liczbab"]) && isset($_POST["licz"])) {
$liczbaa = $_POST['pierwsza liczba'];
$liczbab = $_POST['druga liczba'];
$licz = $_POST['licz'];

 switch ($licz) {
        case "+": {
			
            require 'funkcja.php';
            dodawanie($liczbaa, $liczbab);
            break;
        }
		
        case "-": {
			
            require 'funkcja.php';
            odejmowanie($liczbaa, $liczbab);
            break;
        }
		
        case "*": {
			
            require 'funkcja.php';
            mnożenie($liczbaa, $liczbab);
            break;
        }
		
        case "/": {
			
            require 'funkcja.php';
            if ($liczbab != 0) {
            dzielenie($liczbaa, $liczbab);
            } else {
                echo "Błąd";
            }
            break;
        }
    }
}
?>
</body>
</html>
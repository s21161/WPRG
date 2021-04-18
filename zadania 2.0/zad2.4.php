<html>
<head>
</head>
<body>
<form method="POST" action="">

<label>SPRAWDZARKA LICZB PIERWSZYCH</label>
</br>
<input type="text" name="Liczba">
<input type="submit" value="Licz">
</form>

<?php
$li = $_POST['Liczba'];
$a = 0;

if ($li < 1) {
         print ("Błąd");} 
         elseif ($li == 1) {
         print ('Jedynka nie jest ani liczbą pierwszą, ani złożoną!');} 
         else {
         $pier = True;
         for ($i = 2; $i < $li; $i++) {
           if ($pier) {
             if ($li % $i == 0) {
              $pier = False;
             }
           }$a++;
         }}
      if ($pier) {
        print ("Liczba $li jest liczbą pierwszą!");
        echo $a;
      } else {
        print ("Liczba $li nie jest liczbą pierwszą!");
        echo $a;
      }

?>
</body>
</html>
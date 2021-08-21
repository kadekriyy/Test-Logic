<html> 
    <head> 
        <title>Testcamp </title> 
    </head> 
    <body> <h2>Fizz Buzz </h2> 

    <form method="post" action=""> 
    Masukkan nilai n : <input type="number" name="number" required/><br/>
    <input type="submit" name="submit" value="Proses" /> 
    </form>
    <h4>HASIL : </h4> <br/>
    </body>
</html>

<?php
if (isset($_POST["submit"])) {
    $nilai = $_POST["number"];
    $tempArray = [];
    
for ($i = 1; $i <= $nilai; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        array_push($tempArray,'FizzBuzz');
    } elseif ($i % 3 == 0) {
        array_push($tempArray,'Fizz');
    } elseif ($i % 5 == 0) {
        array_push($tempArray,'Buzz');
    } else {
        array_push($tempArray,$i);
    }
}

print_r('Input: '.$nilai .'</br>');
print_r('Output: ');
print_r($tempArray);
}

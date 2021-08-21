<html> 
    <head> 
        <title>Testcamp </title> 
    </head> 
    <body> <h2>Palindrome </h2> 

    <form method="post" action=""> 
    Masukkan kata : <input type="text" name="text" required/><br/>
    <input type="submit" name="submit" value="Lihat Hasil" /> 
    </form>
    <h4>HASIL : </h4> <br/>
    </body>
</html>
<?php
if(isset($_POST["submit"])){
    $text = $_POST["text"];
    $reverse = strrev($text);
    if($text == $reverse){
        echo $text. " is palindrome"; 
    }else{
        echo $text. " is not palindrome";
    }
}
?>
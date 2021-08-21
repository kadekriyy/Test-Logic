<html> 
    <head> 
        <title>Testcamp </title> 
    </head> 
    <body> <h2>Reverse Word </h2> 

    <form method="post" action=""> 
    Masukkan kalimat : <input type="text" name="text" required/><br/>
    <input type="submit" name="submit" value="Reverse Word" /> 
    </form>
    <h4>HASIL : </h4> <br/>
    </body>
</html>
<?php
if(isset($_POST["submit"])){
    
    $string = $_POST["text"];
    $reversed = "";
    $tmp = "";
    for($i = 0; $i < strlen($string); $i++) {
        if($string[$i] == " ") {
            $reversed .= $tmp . " ";
            $tmp = "";
            continue;
        }
        $tmp = $string[$i] . $tmp;    
    }
    $reversed .= $tmp;

    print $reversed;
}
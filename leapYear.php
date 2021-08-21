<html> 
    <head> 
        <title>Testcamp </title> 
    </head> 
    <body> <h2>CEK TAHUN KABISAT </h2> 

    <form method="post" action=""> 
    Masukkan tahun pertama : <input type="number" name="tahunPertama" required/><br/>
    Masukkan tahun kedua : <input type="number" name="tahunKedua" required /><br/>
    <input type="submit" name="submit" value="Submit" /> 
    </form>
    <h4>HASIL : </h4> <br/>
    </body>
</html>

<?php

if(isset($_POST["submit"])){
    $start = $_POST["tahunPertama"];
    $end = $_POST["tahunKedua"];

    for ($start; $start <= $end; $start++) { 
        if ($start % 400 == 0) {
            echo  $start. ',' ;
        } elseif ($start % 4 == 0 && $start % 100 != 0 ) {
            echo $start. ',';
        } 
        
    }
}

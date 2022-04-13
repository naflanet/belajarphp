<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP</h1>
    <a href="home.html">Halaman Home</a>

    <br/>
    <?php 
    
    // string, integer, decimal, boolean.

    $seal = "SEAL"; 
    $kelas = 5;
    $decimal = 2.3;
    $benar = true;
    $salah = false;

    echo "saya sedang mengikuti kelas ".$seal." pertemuan ke ".$kelas." masuk?".$decimal;

    $x = 2;
    $y = 3;

    $z = $x * $y;

    echo "<br/>";
    echo "hasil perkalian ".$x." dengan variable ".$y." adalah ".$z;

    ?>
</body>
</html>
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
    $hoby = "membaca";
    $array = array("Menulis","Membaca",5,2.3,$kelas,$hoby);

    echo "saya sedang mengikuti kelas ".$seal." pertemuan ke ".$kelas." masuk?".$decimal;

    $x = 2;
    $y = 3;

    $z = $x * $y;

    echo "<br/>";
    echo "hasil perkalian ".$x." dengan variable ".$y." adalah ".$z;
    
    echo "<br/>";
    var_dump($array);

    // PHP Percabangan
    echo "<hr>";
    $nilai = 70;
    $batasLulus = 80;

    // if ($nilai > $batasLulus){
    //     echo "Selamat, Anda Lulus";
    // }else{
    //     echo "Mohon Maaf, Anda Belum Lulus";
    // }

    echo "<br/>";
    switch ($nilai){
        case ($nilai > 80):
            $hasil = "nilai A";
            break;
        case ($nilai > 60 && $nilai < 80):
            $hasil = "nilai B";
            break;
        case ($nilai < 60):
            $hasil = "nilai C";
            break;
    }

    echo $hasil;

    // ternary operator
    $lulus = $hasil == "nilai B" ? " Selamat, Anda Lulus" : " Mohon Maaf, Mengulang lagi";

    echo $lulus;

    $nilai = 60;
    // Pengulangan
    while ($nilai < $batasLulus){
        echo "Mengulang Lagi <br/>";
        $nilai = $nilai + 1;
    }

    echo "<hr>";
    echo "Pengulangan For <br/>";
    for ($nilai = 60 ; $nilai < $batasLulus; $nilai++){
        echo "Mengulang Lagi <br/>";
    }

    $nilai = 70;
    do {
        echo "Ujian <br/>";
        $nilai++;
    }while($nilai < $batasLulus);

    $hoby = array("membaca", "menulis", "olah raga", "jalan - jalan");
    echo "hoby saya adalah: <br/>";
    foreach ($hoby as $value){
        echo $value."<br/>";
    }
    
    // built in function
    echo "<hr>";
    echo "hoby saya ada ".count($hoby);

    // user defined function
    function cekKelulusan($nilai){
        if ($nilai > 80){
            return "Selamat, Anda Lulus";
        }else{
            return "Mohon Maaf, Belum Lulus";
        }
    }

    echo "<br/>";
    echo "---user defined function---";
    echo "<br/>";
    echo "hasil ujian anda ".cekKelulusan(90);


    echo "<br/>";
    $nilai = 60;
    while ($nilai < 100){
        echo "<br/>";
        echo "hasil ujian anda ".$nilai." -> ".cekKelulusan($nilai);
        $nilai = $nilai + 1;
    }


    ?>
</body>
</html>
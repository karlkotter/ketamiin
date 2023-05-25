<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>harjutus 1/2</title>
</head>
<body>

    <div class="container">
    <h1>Harjutus 1</h1>

    <?php
/*
Karl Eerik Kotter
24.01.23
ulesanded 1 ja 2
*/

        #Programm väljastab kolme muutuja (nimi, sünniaasta, tähtkuju)
        $nimi = "karlos";
        $aasta = 2000;
        $tahtkuju = "krabi";
        echo "nimi: ".$nimi."<br>Aasta: ".$aasta."<br>Tähtkuju: ".$tahtkuju."<br>";
        
        #Väljasta järgnev lause: “It’s My Life” – Dr. Alban
        echo '"it\'s My Life" - Dr-Albanazshazaar<br>';

        #“Joonista” järgmine pilt
        echo "(\(\\<br>";
        echo "( -.-)<br>";
        echo 'o_(")(")<br>';


    ?>
    <h1>Harjutus 2</h1>
    <?php    
        #Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse, korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel näidatakse ka tehet ja kuvatakse eraldi ridadel. 
        $arv1 = 8;
        $arv2 = 5;

        printf("%d+%d=%d<br>",$arv1,$arv2,$arv1+$arv2);
        printf("%d-%d=%d<br>",$arv1,$arv2,$arv1-$arv2);
        printf("%d*%d=%d<br>",$arv1,$arv2,$arv1*$arv2);
        printf("%d/%d=%d<br>",$arv1,$arv2,$arv1/$arv2);


        

        #Koosta kood, mis teisendab millimeetrid (mm) sentimeetriteks (cm) ja meetriteks (m). Vastus vormindatakse 2 kohta pärast koma.
        $mm = 200;
        $cm = round($mm / 10,2);
        $m = round($mm / 1000,2);
        printf("%dmm>%dcm<br>", $mm, $cm);
        printf("%dmm>%0.2fm<br>", $mm, $m);

        #Leia täisnurkse kolmnurga ümbermõõt ja pindala. Vastused ümardada täisarvuni ja täislausega palun.

        echo "<h2> Täisnurkne Kolmnurk</h2>";
        $k1 = 100;
        $k2 = 50;
        $k3 = sqrt(pow($k1,2)+pow($k2,2));
        $s = $k1*$k2/2;
        $p = $k1 + $k2 + $k3;
        printf("kolmnurga pindalda: %d <br>", $s); 
        printf("kolmnurga umbermoot: %d <br>", $p); 

    ?>
    </div>
</body>
</html>
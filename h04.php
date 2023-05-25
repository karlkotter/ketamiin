<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1{
            padding: 20px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }

        .container{
            padding-left: 20px;
        }


    </style>
</head>

    <body>
    <div class="container">
        <h1>Harjutus 4</h1>
        <h1>Jagamine</h1>
        <form action="h04.php" method="get">
        <input type="number" name="a" placeholder="Esimene arv" required><br>
        <input type="number" name="b" placeholder="Teine Arv" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
        </form>

        <h1>Vanus</h1>
        <form action="h04.php" method="get">
        <input type="number" name="vanus" placeholder="Vanus" required><br>
        <input type="number" name="vanus1" placeholder="Teine Vanus" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
        </form>
        
        <h1>Ristkülik või ruut</h1>
        <form action="h04.php" method="get">
        <input type="number" name="kulg" placeholder="Külg" required><br>
        <input type="number" name="kulg1" placeholder="Teine Külg" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
        </form>

        <h1>Ristkülik või ruut II</h1>
        <form action="h04.php" method="get">
        <input type="number" name="kulgg" placeholder="Külg" required><br>
        <input type="number" name="kulgg1" placeholder="Teine Külg" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
        </form>

        <h1>Juubel</h1>
        <form action="h04.php" method="get">
        <input type="number" name="juubel" placeholder="AANUS" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
        </form>

        <h1>Hinne</h1>
        <form action="h04.php" method="get">
        <input type="number" name="punktid" placeholder="Punktid" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
        </form>
        
        <?php

        #Jagamine – sisestatakse 2 täisarvulist muutujat. Jaga üks arv teisega. Väljasta ka hoiatav lause, kui kasutaja üritab jagada nulliga. Lisa kontroll, mis ei käivita koodi tühjade lahtrite puhul (N: if(!empty($_GET[‘name’])){lause}, see käivitab koodi siis, kui lahtrisse on midagi lisatud)
        if (isset($_GET["a"]) && isset($_GET["b"])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        
        if($b != 0){ 
            $jagamine = ($a / $b);
                echo $jagamine ." on teie summa";
            } else {
                echo "nulliga ei saa jagada.";
            }
        }

        #Vanus (if…elseif) – sisestatakse kasutaja vanused. Leia, kumb on vanem või on ühevanused. Kood ei käivtu, kui kumbki lahter on jäänud tühjaks
        if (isset($_GET["vanus"]) && isset($_GET["vanus1"])) {
        $vanus = $_GET['vanus'];
        $vanus1 = $_GET['vanus1'];
            
        if ($vanus > $vanus1) {
                echo "esimene vanus on vanem";
            } else if ($vanus < $vanus1) {
                echo "teine vanus on vanem";
            } else if($vanus = $vanus1) {
                echo "vanused on võrdsed";
            }
        }

        #Ristkülik või ruut – kasutaja sisestab ristküliku külgede väärtused. Sinu kood otsustab, kumb on võimalik: ruut või ristkülik
        if (isset($_GET["kulg"]) && isset($_GET["kulg1"])) {
        $kulg = $_GET['kulg'];
        $kulg1 = $_GET['kulg1'];
        if ($kulg == $kulg1) {
            echo "Tegemist on ruuduga";
        } else {
            echo "Tegemist ei ole ruuduga, oopiski ristkülksiga";
        }
        }

        #Ristkülik või ruut II – vastavalt kasutaja sisestatud arvudele kuvatakse vastavalt ruut või ristkülik
        if (isset($_GET["kulgg"]) && isset($_GET["kulgg1"])) {
            $kulgg = $_GET['kulgg'];
            $kulgg1 = $_GET['kulgg1'];
            if ($kulgg == $kulgg1) {
                echo "<div style='height: {$kulgg}px; width: {$kulgg1}px; background-color: black;'></div>";
            } else {
              echo "<div style='height: {$kulgg}px; width: {$kulgg1}px; background-color: black;'></div>";
            }
            }

        #Juubel – kasutaja lisab sünniaasta ning kood väljastab, kas tegemist on juubeliaastaga. Lisa kontroll, mis ei käivita koodi tühjade lahtrite puhul.
        if (isset($_GET["juubel"])){
            $juubel = $_GET['juubel'];
            if (is_numeric($juubel)) {
                $aasta = 2023;
                if (($aasta - $juubel) % 5 == 0) {
                  echo "Jups";
                } else {
                  echo "Mitte jups";
                }
            }
        }
        #Hinne (switch) – kasutaja sisestab oma KT punktide arvu. kui
        #ta sai rohkem kui 10p, tuleb kiri SUPER!
        #5-9p TEHTUD!
        #alla 5p KASIN!
        #kui pole punkte lisanud või lisas kogemata teksti tuleb kiri SISESTA OMA PUNKTID!
        if (isset($_GET["punktid"])){
            $punktid = $_GET['punktid'];
            if ($punktid >= 10){
                echo "Super";
            } elseif ($punktid >= 5 && $punktid <= 9) {
                echo "Tehtud";
            } elseif ($punktid < 5) {
                echo "kasin!";
            } else {
                echo "Sisesta oma punktid";
            }
        }
        

        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>harjutus 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .tekst{
            padding-top: 120px;
        }
    </style>
</head>
<body>

    <div class="container">
    <h1>Harjutus 3</h1>
    <h1>Trapsi pindala</h1>
    <form action="h03.php" method="get">
    Trapetsi esimene alus: <input type="number" name="alus1" required><br>
    Trapetsi teine alus: <input type="number" name="alus2" required><br>
    Trapetsi kõrgus:<input type="number" name="korgus" required><br>
    <input type="submit" value="Arvuta" class="btn btn-success"><br>
    </form>

    <div class="tekst">
        <h1>Rombi ümbermõõt</h1>
        <form action="h03.php" method="get">
        Rompsi ümps: <input type="number" name="romps" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
    </form>

    <?php
        

        $alus1 = $_GET['alus1'];
        $alus2 = $_GET['alus2'];
        $korgus = $_GET['korgus'];
        $romps = $_GET['romps'];

        $pindala = ($alus1 + $alus2) / 2 *($korgus);
        $pindala1 = $romps * 4;

        echo "trapsi pints on ". $pindala ."</br>";
        echo "rompsi ümps on ". $pindala1 ."</br>";


        /*
        Karl Eerik Kotter
        24.01.23
        ulesanded 1 ja 2
        */

    #Küsi kasutajalt vajalikud parameetrid ning leia:
        #trapetsi pindala,
        #rombi ümbermõõt



    ?>
    </div>
    </div>
</body>
</html>
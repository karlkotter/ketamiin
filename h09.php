<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H09</title>
    <style>
.container {
  width: 1200px;
  padding-top: 60px;
  
}
h1{
    text-align: center;
    font-family: "Comic Sans MS", "Comic Sans";
    text-shadow: 2px 2px #ff0bb0;
    border-style: solid;
}
.php{
    padding-left: 60px;
}
    </style>
</head>
<body>
    <div class="container">
        
        <h1>Harjutus (6)9</h1>
        <h3>Tervitamine</h3>
        <form action="h09.php" method="get">
        <input type="text" name="nimi" placeholder="Sisestage nimi" required><br>
        <input type="submit" value="sisesta" class="btn btn-outline-dark"><br>
        </form>
<?php
#Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
#Näiteks: sisend–>mARiO; väljund–>Tere, Mario!
if (isset($_GET["nimi"])){ 
$nimi = $_GET['nimi'];
$vaiksedTahed = strtolower($nimi);
$suurEsiTaht = ucfirst($vaiksedTahed);
echo "<h5>Tere, $suurEsiTaht.</h5>";
}
?>
<hr color="black" size="5">
<h3>Tükeldamine</h3>
        <form action="h09.php" method="get">
        <input type="text" name="tukeldamine" placeholder="Sisestage tekst" required><br>
        <input type="submit" value="sisesta" class="btn btn-outline-dark"><br>
        </form>
<?php
#Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
#Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.
if (isset($_GET["tukeldamine"])) {
$lause = $_GET["tukeldamine"];
$tahed = str_split($lause);
$tekst = implode(".", $tahed);
echo $tekst. ".";
}
echo "<hr color='black' size='5'>";
?>
<h3>Ropendamine</h3>
        <form action="h09.php" method="get">
        <input type="text" name="ropendamine" placeholder="Sisestage tekst" required><br>
        <input type="submit" value="sisesta" class="btn btn-outline-dark"><br>
        </form>
<?php
#Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
if (isset($_GET["ropendamine"])){
$ropendamine = $_GET["ropendamine"];
$pahadSonad = array('pede', 'lits', 'homo', 'hiidlane', 'luud', 'loll', 'jobi', 'persenuss', 'homokas', 'lilla', 'roosa', 'piider');
    foreach($pahadSonad as $ropendamine2) {
        #$tekst = preg_replace($pahadSonad, str_repeat("*", strlen($ropendamine2)));
    }
echo "Sa oled täielik ". $tekst;

}
echo "<hr color='black' size='5'>";
?>
<h3>Meil</h3>
        <form action="h09.php" method="get">
        <input type="text" name="eesnimi" placeholder="Sisestage EESNIMI" required><br>
        <input type="text" name="perenimi" placeholder="Sisestage PERENIMI!" required><br>
        <input type="submit" value="sisesta" class="btn btn-outline-dark"><br>
        </form>
<?php
#Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
#Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
if (isset($_GET["eesnimi"]) && isset($_GET["perenimi"])) {
    $eesnimi = $_GET["eesnimi"];
    $perenimi = $_GET["perenimi"];
    $nimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $eesnimi. "." .$perenimi);
    echo strtolower($nimi . "@hkhk.edu.ee");
}
echo "<hr color='black' size='5'>";
?>

</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H08</title>
    <style>
.container {
  width: 1200px;
  padding-top: 60px;

}

    </style>
</head>
<body>
    <div class="container">
        <h1>Harjutus 08</h1>
<?php
echo "<h3>Kuupäev ja kellaaeg</h3>";
#Kuva kuupäev ja kellaaeg formaadis 20.03.2023 17:31
    echo date('d.m.Y G:i' , time()). "<br>";
#Leia kui vana on või kui vanaks saab kasutaja sellel aastal

echo "<h3>Kui vanaks saab kasutaja</h3>";
?>
<form action="h08.php" method="get">
        <input type="date" id="date" name="a" placeholder="Sisestage oma sünniaasta" required><br>
        <input type="submit" value="Arvuta" class="btn btn-outline-dark"><br>
        </form>
<?php
if (isset($_GET["a"])) {
    $a = $_GET["a"];
    $today = date("Y-m-d");
    $diff = date_diff(date_create($a), date_create($today));
    echo 'Vanus on ' . $diff->format('%y'). "<br>";
}

#Mitu päeva on käesoleva kooliaasta lõpuni? Näiteks: 2022 kooliaasta lõpuni on jäänud 64 päeva!
echo "<h3>Mitu päeva on käesoleva kooliaasta lõpuni?</h3>";
$kooliLopp = date_create("2023-06-26");
$today = date_create();
$diff = date_diff($today, $kooliLopp);
$lopuni = $diff->days;
echo 'Kooliaasta lõpuni on jäänud '.$lopuni.' päeva.';

#Väljasta vastavalt aastaajale pilt (kevad, suvi, sügis, talv)
echo "<h3>Pildi väjastamine</h3>";


// Determine the current season
$seasons = array(
    'talv' => 'talv.jpg','kevad' => 'kevad.jpg','suvi' => 'suvi.jpg','sügis' => 'sugis.jpg');
    
    $praegune_aastaeg = '';
    
    // Määra praegune aastaeg
    $kuu = date('n');
    switch ($kuu) {
    case 12:
    case 1:
    case 2:
    $praegune_aastaeg = 'talv';
    break;
    case 3:
    case 4:
    case 5:
    $praegune_aastaeg = 'kevad';
    break;
    case 6:
    case 7:
    case 8:
    $praegune_aastaeg = 'suvi';
    break;
    case 9:
    case 10:
    case 11:
    $praegune_aastaeg = 'sügis';
    break;
    }
    
    // Kuvab vastava pildi
    echo '<img src="' . $seasons[$praegune_aastaeg] . '">';
    echo $seasons[$praegune_aastaeg];
    echo "</br>Sei tööta :(";
?>
</div>
</body>
</html>
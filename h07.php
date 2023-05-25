<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H07</title>
<style>
.tervitus{
    padding: 120px;
}
.uudiskiri{
    padding-top: 100px;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Harjutus 07</h1>
    <?php
    #koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”
function tervitus() {
    $tervituslause = array("Tere päiksekene!","Tere tulemast!","Tere hommikust!");
    $lamplause = $tervituslause[array_rand($tervituslause)];
    echo "<h4>$lamplause</h4>";
  }
  tervitus();
  ?>
    <div class="uudiskiri">
        <?php
        #koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)
        
    function uudiskiri() {
        echo '<form class="form-inline" action="h07.php" method="post">';
        echo '<div class="form-group mx-sm-3 mb-2">';
        echo '<label for="email" class="sr-only">Email address</label>';
        echo '<input type="email" class="form-control" id="email" placeholder="Kirjutage email">';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary mb-2">Subscribe</button>';
        echo '</form>';
        }
        uudiskiri();
        ?>
    </div>



</div>
</body>
</html>
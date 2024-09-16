<?php
echo"<pre>";
    print_r($_POST);

    $i=1;

    $arrSport=array(
        1 => "Futbol",
        2 => "Basketbol",
        3 => "Voleybol"
    );
    $arrTakim=array(
        1 => "Sakaryaspor",
        2 => "Galatasaray",
        3 => "Fenerbahçe",
        4 => "Beşiktaş"
    );

    for($i=0; $i<count($_POST["sport"]); $i++){
        echo $_POST["sport"][$i] . "--------";
        echo $arrSport[$_POST["sport"][$i]];
        echo "<br>";
    }

    echo "<h1>Takımlar</<h1>";

    echo $_POST["takim"] . "==>" . $arrTakim[$_POST["takim"]];
    
?>
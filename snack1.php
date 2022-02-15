<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->

<?php

    $partite = [
        [
            "squadraCasa" => "Squadra 1",
            "punteggioCasa" => "40",
            "squadraOspite" => "Squadra 2",
            "punteggioOspite" => "23 ",
        ],
        [
            "squadraCasa" => "Squadra 1",
            "punteggioCasa" => "10",
            "squadraOspite" => "Squadra 2",
            "punteggioOspite" => "18 ",
        ],
        [
            "squadraCasa" => "Squadra 1",
            "punteggioCasa" => "27",
            "squadraOspite" => "Squadra 2",
            "punteggioOspite" => "25",
        ]
    ];

    var_dump($partite);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack 1</title>
 </head>
 <body>

    <h1>Torneo di basket</h1>
    <h2>Seconda giornata di campionato</h2>

<?php

    for ($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]["squadraCasa"] ." - ". 
        $partite[$i]["squadraOspite"] ." | ". 
        $partite[$i]["punteggioCasa"] ."-". 
        $partite[$i]["punteggioOspite"];
    }

?>
     
 </body>
 </html>
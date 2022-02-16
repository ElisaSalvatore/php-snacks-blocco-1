<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $numDaCreare = 15;
    $numGenerati = [];

    // for ($i=0; $i < $numDaCreare; $i++) {
    //     $randomNumber = rand(1, 50);
       
    //     if (!in_array($randomNumber, $numGenerati)) {
    //         // per non avere doppioni di numeri all'interno dell'array
    //         $numGenerati[] = $randomNumber;

    //         // var_dump($i);
    //     } else {
    //         $i--;
    //         // se un indice dovesse creare u nnumero che già esiste nell'array, 
    //         //decrementando quensto andrà a generare un nuovo numero finchè 
    //         //non ne genera uno che non è ancora presente nell'array di numeri generati.  
    //     };
    // };

    while (count($numGenerati) < 15) {
        $randomNumber = rand(1, 50);
        if (!in_array($randomNumber, $numGenerati)) {
            $numGenerati[] = $randomNumber;
        }
    }

    var_dump($numGenerati);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

<?php 
    
?>
    
</body>
</html>
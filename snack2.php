<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
<?php

    $atPositon = strpos($email, "@");
    $dotPosition = strpos($email, ".", $atPositon + 2);

    if (strlen($name) > 3 && ($atPositon > 2 && $dotPosition !== false) && is_numeric($age) )  {
        echo "Accesso riuscito.";
    } else {
        echo "Accesso negato!";
    };

    // nella condizione: l'$atPosition deve essere maggiore di N perchè sennò
    //potrebbe darci per valida anche una email con la @ in positizione 0, 
    //invece così deve essere almeno alla terza posizione.
    //!== false e > 2 sono equivalenti in questo caso, entrambi specificano che gli elementi diversi da false (=sennò non funzionerebbe)

    // Per una validazione della email più sicura e funzionale
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
?>
    
</body>
</html>
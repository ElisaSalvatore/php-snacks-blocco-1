<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà 
come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php 

$posts = [
    '01-01-2021' => [
        0 => [
            "title" => 'Titolo',
            "text" => 'Questo è il testo del primo post.',
        ],
        1 => [
            "title" => 'Titolo',
            "text" => 'Questo è il testo del primo post.',
        ],
    ],
    '02-02-2021' => [
        0 => [
            "title" => 'Titolo del secondo post.',
            "text" => 'Questo è il testo del secondo post.',
        ],
    ],
    '03-03-2021' => [
        0 => [
            "title" => 'Titolo del terzo post.',
            "text" => 'Questo è il testo del terzo post.',
        ],
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>

<?php 
    // recuperare la chiave di ogni post
    $keys =array_keys($posts);

    for ($i = 0; $i < count($posts); $i++) {
        $key = $keys[$i];
        $value = $posts[$key];
        var_dump($i, $key);

        echo "<h2>$key</h2>"; 

        for ($y = 0; $y < count($value) ; $y++) { 
            $post = $value[$y];
            echo $post["title"] . "</br>" . $post["text"] . "</br>"; 
        }
    }
?>

</body>
</html>
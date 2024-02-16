<?php
// Titolo della pagina
$page_label = 'Dati del form';

// Testo inserito nella text area
$paragraph = $_POST['paragraph'];
// Calcolo la lunghezza della stringa
$paragraph_length = strlen(trim($paragraph));

// Testo inserito nell'input
$censored = $_POST['censored'];
// Calcolo la lunghezza della stringa
$censored_length = strlen(trim($censored));

// Creo un array di strighe
$censored_array = explode(' ', $censored);

$censored_firstLetters = str_replace('stupido', '***', $censored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title><?= $page_label ?></title>
</head>

<body>
    <div class="container">
        <h1>Dati del form</h1>
       <h3>Testo:</h3>
       <p><?= $paragraph ?></p>
       <p><b>Caratteri:</b> <?= $paragraph_length ?></p>
       <hr>
       <h3>Testo da censurare:</h3>
       <p><?= $censored_firstLetters ?></p>
       <p><b>Caratteri:</b> <?= $censored_length ?></p>
    </div>
    
</body>
</html>
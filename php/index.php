<?php
$page_label = 'Dati del form';

$paragraph = $_GET['paragraph'];

$censured = $_GET['censured']
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
       <h4>Questo è il testo:</h4>
       <p><?= $paragraph ?></p>
       <hr>
       <h4>Testo da censurare:</h4>
       <p><?= $censured ?></p>
    </div>
    
</body>
</html>
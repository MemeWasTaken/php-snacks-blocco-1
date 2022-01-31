<?php
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $name = $_GET['name'];
    var_dump($name); // > 3 caratteri

    $mail = $_GET['mail'];
    var_dump($mail); // contiene '@' e '.'

    $age = $_GET['age'];
    var_dump($age); // = numero

    if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) === true) {
        $message = 'Accesso Riuscito';
    } else {
        $message = 'Accesso Negato';
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Status: <span> <?php echo $message; ?> </span> 
    </h1>
</body>
</html>
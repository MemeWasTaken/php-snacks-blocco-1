<?php
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    $par = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consectetur porro totam eligendi autem, asperiores quisquam modi natus praesentium in ipsa mollitia iusto beatae deserunt rem aliquid minima delectus eius. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus et corporis voluptatibus incidunt voluptas enim cum neque. Maiores voluptatem eaque quis fugit, provident iure quisquam! Iure ullam quis vero earum.';

    $newPar = explode('. ', $par);
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
    <ul>
        <?php
            foreach ($newPar as $key => $par) { ?>
            <li> <?php echo $par;?></li>
            <?php }
        ?>
    </ul>
</body>
</html>

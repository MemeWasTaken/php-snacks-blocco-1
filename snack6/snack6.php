<?php
    // Dato un'array stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    $gray = 'gray';
    $red = 'red';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php foreach ($db as $key => $type) {
            if ($key === 'teachers') {
                for ($i=0; $i < count($type); $i++) { ?>
                <div class="grey"><?php echo $type[$i]['name'] . ' ' . $type[$i]['lastname'] . '<br>'; ?> </div>
                <?php }
            } else {
                for ($i=0; $i < count($type); $i++) { ?>
                <div class="green"><?php echo $type[$i]['name'] . ' ' . $type[$i]['lastname'] . '<br>'; ?> </div>
            <?php    }
            }
        } ?>
    </body>
</html>
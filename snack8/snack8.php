<?php
    // Creiamo un array consentente dei prodotti con
    // Nome
    // Prezzo
    // Immagine
    // Tipologia
    // Stampiamo tutti i nostri prodotti in pagina
    // Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia

    $products = [
        [
            'name' => 'Iphone 5',
            'price' => '1234',
            'img' => 'https://picsum.photos/200/250',
            'type' => 'phone'
        ],
        [
            'name' => 'Iphone 6',
            'price' => '1235',
            'img' => 'https://picsum.photos/200/250',
            'type' => 'phone'
        ],
        [
            'name' => 'Iphone 7',
            'price' => '1236',
            'img' => 'https://picsum.photos/200/250',
            'type' => 'phone'
        ],
        [
            'name' => 'Ipad Air',
            'price' => '1237',
            'img' => 'https://picsum.photos/200/250',
            'type' => 'tablet'
        ],
        [
            'name' => 'Ipad Pro',
            'price' => '1238',
            'img' => 'https://picsum.photos/200/250',
            'type' => 'tablet'
        ],
    ];

    $filteredProducts = $products;
    if (isset($_GET['type']) !== false){
        $type = $_GET['type'];
        if ($type === 'all'){
            $filteredProducts = $products;
        } else {
            $filteredProducts = [];
            foreach ($products as $product){
                if ($product['type'] === $type){
                    $filteredProducts[] = $product;
                }
            }
        }
    }

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
    <div class="container-select">
        <form action="snack8.php" method="GET">
            <select name="type" id="type">
                <option value="all">all</option>
                <option value="phone"> Phone </option>
                <option value="tablet"> Tablet </option>
            </select>
            <button>Cerca</button>
        </form>
    </div>
    <div class="container-cards">
        <?php foreach ($filteredProducts  as $product) { ?>
            <div class="card">
                <img src="<?= $product['img']?>" alt="<?= $product['name'] ?>">
                <h2> <?= $product['name'] ?> </h2>
                <h5> <?= $product['type'] ?> </h5>
                <h4> <?= $product['price'] . ' &euro;' ?> </h4>
            </div>
        <?php } ?>
    </div>
</body>
</html>
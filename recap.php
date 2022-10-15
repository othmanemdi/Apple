<?php
$first_name = "Maryam";
$last_name = "Bouchuariti";
$full_name = $first_name . ' ' . $last_name;
$quantite = 5;
$price = 45.00;

$number_1 = 2;
$number_2 = 0;

$somme = $number_1 + $number_2;
$soustraction = $number_1 - $number_2;
$multiplication = $number_1 * $number_2;

if ($number_2 != 0) {
    $division = $number_1 / $number_2;
} else {
    $division = "Error";
}

// echo $division;


function somme(int|float $a, int|float $b): int|float
{
    return $a + $b;
}

function soustraction(int|float $a, int|float $b): int|float
{
    return $a - $b;
}
function muliplication(int|float $a, int|float $b): int|float
{
    return $a * $b;
}


function division(int|float $a, int|float $b): int|float|string
{
    // if ($b == 0) {
    //     return "Error";
    // } else {
    //     return $a / $b;
    // }

    // if ($b == 0)
    //     return "Error";
    // return $a / $b;

    return $b == 0 ? 'Error' : $a / $b;
}

// echo somme($number_1, $number_2);
// echo soustraction($number_1, $number_2);
// echo muliplication($number_1, $number_2);
// echo division($number_1, $number_2);


function dd(array $array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    exit();
}

$produits = [];
$produits[1] = "Ciel";
$produits[] = "Goblet";
$produits[] = "Souris";
$produits[] = "Telephone";
$produits[] = "Chocolat";
$produits[] = "Air Pods";

$total_produits = count($produits);
// echo $total_produits;
// exit();
// $produi_id = 6;
// if ($produi_id <= $total_produits)
//     echo $produits[$produi_id];
// else
//     echo "Pas de produit";
// exit();

// $produits = [
//     "Ciel",
//     "Goblet",
//     "Souris",
//     "Telephone",
//     "Chocolat"
// ];

// $produits = array(
//     "Ciel",
//     "Goblet",
//     "Souris",
//     "Telephone",
//     "Chocolat"
// );

// dd($produits);

// exit();

// include 'database/db.php';
// include_once 'database/db.php';
// require 'database/db.php';
require_once 'database/db.php';

// $i = 1;
// while ($i <= 10) {
//     echo "5 x $i =" . $i * 5;
//     $i++;
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo "5 x $i =" . $i * 5;
// }

// $operation = '+';
// $numero_1 = 5;
// $numero_2 = 10;

// if ($operation == '+') {
//     echo somme($numero_1, $numero_2);
// } else if ($operation == '-') {
//     echo soustraction($numero_1, $numero_2);
// } else if ($operation == '*') {
//     echo muliplication($numero_1, $numero_2);
// } else if ($operation == '/') {
//     echo division($numero_1, $numero_2);
// }

// switch ($operation) {
//     case '+':
//         echo somme($numero_1, $numero_2);
//         break;
//     case '-':
//         echo soustraction($numero_1, $numero_2);
//         break;
//     case '*':
//         echo muliplication($numero_1, $numero_2);
//         break;
//     case '/':
//         echo division($numero_1, $numero_2);
//         break;
//     default:
//         echo "Error";
//         break;
// }

function calculatrice(int|float $num_1, int|float $num_2, string $oper): int|float|string
{
    switch ($oper) {
        case '+':
            return somme($num_1, $num_2);
            break;
        case '-':
            return soustraction($num_1, $num_2);
            break;
        case '*':
            return muliplication($num_1, $num_2);
            break;
        case '/':
            return division($num_1, $num_2);
            break;
        default:
            return "Error";
            break;
    }
}

echo calculatrice(7, 7, '*');
exit();

// echo $produits[4]['price'];


// $name = "Hind";

// for ($i = 1; $i <= 10; $i++) {
//     echo "5 x $i = " . muliplication(5, $i);
//     echo '<br/>';
// }










// exit();
// $total_produits = count($produits);
// echo $total_produits;

// echo $produits[5]['name'];
// echo $produits[6]['price'];

// dd($produits);
// exit();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-5">Apple</h1>


        <div class="row">
            <?php foreach ($produits as $key => $p) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/produits/<?= $key ?>.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $p['name'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $p['price'] ?>.00 DH
                            </p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>

                </div>
                <!-- col -->

            <?php endforeach ?>


        </div>
        <!-- row -->

        <div class="row">
            <?php for ($i = 1; $i <= count($produits); $i++) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/produits/<?= $i ?>.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $produits[$i]['name'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $produits[$i]['price'] ?>.00 DH
                            </p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>

                </div>
                <!-- col -->

            <?php endfor ?>


        </div>
        <!-- row -->



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
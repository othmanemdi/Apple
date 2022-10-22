<?php


// if (isset($_COOKIE['stagiaire'])) {
//     echo $_COOKIE['stagiaire'];
// } {
//     // setcookie('stagiaire', 'Hind', time() + 60 * 60 * 24 * 365);
// }



// dd($categories);

// $categorie_json = json_encode($categories);

// dd($categorie_json);

// exit();

// setcookie('categories', $categorie_json, time() + 60 * 60 * 24 * 365);

// $categorie_json_decode = json_decode($_COOKIE['categories'], true);
// dd($categorie_json_decode);


$categories = [
    1 => "téléphones",
    "tablettes",
    "pc-portable",
    "pc bureaux",
    "montres",
];

$colors = [
    1 => "red",
    "black",
    "gold",
    "blue",
    "pink",
    "gray",
    "orange",
];


$produits = [
    1 => [
        "image" => "images/produits/1.jpg",
        "name" => "Iphone 13 Pro Max",
        "price" => 12000,
        "old_price" => 13500,
        "color" => $colors[4],
        "category" => $categories[1],
    ],
    [
        "image" => "images/produits/2.jpg",
        "name" => "Iphone 13 Pro Max",
        "price" => 12000,
        "old_price" => 13500,
        "color" => $colors[3],
        "category" => $categories[1],
    ],
    [
        "image" => "images/produits/3.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[5],
        "category" => $categories[4],
    ],
    [
        "image" => "images/produits/4.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[6],
        "category" => $categories[4],
    ], [
        "image" => "images/produits/5.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[4],
        "category" => $categories[4],
    ],
    [
        "image" => "images/produits/6.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[7],
        "category" => $categories[4],
    ]
];


$produits_json = json_encode($produits);
// echo $produits_json;


// setcookie('produits', $produits_json, time() + 60 * 60 * 24 * 365);

$produits_json_decode = json_decode($_COOKIE['produits'], true);
dd($produits_json_decode);


exit();
// unset($_COOKIE['stagiaire']);




exit();

$categories = [
    1 => "téléphones",
    "tablettes",
    "pc-portable",
    "pc bureaux",
    "montres",
];

$colors = [
    1 => "red",
    "black",
    "gold",
    "blue",
    "pink",
    "gray",
    "orange",
];

$produits = [
    1 => [
        "image" => "images/produits/1.jpg",
        "name" => "Iphone 13 Pro Max",
        "price" => 12000,
        "old_price" => 13500,
        "color" => $colors[4],
        "category" => $categories[1],
    ],
    [
        "image" => "images/produits/2.jpg",
        "name" => "Iphone 13 Pro Max",
        "price" => 12000,
        "old_price" => 13500,
        "color" => $colors[3],
        "category" => $categories[1],
    ],
    [
        "image" => "images/produits/3.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[5],
        "category" => $categories[4],
    ],
    [
        "image" => "images/produits/4.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[6],
        "category" => $categories[4],
    ], [
        "image" => "images/produits/5.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[4],
        "category" => $categories[4],
    ],
    [
        "image" => "images/produits/6.jpg",
        "name" => "Imac ",
        "price" => 24000,
        "old_price" => 24500,
        "color" => $colors[7],
        "category" => $categories[4],
    ]
];

$total_cart_quantity = $total_cart_price = 0;

if (isset($_SESSION['cart_info'])) {
    foreach ($_SESSION['cart_info'] as $key => $c) {
        $total_cart_quantity += $c['produit_qt'];
        $total_cart_price += $produits[$c['produit_id']]['price'] * $c['produit_qt'];
    }
}

// unset($_SESSION['cart_info']);

// $_SESSION['cart_info'][1]['produit_id'] = 1;
// $_SESSION['cart_info'][1]['produit_qt'] = 3;

// $_SESSION['cart_info'][2]['produit_id'] = 2;
// $_SESSION['cart_info'][2]['produit_qt'] = 2;

// $_SESSION['cart_info'][2]['produit_id'] = 3;
// $_SESSION['cart_info'][2]['produit_qt'] = 2;
// unset($_SESSION['cart_info'][2]);

// $total_cart_session = count($_SESSION['cart_info']);
// $_SESSION['cart_info'][$total_cart_session + 1]['produit_id'] = 3;
// $_SESSION['cart_info'][$total_cart_session + 1]['produit_qt'] = 2;



// $keys =  array_keys($_SESSION['cart_info']);
// $max = max($keys);
// $new_item = $max + 1;
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit();

// $produits = [];
// $produits[1]['name'] = "Iphone 13 Pro Max";
// $produits[1]['price'] = 12000;
// $produits[1]['old_price'] = 13500;
// $produits[1]['color'] = $colors[4];
// $produits[1]['category'] = $categories[1];

// $produits[2]['name'] = "Iphone 13 Pro Max";
// $produits[2]['price'] = 12000;
// $produits[2]['old_price'] = 13500;
// $produits[2]['color'] = $colors[3];
// $produits[2]['category'] = $categories[1];

// $produits[3]['name'] = "Imac ";
// $produits[3]['price'] = 24000;
// $produits[3]['old_price'] = 24500;
// $produits[3]['color'] = $colors[5];
// $produits[3]['category'] = $categories[4];

// $produits[4]['name']  = "Imac";
// $produits[4]['price'] = 24000;
// $produits[4]['old_price'] = 24500;
// $produits[4]['color'] = $colors[6];
// $produits[4]['category'] = $categories[4];

// $produits[5]['name'] = "Imac";
// $produits[5]['price'] = 24000;
// $produits[5]['old_price'] = 24500;
// $produits[5]['color'] = $colors[4];
// $produits[5]['category'] = $categories[4];

// $produits[6]['name'] = "Imac";
// $produits[6]['price'] = 24000;
// $produits[6]['old_price'] = 24500;
// $produits[6]['color'] = $colors[7];
// $produits[6]['category'] = $categories[4];

<?php

require_once("./models/category.php");
require_once("./models/products.php");
require_once("./models/food.php");
require_once("./models/bed.php");
require_once("./models/toy.php");


// $products = [
//   "dogs" => [
//     "food" => [
//       (object) [
//         "name" => "crocsMaki",
//         "price" => "20",
//         "icon" => "iconaCane",
//         "img" => "crocsDogs.jpg",
//         "typology" => "food",
//         "category" => "dogs"
//       ]
//     ],
//     "toy" => [
//       (object) [
//         "name" => "toyMaki",
//         "price" => "12",
//         "icon" => "iconaCane",
//         "img" => "toyDogs.jpg",
//         "typology" => "toy",
//         "category" => "dogs"
//       ]
//     ],
//     "cuccia" => [
//       (object) [
//         "name" => "crocsMaki",
//         "price" => "20",
//         "icon" => "iconaCane",
//         "img" => "cucciaDogs.jpg",
//         "typology" => "cuccia",
//         "category" => "dogs"
//       ]
//     ]
//   ],
//   "cats" => [
//     "food" => [
//       (object) [
//         "name" => "crocsMaki",
//         "price" => "20",
//         "icon" => "iconaGatto",
//         "img" => "crocsCats.jpg",
//         "typology" => "food",
//         "category" => "dogs"
//       ]
//     ],
//     "toy" => [
//       (object) [
//         "name" => "crocsMaki",
//         "price" => "20",
//         "icon" => "iconaGatto",
//         "img" => "toyCats.jpg",
//         "typology" => "toy",
//         "category" => "dogs"
//       ]
//     ],
//     "cuccia" => [
//       (object) [
//         "name" => "crocsMaki",
//         "price" => "20",
//         "icon" => "iconaGatto",
//         "img" => "cucciaCats.jpg",
//         "typology" => "cuccia",
//         "category" => "dogs"
//       ]
//     ]
//   ]
// ];

$products = [];

$dogsIcon = "iconaCane";
$catsIcon = "iconaGatto";


$dogsCategory = new Category("IconaCane");
$catsCategory = new Category("IconaGatto");



$products[] = new Food("Crocchettine Arya", 99, "Immagine", $dogsCategory, "Cibo", 2022);
$products[] = new Toy("Osso Maki", 10, "Immagine", $dogsCategory, "Giochi", "Palla");
$products[] = new Bed("Cuccia Utah", 30, "Immagine", $catsCategory, "Cucce", "XL");
// $products["dogs"]["food"][] = new Food("Crocchette Maki", 20, "Icona", "immagine", "Cibo", "Cani");


// $prodottoNuovo = new Product("Crocchettine Arya", 99, "Immagine", $dogsCategory);

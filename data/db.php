<?php

require_once("./models/category.php");
require_once("./models/products.php");
require_once("./models/typology.php");


$products = [
  "dogs" => [
    "food" => [
      (object) [
        "name" => "crocsMaki",
        "price" => "20",
        "icon" => "iconaCane",
        "img" => "crocsDogs.jpg",
        "typology" => "food",
        "category" => "dogs"
      ]
    ],
    "toy" => [
      (object) [
        "name" => "toyMaki",
        "price" => "12",
        "icon" => "iconaCane",
        "img" => "toyDogs.jpg",
        "typology" => "toy",
        "category" => "dogs"
      ]
    ],
    "cuccia" => [
      (object) [
        "name" => "crocsMaki",
        "price" => "20",
        "icon" => "iconaCane",
        "img" => "cucciaDogs.jpg",
        "typology" => "cuccia",
        "category" => "dogs"
      ]
    ]
  ],
  "cats" => [
    "food" => [
      (object) [
        "name" => "crocsMaki",
        "price" => "20",
        "icon" => "iconaGatto",
        "img" => "crocsCats.jpg",
        "typology" => "food",
        "category" => "dogs"
      ]
    ],
    "toy" => [
      (object) [
        "name" => "crocsMaki",
        "price" => "20",
        "icon" => "iconaGatto",
        "img" => "toyCats.jpg",
        "typology" => "toy",
        "category" => "dogs"
      ]
    ],
    "cuccia" => [
      (object) [
        "name" => "crocsMaki",
        "price" => "20",
        "icon" => "iconaGatto",
        "img" => "cucciaCats.jpg",
        "typology" => "cuccia",
        "category" => "dogs"
      ]
    ]
  ]
];

$dogsIcon = "iconaCane";
$catsIcon = "iconaGatto";






$products["dogs"]["food"][] = new Typology("Crocchettine Arya", 99, "Immagine", "CANI", $dogsIcon, "CIBO");
// $products["dogs"]["food"][] = new Food("Crocchette Maki", 20, "Icona", "immagine", "Cibo", "Cani");

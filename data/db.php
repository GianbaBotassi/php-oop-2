<?php

require_once("./models/category.php");
require_once("./models/products.php");
require_once("./models/food.php");
require_once("./models/bed.php");
require_once("./models/toy.php");


$products = [];

$dogsIcon = "iconaCane";
$catsIcon = "iconaGatto";


$dogsCategory = new Category("<i class='fa-solid fa-dog'></i>");
$catsCategory = new Category("<i class='fa-solid fa-cat'></i>");



$products["dogs"][] = new Food("Crocchettine", 22, "crocsDogs.jpg", $dogsCategory, "Cibo", 2022);
$products["cats"][] = new Food("Carne in scatola", 33, "crocsCats.jpg", $catsCategory, "Cibo", 2025);
$products["dogs"][] = new Toy("Kong", 10, "toyDogs.jpg", $dogsCategory, "Giochi", "Kong");
$products["cats"][] = new Toy("Bastoncino", 5, "toyCats.jpg", $catsCategory, "Giochi", "Bastoncino");
$products["dogs"][] = new Bed("Cuccia", 100, "cucciaDogs.jpg", $dogsCategory, "Cucce", "L");
$products["cats"][] = new Bed("Cuccia", 80, "cucciaCats.jpg", $catsCategory, "Cucce", "XS");
// $products["dogs"]["food"][] = new Food("Crocchette", 20, "Icona", "immagine", "Cibo", "Cani");


// $prodottoNuovo = new Product("Crocchettine Arya", 99, "Immagine", $dogsCategory);

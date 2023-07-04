<?php

require_once("./models/category.php");
require_once("./models/products.php");
require_once("./models/food.php");
require_once("./models/bed.php");
require_once("./models/toy.php");

//creo array vuoto
$products = [];

$dogsIcon = "iconaCane";
$catsIcon = "iconaGatto";

// Set icone per categoria
$dogsCategory = new Category("cane", "<i class='fa-solid fa-dog'></i>");
$catsCategory = new Category("gatto", "<i class='fa-solid fa-cat'></i>");

// Elenco prodotti
$products["dogs"]["food"] = new Food("Crocchettine", 22, "crocsDogs.jpg", $dogsCategory, "Cibo", 2022);
$products["cats"]["food"] = new Food("Carne in scatola", 33, "crocsCats.jpg", $catsCategory, "Cibo", 2025);
$products["dogs"]["toys"] = new Toy("Kong", 10, "toyDogs.jpg", $dogsCategory, "Giochi", "Kong");
$products["cats"]["toys"] = new Toy("Bastoncino", 5, "toyCats.jpg", $catsCategory, "Giochi", "Bastoncino");
$products["dogs"]["bed"] = new Bed("Cuccia", 100, "cucciaDogs.jpg", $dogsCategory, "Cucce", "L");
$products["cats"]["bed"] = new Bed("Cuccia", 80, "cucciaCats.jpg", $catsCategory, "Cucce", "XS");

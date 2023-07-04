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
try {

  $products["food"][] = new Food("Crocche di Maki Buone", 22, "crocsDogs.jpg", $dogsCategory, "Cibo", 2022, "blu");
  $products["food"][] = new Food("Crocche di Maki Buone", 22, "crocsDogs.jpg", $dogsCategory, "Cibo", 2022, "blu");
  $products["food"][] = new Food("Crocche di Maki Buone", 22, "crocsDogs.jpg", $dogsCategory, "Cibo", 2022, "blu");
} catch (Exception $e) {
  echo $e->getMessage();
}
$products["food"][] = new Food("Carne in scatola", 33, "crocsCats.jpg", $catsCategory, "Cibo", 2025, "nero");
$products["food"][] = new Food("Carne in scatola", 33, "crocsCats.jpg", $catsCategory, "Cibo", 2025, "nero");
$products["food"][] = new Food("Carne in scatola", 33, "crocsCats.jpg", $catsCategory, "Cibo", 2025, "nero");
$products["toys"][] = new Toy("Kong", 10, "toyDogs.jpg", $dogsCategory, "Giochi", "Kong", "rosso");
$products["toys"][] = new Toy("Kong", 10, "toyDogs.jpg", $dogsCategory, "Giochi", "Kong", "rosso");
$products["toys"][] = new Toy("Kong", 10, "toyDogs.jpg", $dogsCategory, "Giochi", "Kong", "rosso");
$products["toys"][] = new Toy("Bastoncino", 5, "toyCats.jpg", $catsCategory, "Giochi", "Bastoncino", "multicolore");
$products["toys"][] = new Toy("Bastoncino", 5, "toyCats.jpg", $catsCategory, "Giochi", "Bastoncino", "multicolore");
$products["toys"][] = new Toy("Bastoncino", 5, "toyCats.jpg", $catsCategory, "Giochi", "Bastoncino", "multicolore");
$products["bed"][] = new Bed("Cuccia super power di Maki", 100, "cucciaDogs.jpg", $dogsCategory, "Cucce", "L", "grigio");
$products["bed"][] = new Bed("Cuccia super power di Maki", 100, "cucciaDogs.jpg", $dogsCategory, "Cucce", "L", "grigio");
$products["bed"][] = new Bed("Cuccia super power di Maki", 100, "cucciaDogs.jpg", $dogsCategory, "Cucce", "L", "grigio");
$products["bed"][] = new Bed("Cuccia di Utah", 80, "cucciaCats.jpg", $catsCategory, "Cucce", "XS", "bianco");
$products["bed"][] = new Bed("Cuccia di Utah", 80, "cucciaCats.jpg", $catsCategory, "Cucce", "XS", "bianco");
$products["bed"][] = new Bed("Cuccia di Utah", 80, "cucciaCats.jpg", $catsCategory, "Cucce", "XS", "bianco");

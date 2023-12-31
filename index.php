<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <?php require_once("./data/db.php"); ?>
  <title>ZooBool</title>
</head>

<body>
  <header>
    <div class="container">
      <h1>ZOOBOOL</h1>
    </div>
  </header>

  <div class="container">
    <h2><?php echo $dogsCategory->getIcon() ?> Prodotti Cani</h2>
    <div class="category-container">
      <h3>Cibo</h3>
      <div class="row">
        <?php
        foreach ($products["food"] as $product) {
          if ($product->getCategory()->getCategory() === "cane") {
        ?>
            <div class="slot">
              <h3><?php echo $product->getName() ?></h3>
              <div class="product-image"><img src="./data/img/<?php echo $product->getImg() ?>"></div>
              <div class="price">Prezzo: <span><?php echo $product->getPrice() ?> €</span></div>
              <div class="item-type">Tipologia: <?php echo $product->getItem() ?></div>
              <a href="#" class="button">Aggiungi al carrello</a>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <h3>Cucce</h3>
      <div class="row">
        <?php
        foreach ($products["bed"] as $product) {
          if ($product->getCategory()->getCategory() === "cane") {
        ?>
            <div class="slot">
              <h3><?php echo $product->getName() ?></h3>
              <div class="product-image"><img src="./data/img/<?php echo $product->getImg() ?>"></div>
              <div class="price">Prezzo: <span><?php echo $product->getPrice() ?> €</span></div>
              <div class="item-type">Tipologia: <?php echo $product->getItem() ?></div>
              <a href="#" class="button">Aggiungi al carrello</a>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <h3>Giochi</h3>
      <div class="row">
        <?php
        foreach ($products["toys"] as $product) {
          if ($product->getCategory()->getCategory() === "cane") {
        ?>
            <div class="slot">
              <h3><?php echo $product->getName() ?></h3>
              <div class="product-image"><img src="./data/img/<?php echo $product->getImg() ?>"></div>
              <div class="price">Prezzo: <span><?php echo $product->getPrice() ?> €</span></div>
              <div class="item-type">Tipologia: <?php echo $product->getItem() ?></div>
              <a href="#" class="button">Aggiungi al carrello</a>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
    <h2>Prodotti Gatti</h2>
    <div class="category-container">
      <h3>Cibo</h3>
      <div class="row">
        <?php
        foreach ($products["food"] as $product) {
          if ($product->getCategory()->getCategory() === "gatto") {
        ?>
            <div class="slot">
              <h3><?php echo $product->getName() ?></h3>
              <div class="product-image"><img src="./data/img/<?php echo $product->getImg() ?>"></div>
              <div class="price">Prezzo: <span><?php echo $product->getPrice() ?> €</span></div>
              <div class="item-type">Tipologia: <?php echo $product->getItem() ?></div>
              <a href="#" class="button">Aggiungi al carrello</a>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <h3>Cucce</h3>
      <div class="row">
        <?php
        foreach ($products["bed"] as $product) {
          if ($product->getCategory()->getCategory() === "gatto") {
        ?>
            <div class="slot">
              <h3><?php echo $product->getName() ?></h3>
              <div class="product-image"><img src="./data/img/<?php echo $product->getImg() ?>"></div>
              <div class="price">Prezzo: <span><?php echo $product->getPrice() ?> €</span></div>
              <div class="item-type">Tipologia: <?php echo $product->getItem() ?></div>
              <a href="#" class="button">Aggiungi al carrello</a>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <h3>Giochi</h3>
      <div class="row">
        <?php
        foreach ($products["toys"] as $product) {
          if ($product->getCategory()->getCategory() === "gatto") {
        ?>
            <div class="slot">
              <h3><?php echo $product->getName() ?></h3>
              <div class="product-image"><img src="./data/img/<?php echo $product->getImg() ?>"></div>
              <div class="price">Prezzo: <span><?php echo $product->getPrice() ?> €</span></div>
              <div class="item-type">Tipologia: <?php echo $product->getItem() ?></div>
              <a href="#" class="button">Aggiungi al carrello</a>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>

</body>

</html>


<?php

// var_dump$dogsCategory

echo "<pre>", var_dump($dogsCategory->getCategory()), "</pre>";


//  echo "
// <pre>", var_dump($ciao), "</pre>!";

?>
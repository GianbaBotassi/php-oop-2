<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php require_once("./data/db.php"); ?>
  <link rel="stylesheet" href="style.css">
  <title>ZooBool</title>
</head>

<body>
  <div class="container">
    <h2>Prodotti Cani</h2>
    <div class="row">
      <?php
      foreach ($products["dogs"] as $product) {
        echo "<div class='slot'>
                <h3>" . $product->getName() . "</h3>
                <div><img src='./data/img/" . $product->getImg() . "'></div>
                <div>Prezzo: " . $product->getPrice() . " €</div>
                <div>Tipologia: " . $product->getItem() . "</div>
              </div>";
      }
      ?>
    </div>
    <h2>Prodotti Gatti</h2>
    <div class="row">
      <?php
      foreach ($products["cats"] as $product) {
        echo "<div class='slot'>
                <h3>" . $product->getName() . "</h3>
                <div><img src='./data/img/" . $product->getImg() . "'></div>
                <div>Prezzo: " . $product->getPrice() . " €</div>
                <div>Tipologia: " . $product->getItem() . "</div>
              </div>";
      }
      ?>
    </div>

  </div>
</body>

</html>

<?php



// echo "<pre>", var_dump($products["dogs"]), "</pre>!";

//  echo "
// <pre>", var_dump($ciao), "</pre>!";

?>
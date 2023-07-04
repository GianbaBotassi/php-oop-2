<?php

require_once("color.php");
class Product
{

  use Colorable;

  private $name;
  private $price;
  private $img;
  private Category $category;

  public function __construct($name, $price, $img, Category $category, $color)
  {

    $this->setName($name);
    $this->setPrice($price);
    $this->setImg($img);
    $this->setCategory($category);
    $this->setColor($color);
  }


  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    if ($price < 0) {
      throw new Exception("Prezzo non può essere negativo");
    }
    $this->price = $price;
  }
  public function getImg()
  {
    return $this->img;
  }

  public function setImg($img)
  {
    $this->img = $img;
  }
  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }
}

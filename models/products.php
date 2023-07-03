<?php

class Product extends Category
{

  private $name;
  private $price;
  private $img;

  public function __construct($name, $price, $img, $category, $icon)
  {

    parent::__construct($category, $icon);

    $this->name = $name;
    $this->price = $price;
    $this->img = $img;
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
}

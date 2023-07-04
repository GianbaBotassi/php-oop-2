<?php

class Product
{

  private $name;
  private $price;
  private $img;
  private Category $category;

  public function __construct($name, $price, $img, Category $category)
  {

    $this->setName($name);
    $this->setPrice($price);
    $this->setImg($img);
    $this->setCategory($category);
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
  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }
}

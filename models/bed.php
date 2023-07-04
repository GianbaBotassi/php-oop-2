<?php

class Bed extends Product
{

  private $item;
  private $size;

  public function __construct($name, $price, $img, $icon, $item, $size, $color)
  {

    parent::__construct($name, $price, $img, $icon, $color);

    $this->item = $item;
    $this->size = $size;
  }


  public function getItem()
  {
    return $this->item;
  }

  public function setItem($item)
  {
    $this->item = $item;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }
};

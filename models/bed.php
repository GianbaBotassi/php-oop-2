<?php

class Bed extends Product
{

  private $item;
  private $size;

  public function __construct($name, $price, $img, $icon, $item, $size)
  {

    parent::__construct($name, $price, $img, $icon);

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

<?php

class Toy extends Product
{

  private $item;
  private $typology;

  public function __construct($name, $price, $img, $icon, $item, $typology, $color)
  {

    parent::__construct($name, $price, $img, $icon, $color);

    $this->item = $item;
    $this->typology = $typology;
  }


  public function getItem()
  {
    return $this->item;
  }

  public function setItem($item)
  {
    $this->item = $item;
  }

  public function getTypology()
  {
    return $this->typology;
  }

  public function setTypology($typology)
  {
    $this->typology = $typology;
  }
};

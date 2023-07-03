<?php

class Typology extends Product
{

  private $typology;

  public function __construct($name, $price, $img, $category, $icon, $typology)
  {

    parent::__construct($name, $price, $img, $category, $icon);

    $this->typology = $typology;
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

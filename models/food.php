<?php

class Food extends Product
{

  private $item;
  private $expirDate;

  public function __construct($name, $price, $img, $icon, $item, $expirDate)
  {

    parent::__construct($name, $price, $img, $icon);

    $this->item = $item;
    $this->expirDate = $expirDate;
  }


  public function getItem()
  {
    return $this->item;
  }

  public function setItem($item)
  {
    $this->item = $item;
  }

  public function getExpirDate()
  {
    return $this->expirDate;
  }

  public function setExpirDate($expirDate)
  {
    $this->expirDate = $expirDate;
  }
};

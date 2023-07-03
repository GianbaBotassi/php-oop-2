<?php

class Category
{

  private $icon;

  public function __construct($icon)
  {
    $this->icon = $icon;
  }

  public function getIcon()
  {
    return $this->icon;
  }

  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
}

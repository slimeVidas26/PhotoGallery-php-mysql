<?php

abstract class View {

  protected $title = "photogallerybis";
  protected $css = [];
  protected $js = [];

  function __construct($title=NULL) {
    if($title) {
      $this->title = $title;
    }
  }

  function addJs($fileName) {
    $this->js[] = $fileName;
  }

  function addCss($fileName) {
    $this->css[] = $fileName;
  }
  

  abstract function dump();
  

}



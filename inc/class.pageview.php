<?php

class PageView extends View {
  private $component = NULL;
  private $data = NULL;
  
  function __construct($title=NULL) {
    parent::__construct($title);
  }

  function setComponent($component,$data=NULL) {
    $this->component = $component;
    if($data) {
      $this->data = $data;
    }
  }

  function dump() {
    
    require "components/htmltop.php";
    require 'components/'.$this->component;
    require "components/htmlbottom.php";
  }
}


<?php


require "inc/common.php";

$route = empty($_GET['route']) ? [] : explode('/',$_GET['route']);

if(count($route)==2 && $route[0]='img') {
  $a = new assetsManager();
  $a->imageLoader($route[1]);
}
else {
  $a = new assetsManager();
  $a->checkUpload();
}



/****************************************************************************************************
 *                                 DUMP IMAGE FUNCTION                                                                               *
 ****************************************************************************************************/

function dumpImage($file,$mime) {
  $contents = file_get_contents($file);
  header("Content-type: {$mime}");
  echo $contents;
}

/****************************************************************************************************
 *                                 ROUTING                                                                               *
 ****************************************************************************************************/

$p = new Page();

if(empty($route[0])) { 
  $p->main();
}
else {
  switch($route[0]) {
    case 'login':
      $p->doLogin();
      break;
    case 'register':
      $p->doRegister();
      break;
    case 'logout':
      $p->logout();
      break;
	  case 'upload':
      $p->upload();
      break;
	  case 'delete':
      $p->doDelete();
      break;
    default:
      $p->main($route[0]);
  }
}

// echo '<pre>';
// echo '<p>Route</p>';
// print_r($route);
// echo '<p>POST</p>';
// print_r($_POST);
// echo '<p>GET</p>';
// print_r($_GET);
// echo '</pre>';
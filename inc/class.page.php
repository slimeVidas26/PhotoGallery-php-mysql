<?php

class Page {
/****************************************************************************************************
 *                                 MAIN FUNCTION                                                                               *
 ****************************************************************************************************/
  function main($statusCode=NULL) {
    $data = [
      'logged' => session::logged()
    ];
    if($statusCode) {
      $data['error'] = $this->strError($statusCode);
    }
    if($data['logged']) {
      $p = new PageView();
      $p->setComponent("logged.php",$data);
      $p->addCss('gallery.css','style.css');
      $p->addJs('logged.js');
      $p->dump();
    }
    else {
      $p = new PageView();
      $p->addCss('gallery.css','style.css');
      $p->addJs('notlogged.js');
       $p->setComponent("notlogged.php",$data);
      $p->dump();
    }
  }
/****************************************************************************************************
 *                                 DO LOGIN FUNCTION                                                                               *
 ****************************************************************************************************/
  function doLogin() {
    $notice = '';
    if(!session::logged()) {
      if(count($_POST)==0 || empty($_POST['username']) || empty($_POST['password'])) {
        $notice = '/1';
      }
      else {
        $um = new usersModel();
        $u = $um->getUserByName($_POST['username']);
        if(empty($u)) {
          $notice = '/2';
        }
        else if(!password_verify($_POST['password'], $u['hash'])) {
          $notice = '/3';
        }
        else {
          session::setLogged([
            'id' => $u['id'],
            'uname' => $u['username']
          ]);
        }
      }
    }
    header("location: /photogallerybis{$notice}");
  }
  /****************************************************************************************************
 *                                 DO REGISTER FUNCTION                                                                               *
 ****************************************************************************************************/

  function doRegister() {
    $notice = '';
    if(!session::logged()) {
      if(count($_POST)==0 || empty($_POST['username']) || empty($_POST['password'])) {
        $notice = '/1';
      }
      else {
        $um = new usersModel();
        $u = $um->getUserByName($_POST['username']);
        if(!empty($u)) {
          $notice = '/4';
        }
        else {
          $ph = new PasswordHash();
          $hash = $ph->getHash($_POST['password']);
          $um->addUser($_POST['username'],$hash);
          $notice = '/5';
        }
      }
    }
    header("location: /photogallerybis{$notice}");
  }
/****************************************************************************************************
 *                                 LOGOUT FUNCTION                                                                               *
 ****************************************************************************************************/
  function logout() {
    session::logout();
    header("location: /photogallerybis");
  }

 /****************************************************************************************************
 *                                 ERRORS FUNCTION                                                                               *
 ****************************************************************************************************/ 
  private function strError($errCode) {
    switch ($errCode) {
      case '1' :
        return "Missing Details";
      break;
      case '2' :
        return "Unknown User";
      break;
      case '3' :
        return "Invalid Login";
      break;
      case '4' :
        return "User Exists";
      break;
      case '5' :
        return "User Created! You may now Log In.";
      break;
      default:
        return "Error Occured";
    }    
  }


}
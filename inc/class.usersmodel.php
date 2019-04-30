<?php

class UsersModel {

  function __construct() {
    $instance = ConnectDb::getInstance();
    $this->conn = $instance->getConnection();
  }
/****************************************************************************************************
 *                                 ADD IMAGE FUNCTION                                                                              *
 ****************************************************************************************************/
  function addImage($name,$user) {
    $sql =<<<SQL
INSERT INTO images (name,user_id)
VALUES (:name, :user_id)
SQL;
   
    try {
        $stmnt = $this->conn->prepare($sql);
        $params = [
            'name' => $name,
            'user_id' => $user
        ];
        $stmnt->execute($params);
        return $this->conn->lastInsertId();
    }
    Catch (PDOException $e) {
      $e = new ErrorView([
        'message' => $e->getMessage(),
        'code' => $e->getCode()
      ]);
    }
  }

  /****************************************************************************************************
 *                                 GET USER BY NAME FUNCTION                                                                               *
 ****************************************************************************************************/
  function getUserByName($username) {
    $sql = "select * from users where username = :username";
    try {
        $stmnt = $this->conn->prepare($sql);
        $params = [
            'username' => $username
        ];
        $stmnt->execute($params);
        return $stmnt->fetch();
    }
    Catch (PDOException $e) {
      $e = new ErrorView([
        'message' => $e->getMessage(),
        'code' => $e->getCode()
      ]);
    }
  } 

 /****************************************************************************************************
 *                                 GET USER IMAGES FUNCTION                                                                               *
 ****************************************************************************************************/ 
  
  function getUserImages($user_id) {

    
    $sql = "select name from images where user_id = :user_id";
    try {
        $stmnt = $this->conn->prepare($sql);
        $params = [
            'user_id' => $user_id
        ];
        $stmnt->execute($params);

      while ($row = $stmnt->fetch()) {
        echo <<<HTM
        
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                      <img src="img/{$row['name']}" class="img-responsive">
                  </div>
                               
HTM;
     
      }
     
    }
    
    Catch (PDOException $e) {
      $e = new ErrorView([
        'message' => $e->getMessage(),
        'code' => $e->getCode()
      ]);
    }
  } 


/****************************************************************************************************
 *                                 ADD USER FUNCTION                                                                               *
 ****************************************************************************************************/

  function addUser($username,$hash) {
    $sql =<<<SQL
INSERT INTO users (username,hash)
VALUES (:username, :hash)
SQL;
    try {
        $stmnt = $this->conn->prepare($sql);
        $params = [
            'username' => $username,
            'hash' => $hash
        ];
        $stmnt->execute($params);
        return $this->conn->lastInsertId();
    }
    Catch (PDOException $e) {
      $e = new ErrorView([
        'message' => $e->getMessage(),
        'code' => $e->getCode()
      ]);
    }
  }  
}
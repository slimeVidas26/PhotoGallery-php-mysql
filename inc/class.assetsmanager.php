<?php

class AssetsManager {


  function __construct() {
    $instance = ConnectDb::getInstance();
    $this->conn = $instance->getConnection();
  }

  /****************************************************************************************************
 *                                 RANDOM IMAGE FUNCTION                                            *                                   *
 ****************************************************************************************************/

function random_image($directory)
{
    if(empty($directory) or !is_dir($directory))
    {
        die('Directory: ' . $directory . ' not found.');
    }
    
    $files = scandir($directory, 1);
    
    $make_array = array();
    
    foreach($files AS $id => $file)
    {
        $info = pathinfo(UPLOAD_DIR . $file);
        //print_r($info);
    
        $image_extensions = array('jpg', 'jpeg', 'gif', 'png');
        if(!in_array($info['extension'], $image_extensions))
        {
            unset($file);
        }
        else
        {
            $file = str_replace(' ', '%20', $file);
            $temp = array($id => $file);
            array_push($make_array, $temp);
        }
    }
    
    if(sizeof($make_array) == 0)
    {
        die('No images in ' . $directory . ' Directory');
    }
    
    $total = count($make_array) - 1;
     
    $random_image = rand(0, $total);
    return $make_array[$random_image][$random_image];

}

  
/****************************************************************************************************
 *                                 IMAGE LOADER FUNCTION                                                                               *
 ****************************************************************************************************/
  function imageLoader($fn) {
    $file = UPLOAD_PATH.$fn;
    if (file_exists($file)) {
       switch(pathinfo($file,PATHINFO_EXTENSION)) {
           case 'jpg':
           case 'jpeg':
             $mime = 'image/jpeg';
             break;
           case 'png':
             $mime = 'image/png';
             break;
           case 'gif':
               $mime = 'image/gif';
               break;
           default:
               $mime = NULL;
       }
       if(!$mime) {
           //echo "no mime";
           header("HTTP/1.0 404 Not Found");
       }
       else {
          //echo "$mime";
          dumpImage($file,$mime);
       }
    }
    else {
       //echo "404";
       header("HTTP/1.0 404 Not Found");
    }
  }

/****************************************************************************************************
 *                                 CHECK UPLOAD FUNCTION                                                                               *
 ****************************************************************************************************/

  function checkUpload() {
    $uploaded = NULL;
    if(!empty($_FILES) && !empty($_FILES['img'])) {
      try {
        $f =& $_FILES['img'];
        $uploaded['debug'] =& $f;
        if($f['error']!=0) {
          throw new RuntimeException(errorStr($f['error']));
        }
        if($f['size']>10000000) {
          throw new RuntimeException('File too big');
        }
        $ext = pathinfo($f['name'],PATHINFO_EXTENSION);
        if(!in_array($ext,['jpg','png','jpeg','gif'])) {
          throw new RuntimeException("Invalid file type {$ext}");
        }
        // all good if got here
        $filename = 'isaac' . time() . '.' . $ext;
        rename($f['tmp_name'],UPLOAD_DIR.$filename);
        $uploaded['result'] = "Uploaded as {$filename}";
  
        //insert in db
        $um = new usersModel();
        $um->addImage($filename,$_SESSION['logged']['id']);

      }
      catch(RuntimeException $e) {
        $uploaded['result'] = 'Error: '.$e->getMessage();
      }
    }
    
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
 *                                 ERRORS FUNCTION                                                                               *
 ****************************************************************************************************/

  function errorStr($code) {
    switch($code) {
      case 1: return 'The uploaded file exceeds the upload_max_filesize directive in php.ini'; break;
      case 2: return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form'; break;
      case 3: return 'The uploaded file was only partially uploaded'; break;
      case 4: return 'No file was uploaded'; break;
      case 6: return 'Missing a temporary folder'; break;
      case 7: return 'Failed to write file to disk.'; break;
      case 8: return 'A PHP extension stopped the file upload.'; break;
      default: return "Unknown error occured {$code}";
    }
  } 
}  


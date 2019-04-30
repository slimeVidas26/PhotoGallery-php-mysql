<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
    $t = time();
    for($i=0;$i<count($this->css);$i++) {
      echo "<link rel=\"stylesheet\" href=\"css/{$this->css[$i]}?i={$t}\">";
    }
?>
</head>
<body>
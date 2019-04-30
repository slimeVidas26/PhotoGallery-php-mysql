<?php
    
    $t = time();
    for($i=0;$i<count($this->js);$i++) {
      echo "<script src='js/{$this->js[$i]}'></script>";
    }
?>
</body>
</html>
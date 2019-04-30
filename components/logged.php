<section class="container">
<?php //echo '<pre>';
      //print_r($_FILES) ;
      //echo '</pre>'
?>
    <div class="row">
    
            <div class="col-md-6">
                <h3><a href="index.php">Upload Image</a></h3>
                <form enctype="multipart/form-data" action="index.php" method="post" name="theform">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Select Image" name="img" value="">
                    </div>
                    <button type="submit" class="btn btn-default" name="upload">Upload</button>
                </form>

                <?php
if(isset($uploaded)) {
    echo '<div style="margin-top:30px;overflow:auto;"><pre>';
    echo '<h3>Result</h3>';
    echo "<p>{$uploaded['result']}</p>";
    echo '<h3>Debug</h3>';
    print_r($uploaded['debug']);
    echo '</pre></div> ';
}
?>
                </div>
                <div class="col-md-6">
            <h4>Logged: <?php echo $this->data['logged']['uname']?></h4>
            <h3>User id <?php echo $this->data['logged']['id']?></h3>
            <p><a href="logout">Logout</a></p>
            <p><a href="/photogallerybis">refresh</a></p>
        </div>

 
    </div>

     <div class="row">
        <div class="gallery  col-md-12">
        </div>
      
        
            </div>
            <div class=" col-md-12">
            <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">User Images</button>
          
        </div>
                <div id="imgctr">
<?php 
$um = new usersModel();
$um->getUserImages($_SESSION['logged']['id']); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
      document.forms[0].onsubmit = function() {
          if(document.forms[0].elements.img.value=='')
            return false;
      }
    </script>
               

            </div>
       
       
 ?>
        <br/>
        </div>

 
</section>


           
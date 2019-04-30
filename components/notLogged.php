<section class="container">
    <div class="row">
        <div class="md-col-12">
            <h4><a href="/photogallerybis">User Details</a></h4>
            <form action="#" method="post" name="theform">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Name" name="username" value="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Password" name="password" value="">
            </div>
            <button type="button" class="btn btn-default" name="login">Login</button>
            <button type="button" class="btn btn-default" name="register">Register</button>
            </form>       
    </div>
    
<?php
if(isset($this->data['error'])) {
    echo "<p id='loginerr' class='text-danger'>{$this->data['error']}</p>";
}
else {
    echo "<p id='loginerr' class='hide'></p>";
}
?>

        </div>
    </div>

    <div class="row">
        <div class="gallery  col-md-12">
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">User Images</button>
          
        </div>
        <?php
$a = new AssetsManager();
$randomSize = rand(2,30);
for($i=0;$i<$randomSize;$i++){
    $image[$i] = $a->random_image(UPLOAD_DIR);
         
          echo <<<HTM
                   <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                                 <img src="img/{$image[$i]}" class="img-responsive">
                             </div>  
                                                       
HTM;
      }

 ?>
        <br/>
        </div>
</section>

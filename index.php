<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.jpg" />
        <title>Boss-Ozoku</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1  style="font-family:'Lemon/Milk'">Yorokobe!</h1>
                       <p  style="font-family:'Lemon/Milk'">Boss Ozoku is open arms in selling UNOFFICIAL KSon Merch!~</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/cNBQRfDwVE6peSL_800x.jpg" alt="Acrylics">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize" style="font-family:'Lemon/Milk'">Acrylic</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/aa5Rt6ayztXsUFb_800x.jpg" alt="Shirts">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize" style="font-family:'Lemon/Milk'">Shirts</p>
                                    <p>KSON Shirts.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/hHkr7cGhnYMyhs4_800x.jpg" alt="Etc.">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize" style="font-family:'Lemon/Milk'">Etc.</p>
                                   <p>Find other exclusive KSON merch</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer" style="font-family:'Lemon/Milk'"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://virtualyoutuber.fandom.com/wiki/Virtual_YouTuber_Wiki">Boss-Ozoku</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by John Allendrea Enciso</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
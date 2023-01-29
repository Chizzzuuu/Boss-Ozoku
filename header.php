<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand"  style="font-family:'Lemon/Milk'">Boss-Ozoku</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"  style="font-family:'Lemon/Milk'"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"  style="font-family:'Lemon/Milk'"></span> Account Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"  style="font-family:'Lemon/Milk'"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"  style="font-family:'Lemon/Milk'"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"  style="font-family:'Lemon/Milk'"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>
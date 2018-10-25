<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ward GG!</title>
    
        <!-- Site Info -->
        <meta name="author" content="Brady Palmer, Maxwell Rubey, Ralph Babunga"/>
    
        <!-- Meta Data -->
    
        <meta charset="utf-8"/>
        <meta name="description" content="An E-sports based website built from scratch by students for COSC 473"/>
        <meta name="keywords" content="Street Fighter V, SFV, FGC, Fighting Game Community, SMITE, League of Legends, MOBA, LoL, BattleGround of the Gods"/> 
    
        <!-- Viewport for site, use as standard to promote mobile  adaptability-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Slick Carousel library -->
        <!-- Stylesheet/Framework import -->
        <link rel="stylesheet" href="css/slick/slick.css"/>
        <link rel="stylesheet" href="css/slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <!-- Icon sheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
     
    </head>
    
<body class="body1">
    
      <!-- Alter padding on all sides, implement bootstrap -->
    <div class="container"> 
        <div class="gamepic"><a href="GamePages/StreetFighter.php"><img class="img-responsive" src="img/Street%20Fighter%20V.jpg" alt="SFV"></a></div>
        
        <div class="gamepic"><a href="GamePages/Smite.php"><img class="img-responsive" src="img/Smite.jpg" alt="SMITE"></a></div>
        
        <div class="gamepic"><a href="GamePages/League.php"><img class="img-responsive" src="img/League%20of%20Legends.jpg" alt="LoL"></a></div>
        
        <div class="underdev"><a href="GamePages/UnderDevelopment.html"><img class="img-responsive" src="img/Overwatch.jpg" alt="Overwatch"></a></div>
        
        <div class="underdev"><a href="GamePages/UnderDevelopment.html"><img class="img-responsive" src="img/Counter-Strike_%20Global%20Offensive.jpg" alt="CSGO"></a></div>       
    </div>
    
    <!-- Begin the footers using Bootstrap -->
    <div class="WardImage text-center">
        
        <!-- Fix image splitting -->
        <img src="img/Ward.png">
    
    </div>
    <div class="LOGO text-center">
    
        <p class="WardLogo text-center">Ward GG</p>
    
       <?php
    if(isset($_SESSION['u_id']) || isset($_SESSION['a_id'])) {
        
        
        echo '<a href="GamePages/login/logout.inc.php">Logout</a>';
    } else {
        echo ' <a href="GamePages/login/login.php">Login/Register</a>';
    }
        ?>
    </div>
    
    <!-- page footer -->
<footer class="page-footer">
    
   <div>
    <!-- Footer class finish later -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item"><a href="https://www.reddit.com/r/Esports" target="_blank" class="fa fa-reddit"></a></li>
        <li class="list-inline-item"><a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a></li>
        <li class="list-inline-item"><a href="https://www.youtube.com" target="_blank" class="fa fa-youtube"></a></li>
    </ul>
    </div>
    <div class="footer-copyright text-center">© 2018 Copyright:<a href="https://www.iup.edu"> IUP.EDU</a>
    
    </div>
    
       
    </footer>
    
   <!-- Jquery CDN, redo code to use jquery localized in files -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
    
    <!--Scripts for Slick to functionally work -->
    
    <script type="text/javascript">
    $(document).ready(function(){
      $('.container').slick({
        <!-- setting-name: setting-value; --> 
          arrows: false,
          adaptiveHeight: true,
          adaptiveWidth: true
      });
    });
  </script>
    
    <!-- Slick carousel for 3 images in an infinite loop -->
   <script type="text/javascript"> 
    $('.container').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
    </script>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
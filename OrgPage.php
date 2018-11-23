
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
        <link rel="stylesheet" href="css/OrgPage.css"/>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <!-- Icon sheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
     
    </head>
    
<body class="body1">
<div class="Navigation">
    <?php include 'SideNavigation2.php'; ?>
    </div>
    
      <!-- Alter padding on all sides, implement bootstrap -->
    <div class="container"> 
        
        <div class="gamepic"><a href="TeamPages/100Thieves.php"><img class="img-responsive" src="img/TeamLogos(LoL)/100Thieves.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Cloud9.php"><img class="img-responsive" src="img/TeamLogos(LOL)/Cloud9.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/ClutchGaming.php"><img class="img-responsive" src="img/TeamLogos(LOL)/ClutchGaming.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/CounterLogic.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/CounterLogic.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Dignitas.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/TeamDignitas.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/EchoFox.php"><img class="img-responsive" src="img/TeamLogos(LOL)/Echo_Fox.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Eunited.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/EUnited.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/FlyQuest.php"><img class="img-responsive" src="img/TeamLogos(LOL)/FlyQuest.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/GoldenGuardians.php"><img class="img-responsive" src="img/TeamLogos(LOL)/GoldenGuardians.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Luminosity.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/Luminosity.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Mousesports.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/Mousesports.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/NRG.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/NRGEsports.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Obey.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/Obey_Alliance.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/OpticGaming.php"><img class="img-responsive" src="img/TeamLogos(LOL)/OpticGaming.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Rival.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/Rival.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/SKGaming.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/SK.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Spacestation.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/SpaceStation.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/TeamLiquid.php"><img class="img-responsive" src="img/TeamLogos(LoL)/TeamLiquid.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/SoloMid.php"><img class="img-responsive" src="img/TeamLogos(LOL)/TeamSoloMid.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Splyce.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/Trifecta.png"></a></div>
        
        <div class="gamepic"><a href="TeamPages/Trifecta.php"><img class="img-responsive" src="img/TeamLogos(SMITE)/Splyce.png"></a></div>

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
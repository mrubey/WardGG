<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Brady Palmer"/>
    <meta name="author" content="Maxwell Rubey"/>
    <meta name="author" content="Ralph Babunga"/>
    <meta charset="utf-8">
    
    <!-- Add to other pages -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device width, initial-scale = 1">
    
    <!-- Stlyesheets -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="tableStyle.css">
    
    <!-- Slick stylesheet -->
    <link rel="stylesheet" href="../css/slick/slick.css">
    <link rel="stylesheet" href="../css/slick/slick-theme.css"/>
    
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    
    
    
    </head>
    
    
<body class="body1">
    
    <div class="jumbotron text-center" style="background-image: url(../img/LoL/Ryze.png)">
        <img src="../GameLogos/LeagueLogo.png">
    </div>
    
    
    
    <div class="Navigation">
    <?php include 'SideNavigation.php'; ?>
    </div>
    
    <!-- League of Legends NA LCS Teams -->
    <div class="container team-logos" style="background-color: #303030">
        <img class="gamepic" src="../img/TeamLogos(LoL)/100Thieves.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/Cloud9.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/ClutchGaming.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/CounterLogic.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/Echo_Fox.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/FlyQuest.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/GoldenGuardians.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/TeamSoloMid.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/OpticGaming.png">
        <img class="gamepic" src="../img/TeamLogos(LoL)/TeamLiquid.png">
    </div>
    
    <!-- Team logo carousel 
    <div class="container text-center">
        <h style="color: aqua" >Team Logos</h>
    </div> -->

    <!-- Page content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p class="text-center" style="color: white">Left Column Test</p>
                
                <a class="twitter-timeline" href="https://twitter.com/riotgames?ref_src=twsrc%5Etfw" data-tweet-limit="5">Tweets by riotgames</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        
            <div class="col-sm-6">
                <p class="text-center" style="color: white">Middle Column test</p>
    <table id="standings">
    <tr>
        <th>Position</th>
        <th>Team</th>
        <th>Wins</th>
        <th>Losses</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "wardgg");
    if($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }
    $sql = "SELECT Position, Team, Wins, Losses FROM lcsStandings";
    $result = $conn-> query($sql);
    
    if($result-> num_rows >0) {
        while($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["Position"] ."</td><td>". $row["Team"] ."</td><td>". $row["Wins"] ."</td><td>". $row["Losses"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }
    $conn-> close();
    ?>
            </div>

            <div class="col-sm-3">
                <p class="text-center" style="color: white">Right column test</p>
            <?php 
    include_once 'twitchLeague.php';
?>
            </div>
        </div>
    </div>
    
    <!-- This is the twitter feed.
    <div class="container">
        
                <a class="twitter-timeline" href="https://twitter.com/riotgames?ref_src=twsrc%5Etfw">Tweets by riotgames</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>    
    </div> --> 
      
  <div class="LOGO text-center">
    
        <p class="WardLogo text-center"><span style="color: white"><a href="../index.html">Ward GG</a></span></p>
    
    </div>
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
    
    <!-- Jquery CDN, redo code to use jquery localized in files. THIS IS FOR SLICK. -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../css/slick/slick.min.js"></script>
    
    
    <!--Scripts for Slick to functionally work -->
    
    <script type="text/javascript">
    $(document).ready(function(){
      $('.team-logos').slick({
        <!-- setting-name: setting-value; --> 
          arrows: true,
          adaptiveHeight: true,
          adaptiveWidth: true
      });
    });
  </script>
    
    <!-- Slick carousel for 3 images in an infinite loop -->
   <script type="text/javascript"> 
    $('.team-logos').slick({
  infinite: true,
  slidesToShow: 10,
  slidesToScroll: 10
});
    </script>
    

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
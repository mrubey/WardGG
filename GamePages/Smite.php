<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
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
    
    <div class="jumbotron text-center" style="background-image: url(../img/SMITE/Bellona.png)">
        <img src="../GameLogos/SmiteLogo.png">
             </div>
    <div class="Navigation">
    <?php include 'SideNavigation.php'; ?>
    </div>
    <div class="container team-logos" style="background-color: black">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/CounterLogic.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/EUnited.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/Luminosity.png">
        <a href="../TeamPages/Spacestation.php"><img class="gamepic" src="../img/TeamLogos(SMITE)/SpaceStation.png"></a>
        <a href="../TeamPages/Spacestation.php"><img class="gamepic" src="../img/TeamLogos(SMITE)/Splyce.png"></a>
        <img class="gamepic" src="../img/TeamLogos(SMITE)/Trifecta.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/Dignitas.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/Mousesports.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/NRG.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/Obey_Alliance.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/TeamRival.png">
        <img class="gamepic" src="../img/TeamLogos(SMITE)/SKGaming.png">
    </div>
    
    <!-- <div class="container">
        
 <a class="twitter-timeline" href="https://twitter.com/SmitePro?ref_src=twsrc%5Etfw" data-tweet-limit="5">Tweets by SmitePro</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>    
    </div> -->
    
    
    <!-- Page content -->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p class="text-center" style="color: white"> Left Column</p>
                <a class="twitter-timeline" href="https://twitter.com/SmitePro?ref_src=twsrc%5Etfw" data-tweet-limit="3">Tweets by SmitePro</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-sm-6">
                <p class="text-center" style="color: white"> Mid Column</p>
    <h1 id="standingsTitle" align="center">Smite SPL NA Standings</h1>
    <table id="standings" align = "center">
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
    $sql = "SELECT Position, Team, Wins, Losses FROM splNaStandings";
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
    <br>
    <br>
    <h1 id="standingsTitle" align="center">Smite SPL EU Standings</h1>
    <table id="standings" align = "center">
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
    $sql = "SELECT Position, Team, Wins, Losses FROM spleustandings";
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
                <h1 class="text-center" style="color:white"> Right column</h1>
                <?php 
    include_once 'twitch.php';
?>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
  <div class="LOGO text-center">
    
        <p class="WardLogo text-center"><span style="color: white">Ward GG</span></p>
    
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
  slidesToShow: 8,
  slidesToScroll: 1
})
    </script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
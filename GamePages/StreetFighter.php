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
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
   
    
    
    
    </head>
    
    
<body class="body1">
    
    <div class="jumbotron text-center SFVHead">
        <img src="../GameLogos/StreetFighterVLogo.png">
    </div>
    <div class="Navigation">
    <?php include 'SideNavigation.php'; ?>
    </div>
    
    <div class="container">
        <div class=row>
            <div class="col-sm-3">
            <p style="color: white">Left Column</p>
                <a class="twitter-timeline" href="https://twitter.com/StreetFighter?ref_src=twsrc%5Etfw" data-tweet-limit="5">Tweets by StreetFighter</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-sm-6 text-center">
            <p style="color:white"> Mid Column</p>
                <table id="SFTable" style="color:white">
    <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Team</th>
        <th>Current Score</th>
        <th>Tournaments</th>
        <th>Country</th>
        <th>Lifetime Score</th>
        <th>Lifetime Tournaments</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "wardgg");
    if($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }
    $sql = "SELECT * FROM streetfighterstandings LIMIT 25";
    $result = $conn-> query($sql);
    
    if($result-> num_rows >0) {
        while($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["Rank"] ."</td><td>". $row["Name"] ."</td><td>". $row["Team"] ."</td><td>". $row["CurrentScore"]. "</td><td>". $row["Tournaments"]. "</td><td>". $row["Country"]. "</td><td>". $row["LifetimeScore"]. "</td><td>". $row["LifeTournaments"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }
    $conn-> close();
    ?>
            </div>
            <div class="col-sm-3 text-center">
            <p style="color: white"> Right Column</p>
<?php 
    include_once 'twitchSF.php';
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

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
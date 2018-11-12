<?php
if (isset($_POST['submit'])) {
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "wardgg";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $position = $_POST['euPosition'];
    $team = $_POST['team'];
    $wins = $_POST['wins'];
    $losses = $_POST['losses'];

    $update = "UPDATE spleustandings SET Team = '$team', Wins = '$wins', Losses = '$losses' WHERE Position = '$position';";
    $results=mysqli_query($conn, $update);
    header("Location: ../Smite.php");
    exit();

}   
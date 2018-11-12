<link rel="stylesheet" href="../css/TeamPages.css">
<h1 id="standingsTitle" align="center">Spacestation Gaming</h1>
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
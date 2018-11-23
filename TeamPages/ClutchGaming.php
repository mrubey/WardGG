<link rel="stylesheet" href="../css/TeamPageStyle.css">
<h1 id="standingsTitle" align="center">Clutch Gaming</h1>
<h2 id="gameTitle" align="center">League of Legends Team</h2>
    <table id="standings" align = "center">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Screen Name</th>
        <th>Position</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "wardgg");
    if($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
    }
    $sql = "SELECT First, Last, Screen, Position FROM lcsplayerlist WHERE Team='Clutch Gaming'";
    $result = $conn-> query($sql);
    
    if($result-> num_rows >0) {
        while($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["First"] ."</td><td>". $row["Last"] ."</td><td>". $row["Screen"] ."</td><td>". $row["Position"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }
    $conn-> close();
    ?>
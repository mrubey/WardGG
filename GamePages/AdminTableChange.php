<body>
<?php 
    session_start();
   if(isset($_SESSION['a_id'])) {
       ?>
<h1 id="tableChangeTitle">Standings Table Changes!</h1>
<h2>Pick which standings to change</h2>
<form class="TableSelected" action="" method="POST">
<select name="table">
  <option> Choose One!</option>
  <option value="SmiteNA">Smite NA</option>
  <option value="SmiteEU">Smite EU</option>
  <option value="League">League of Legends</option>
</select>
<input type="submit" name="submit" value="Pick this league" />
    </form>
<?php
    $tableSelected = $_POST['table'];
if($tableSelected === 'SmiteNA') {
    echo '<form class="standingsChange" action="../GamePages/tableChanges/naTableChange.inc.php" method="POST">
        <select name="naPosition">
        <option> Choose A Standings Position to change</option>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="4"> 4</option>
        <option value="5"> 5</option>
        <option value="6"> 6</option>
        </select>
        <br>
        <br>
        <input type="text" name="team" placeholder="Team Name" />
        <input type="text" name="wins" placeholder="Wins" />
        <input type="text" name="losses" placeholder="Losses" />
        <input type="submit" name="submit" value="Change these standings" />
        </form>';
} elseif($tableSelected === 'SmiteEU') {
     echo '<form class="standingsChange" action="../GamePages/tableChanges/euTableChange.inc.php" method="POST">
        <select name="euPosition">
        <option> Choose A Standings Position to change</option>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="4"> 4</option>
        <option value="5"> 5</option>
        <option value="6"> 6</option>
        </select>
        <br>
        <br>
        <input type="text" name="team" placeholder="Team Name" />
        <input type="text" name="wins" placeholder="Wins" />
        <input type="text" name="losses" placeholder="Losses" />
        <input type="submit" name="submit" value="Change these standings" />
        </form>';
} elseif($tableSelected === 'League') {
     echo '<form class="standingsChange" action="../GamePages/tableChanges/lcsTableChange.inc.php" method="POST">
        <select name="lcsPosition">
        <option> Choose A Standings Position to change</option>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="4"> 4</option>
        <option value="5"> 5</option>
        <option value="6"> 6</option>
        <option value="7"> 7</option>
        <option value="8"> 8</option>
        <option value="9"> 9</option>
        <option value="10"> 10</option>
        </select>
        </select>
        <br>
        <br>
        <input type="text" name="team" placeholder="Team Name" />
        <input type="text" name="wins" placeholder="Wins" />
        <input type="text" name="losses" placeholder="Losses" />
        <input type="submit" name="submit" value="Change these standings" />
        </form>';
}
   } else {
      echo '<h1> you are not logged in please go login!!</h1>';
   }
    ?>
</body>
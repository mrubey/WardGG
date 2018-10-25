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
    echo '<select>
        <option> Choose A Team</option>
        <option value="CLG"> Counter Logic Gaming</option>
        <option value="EU"> Eunited</option>
        <option value="LG"> Luminosity Gaming</option>
        <option value="SSG"> Spacestation Gaming</option>
        <option value="SP"> Splyce</option>
        <option value="TF"> Trifecta</option>';
} elseif($tableSelected === 'SmiteEU') {
     echo '<select>
        <option> Choose A Team</option>
        <option value="DIG"> Dignitas</option>
        <option value="ME"> Mousesports</option>
        <option value="NRG"> NRG Esports</option>
        <option value="OA"> Obey Alliance</option>
        <option value="TR"> Team Rival</option>
        <option value="SK"> SK Gaming</option>';
} elseif($tableSelected === 'League') {
     echo '<select>
        <option> Choose A Team</option>
        <option value="100T"> 100 Thieves</option>
        <option value="C9"> Cloud9</option>
        <option value="CG"> Clutch Gaming</option>
        <option value="clg"> Counter Logic Gaming</option>
        <option value="EF"> Echo Fox</option>
        <option value="FQ"> FlyQuest</option>
        <option value="GG"> Golden Guardians</option>
        <option value="OG"> Optic Gaming</option>
        <option value="TL"> Team Liquid</option>
        <option value="TSM"> Team SoloMid</option>';
}
   } else {
      echo '<h1> you are not logged in please go login!!</h1>';
   }
    ?>
</body>
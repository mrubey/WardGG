<?php
    session_start();
?>
<html>
    
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
<style>
    .body{
        font-family: "Lato", sans-serif;
    }
        /* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
               
</style>
    
    </head>
    
    
    
    <body>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="../index.php">Home</a>
    <a href="../GamePages/League.php">League of Legends</a>
     <a href="Rainbow.php">Rainbow 6 Siege</a>
    <a href="SMITE.php">SMITE</a>
    <a href="StreetFighter.php">Street Fighter</a>
    <a href="../OrgPage.php">Orginization Pages</a>
    <a href="../Misc/About.php">About</a>
        <?php
    if(isset($_SESSION['u_id']) || isset($_SESSION['a_id'])) {
        
        
        echo '<a href="../GamePages/login/logout.inc.php">Logout</a>';
    } else {
        echo ' <a href="../GamePages/login/login.php">Login/Register</a>';
    }
    if(isset($_SESSION['a_id'])) {
        echo '<a href="../GamePages/AdminTableChange.php">Change the Standings</a>';
    }
        ?>
    </div>
    
        <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
        
    <script>
        function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
        
        </script>
        </body>




</html>
<?php

session_start();

if (isset($_POST['submit'])) {
    include 'dbh.inc.php';
    
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //Error handlers
    //Check if inputs are empty
    if(empty($uid) || empty($pwd)) {
        header("Location: adminlogin.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM adminusers WHERE admin_uid='$uid' OR admin_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1) {
            header("Location: adminlogin.php?login=error");
            exit(); 
        } else {
           if($row = mysqli_fetch_assoc($result)) {
               //De-hashing the password
               $hashedPwdCheck = password_verify($pwd, $row['admin_pwd']);
               if($hashedPwdCheck == false) {
                    header("Location: adminlogin.php?login=error");
                    exit();   
               } elseif ($hashedPwdCheck == true) {
                   //Log in the user here
                    $_SESSION['a_id'] = $row['admin_id'];
                    $_SESSION['a_first'] = $row['admin_first'];
                    $_SESSION['a_last'] = $row['admin_last'];
                    $_SESSION['a_email'] = $row['admin_email'];
                    $_SESSION['a_uid'] = $row['admin_uid'];
                    header("Location: ../../index.php?adminlogin=success");
                    exit(); 
               }
           } 
        }
    }
} else {
    header("Location: adminlogin.php?login=error");
    exit();
}
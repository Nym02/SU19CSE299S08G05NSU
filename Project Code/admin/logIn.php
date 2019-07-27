<?php

session_start();

if(isset($_POST['submit'])){
    // after click the login button page will connect to tha database

    include 'dbh.inc.php';

    // fetch data from client

    $aid = mysqli_real_escape_string($conn,$_POST['aid']);
    $apass = mysqli_real_escape_string($conn,$_POST['apass']);

    // check tht aid and password is empty or not.
    if(empty($aid) || empty($apass)){
        header("Location:../login.php?login=error");
        exit();
    }else{

        // sql query for fetch data from database.
        $sql="SELECT * FROM admins WHERE admin_aid='$aid'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        //check if user not exist 
        if($resultCheck <1){
            header("Location:../login.php?login=error");
			exit();
        }else{

    }
}
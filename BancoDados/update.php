<?php

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserPassword = $_POST['password'];
        $UserDate = $_POST['idade'];
        $UserCity = $_POST['cidade'];
        $UserState = $_POST['estado'];

        $query = " update records set User_Name = '".$UserName."', User_Email='".$UserEmail."',User_Password='".$UserPassword."', User_DateofBirth = '".$UserDate."', User_City='".$UserCity."', User_State='".$UserState."' where User_ID='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query no update';
        }
    }
    else
    {
        header("location:view.php");
    }


?>

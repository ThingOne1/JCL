<?php

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserPhone = $_POST['telefone'];
        $UserWhatsapp = $_POST['whatsapp'];
        $UserDateofBirth = $_POST['idade'];
        $UserCourse = $_POST['curso'];
        $UserDate = $_POST['data'];
        $UserID2 = $_POST['ID2'];

        $query = " update into records (User_Name, User_Phone, User_Whastapp, User_DateofBirth, User_Course, User_Date, User_ID2) values('$UserName','$UserPhone','$UserWhatsapp','$UserDateofBirth','$UserCourse','$UserDate','$UserID2')";
        $result = pg_query($con,$query);

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

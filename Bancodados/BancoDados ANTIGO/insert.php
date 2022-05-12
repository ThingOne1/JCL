<?php
  require_once("connection.php");

  if (isset($_POST['submit'])) {
    if(empty($_POST['name']) || empty($_POST['telefone']) || empty($_POST['whatsapp']) || empty($_POST['idade']) || empty($_POST['curso']) || empty($_POST['data']))  {
        echo "Please fill in the blanks";
      }
    else
    {
      $UserName = $_POST['name'];
      $UserPhone = $_POST['telefone'];
      $UserWhatsapp = $_POST['whatsapp'];
      $UserDateofBirth = $_POST['idade'];
      $UserCourse = $_POST['curso'];
      $UserDate = $_POST['data'];
      $UserID2 = $_POST['ID2'];


      $query = "INSERT INTO public.records(
	       User_Name, User_Phone, User_Whatsapp, User_DateofBirth, User_Course, User_Date, User_ID2)
	        VALUES (:'$UserName',:'$UserPhone',:'$UserWhatsapp',:'$UserDateofBirth',:'$UserCourse',:'$UserDate',:'$UserID2')";
      /*$query = "INSERT INTO public.records
      (User_Name, User_Phone, User_Whastapp, User_DateofBirth, User_Course, User_Date, User_ID2)
      VALUES
      (:'$UserName',:'$UserPhone',:'$UserWhatsapp',:'$UserDateofBirth',:'$UserCourse',:'$UserDate',:'$UserID2')";*/

      $result = pg_query($con,$query) or die("Try again");
        if ($result)
        {
          header("location:view.php");
        }
      }
  }
  else {
      header("location:index.php");
  }


 ?>

<?php
  require_once("connection.php");

  if (isset($_POST['submit'])) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['idade']) || empty($_POST['cidade']) || empty($_POST['estado']) || empty($_POST['idade']) )  {
        echo "Please fill in the blanks";
      }
    else
    {
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserPassword = $_POST['password'];
        $UserDate = $_POST['idade'];
        $UserCity = $_POST['cidade'];
        $UserState = $_POST['estado'];

        $query = " insert into records (User_Name, User_Email, User_Password, User_DateofBirth, User_City, User_State) values('$UserName','$UserEmail','$UserPassword','$UserDate','$UserCity','$UserState')";
        $result = mysqli_query($con,$query);

        if ($result)
        {
          header("location:view.php");
        }
        else
        {
          echo "Please check your query no insert";
        }
      }
  }
  else {
      header("location:index.php");
  }
 ?>

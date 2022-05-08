<?php
  require_once("connection.php");

  if (isset($_POST['submit'])) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']))  {
        echo "Please fill in the blanks";
      }
    else
    {
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserPassword = $_POST['password'];
        $query = " insert into records (User_Name, User_Email, User_Password) values('$UserName','$UserEmail','$UserPassword')";
        $result = mysqli_query($con,$query);

        if ($result)
        {
          header("location:view.php");
        }
        else
        {
          echo "Please check your query";
        }
      }
  }
  else {
      header("location:index.php");
  }
 ?>

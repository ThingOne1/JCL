<?php
  require_once('connection.php');
  if (isset($_GET['Del']))
  {

    $UserID = $_GET['Del'];
    $query = "delete from records where User_ID='".$UserID."'";
    $result = pg_query($con,$query);
    if ($result)
    {
      header("location:view.php");
    }
    else
    {
      echo "Look at your query for errors";
    }
  }
  else
  {
    header("location:view.php");
  }
 ?>

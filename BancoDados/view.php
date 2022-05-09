<?php
  require_once('connection.php');
  $query = "select * from records";
  $result = mysqli_query($con,$query);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="CSS\bootstrap.css">
     <title>User profile</title>
   </head>
   <body class="bg-dark">
     <div class="container">
       <div class="row">
         <div class="col m-auto">
           <div class="card mt-5">
             <div class="card-title">
               <table class="table table-bordered">
                 <tr>
                   <td>User ID</td>
                   <td>User Name</td>
                   <td>User Email</td>
                   <td>User Matricula</td>
                   <td>User Idade</td>
                   <td>User Cidade</td>
                   <td>User Estado</td>
                   <td>Edit</td>
                   <td>Delete</td>
                 </tr>

                 <?php
                    while ($row=mysqli_fetch_assoc($result))
                    {
                      $UserID = $row ['User_ID'];
                      $UserName = $row ['User_Name'];
                      $UserEmail = $row ['User_Email'];
                      $UserPassword = $row ['User_Password'];
                      $UserDate = $row ['User_DateofBirth'];
                      $UserCity = $row['User_City'];
                      $UserState = $row['User_State'];


                  ?>
                  <tr>
                    <td><?php echo $UserID; ?></td>
                    <td><?php echo $UserName; ?></td>
                    <td><?php echo $UserEmail; ?></td>
                    <td><?php echo $UserPassword; ?></td>
                    <td><?php echo $UserDate; ?></td>
                    <td><?php echo $UserCity; ?></td>
                    <td><?php echo $UserState; ?></td>
                    <td><a href="edit.php?GetID=<?php echo $UserID ?>" > Edit</a></td>
                    <td><a href="delete.php?Del=<?php echo $UserID ?>" > Delete</td>
                  </tr>

                  <?php
                    }

                   ?>
                   <tr>
                      Registration: <a href="index.php">Create New</a>
                   </tr>
               </table>
             </div>
             <div class="card-body">

               </form>
             </div>
           </div>
         </div>
       </div>

     </div>
   </body>
 </html>

<?php
  require_once('connection.php');
  $query = "select * from records";
  $result = pg_query($con,$query);

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
   <nav class="navbar navbar-dark bg-dark text-white px-3">
   <a class="navbar-brand" href="index.php">
     <img src="IMG\JCL.png" width="30" height="30" class="d-inline-block align-top" alt="">
     JCL
   </a>
   </nav>
   <body class="bg-dark">
     <div class="container">
       <div class="row">
         <div class="col m-auto">
           <div class="card mt-5">
             <div class="card-title">
               <table class="table table-bordered">
                 <tr>
                   <td>User ID</td>
                   <td>User CPF</td>
                   <td>User Name</td>
                   <td>User Phone</td>
                   <td>User Data nascimento</td>
                   <td>User Whatsapp</td>
                   <td>User Course</td>
                   <td>User Date</td>
                   <td>Edit</td>
                   <td>Delete</td>
                 </tr>

                 <?php
                    while ($row=pg_fetch_row($result))
                    {
                      $UserID = $row['User_ID'];
                      $UserID2 = $row['User_ID2'];
                      $UserName = $row['User_Name'];
                      $UserPhone = $row['User_Phone'];
                      $UserDateofBirth = $row['User_DateofBirth'];
                      $UserWhatsapp = $row['User_Whatsapp'];
                      $UserCourse = $row['User_Course'];
                      $UserDate = $row['User_Date'];


                  ?>
                  <tr>
                    <td><?php echo $UserID; ?></td>
                    <td><?php echo $UserID2; ?></td>
                    <td><?php echo $UserName; ?></td>
                    <td><?php echo $UserPhone; ?></td>
                    <td><?php echo $UserDateofBirth; ?></td>
                    <td><?php echo $UserWhatsapp; ?></td>
                    <td><?php echo $UserCourse; ?></td>
                    <td><?php echo $UserDate; ?></td>
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
     <footer class="bg-dark text-center text-lg-start">
     <!-- Copyright -->
     <div class="bottom-container text-white text-center p-3">
       © 2022 Copyright
       <a class="text-white" href="https://www.jcl-tecnologia.com.br/" >JCL tecnologias</a>
     </div>
   </footer>
   </body>
 </html>

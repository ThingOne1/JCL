<?php
  require_once('connection.php');
  $sql = "select * from usuario";
  $stmt = $pdo->prepare($sql);
  $dados = array();

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
                   <td>User Name</td>
                   <td>User Phone</td>
                   <td>User Whatsapp</td>
                   <td>User Course</td>
                   <td>User CPF</td>
                   <td>User Date</td>
                   <td>User Data nascimento</td>
                   <td>Edit</td>
                   <td>Delete</td>
                 </tr>

                 <?php
                    
                    while ($stmt->execute($dados))
                    {
                      $UserName = $dados['nome'];
                      $UserPhone = $dados['telefone'];
                      $UserWhatsapp = $dados['whatsapp'];
                      $UserCourse = $dados['curso'];
                      $UserID = $dados['cpf'];
                      $UserDate = $dados['data_dia'];
                      $UserDateofBirth = $dados['data_nascimento'];


                  ?>
                  <tr>
                    <td><?php echo $UserName; ?></td>
                    <td><?php echo $UserPhone; ?></td>
                    <td><?php echo $UserWhatsapp; ?></td>
                    <td><?php echo $UserCourse; ?></td>
                    <td><?php echo $UserID; ?></td>
                    <td><?php echo $UserDate; ?></td>
                    <td><?php echo $UserDateofBirth; ?></td>
                    <td><a href="edit.php=<?php echo $UserID ?>" > Edit</a></td>
                    <td><a href="deletar.php=<?php echo $UserID ?>" > Delete</td>
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

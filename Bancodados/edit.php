<?php

    require_once("connection.php");
    /*$UserID = $_GET['GetID'];
    $query = " select * from records where User_ID='".$UserID."'";
    $result = pg_query($con,$query);

    while($row=pg_fetch_assoc($result))
    {
        $UserID = $row['User_ID'];
        $UserID2 = $row['User_ID2'];
        $UserName = $row['User_Name'];
        $UserPhone = $row['User_Phone'];
        $UserDateofBirth = $row['User_DateofBirth'];
        $UserDate = $row['User_Date'];
        $UserWhatsapp = $row['User_Whatsapp'];
        $UserState = $row['User_Course'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Update</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-dark text-white text-center py-3"> Update Registro</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                              <input class="form-control mb-2" type="text" name="name" placeholder="Nome completo">
                              <input class="form-control mb-2" type="phone" name="telefone" placeholder="Telefone">
                              <input class="form-control mb-2" type="text" name="whatsapp" placeholder="Numero do Whatsapp">
                              <input class="form-control mb-2" type="text" name="idade" placeholder="Data de nascimento">
                              <input class="form-control mb-2" type="text" name="curso" placeholder="curso">
                              <input class="form-control mb-2" type="text" name="data" placeholder="Data">
                              <input class="form-control mb-2" type="text" name="ID2" placeholder="CPF">
                              <button class=" bg-dark btn btn-primary mt-2" name="submit">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS\bootstrap.css">
    <link rel="icon" href="IMG\JCL.png">
    <title>Site de cadastro</title>
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
        <div class="col-lg-6 m-auto">
          <div class="card mt-5">
            <div class="card-title">
              <h3 class="bg-dark text-white text-center py-3">Editar cartão de registro de alunos</h3>
            </div>
            <div class="card-body">
                <form  action="update.php" method="post">
                  <input id="name" class="form-control mb-2" type="text" name="name" placeholder="Nome completo">
                  <input id="telefone" class="form-control mb-2" type="tel" name="telefone" placeholder="Telefone">
                  <input id="whatsapp" class="form-control mb-2" type="text" name="whatsapp" placeholder="Numero do Whatsapp">
                  <input id="idade" class="form-control mb-2" type="text" name="idade" placeholder="Data de nascimento">
                  <input id="curso" class="form-control mb-2" type="text" name="curso" placeholder="curso">
                  <input id="data" class="form-control mb-2" type="data" name="data" placeholder="Data">
                  <input id="ID" class="form-control mb-2" type="text" name="ID" placeholder="CPF">
                  <button  type="submit" class="bg-dark btn btn-primary mt-2" name="enviarDados" value="ALT"> Editar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </body>
  <footer class="bg-dark text-center text-lg-start">
  <div class="bottom-container text-white text-center p-3">
    © 2022 Copyright
    <a class="text-white" href="https://www.jcl-tecnologia.com.br/" >JCL tecnologias</a>
  </div>
</footer>

</html>

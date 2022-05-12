<?php

    require_once("connection.php");
    $UserID = $_GET['GetID'];
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
</html>

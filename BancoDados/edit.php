<?php

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from records where User_ID='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['User_ID'];
        $UserName = $row['User_Name'];
        $UserEmail = $row['User_Email'];
        $UserPassword = $row['User_Password'];
        $UserDate = $row['User_DateofBirth'];
        $UserCity = $row['User_City'];
        $UserState = $row['User_State'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
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
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $UserName ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $UserEmail ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Matricula " name="password" value="<?php echo $UserPassword ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Idade " name="idade" value="<?php echo $UserDate ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Cidade " name="cidade" value="<?php echo $UserCity ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Estado " name="estado" value="<?php echo $UserState ?>">
                                <button class="bg-dark btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>

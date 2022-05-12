<?php
  require_once("connection.php");

/*  if (isset($_POST['submit'])) {
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

      $query = "INSERT INTO public.records("
        'User_Name', 'User_Phone', 'User_Whasapp', 'User_DateofBirth', 'User_Course', 'User_Date')
         VALUES ('$UserName','$UserPhone','$UserWhatsapp','$UserDateofBirth','$UserCourse','$UserDate','$UserID2')";

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


  try {
    $con = "INSERT INTO public.records(
       'User_Name', 'User_Phone', 'User_Whasapp', 'User_DateofBirth', 'User_Course', 'User_Date')
        VALUES ('$UserName','$UserPhone','$UserWhatsapp','$UserDateofBirth','$UserCourse','$UserDate','$UserID2')";
    $stmt = $con->prepare($sql);

    $dados = array(
      "'$UserName'"=>$_POST['User_Name'],
      "'$UserName'"=>$_POST['User_Phone'],
      "'$UserName'"=>$_POST['User_Whatsapp'],
      "'$UserName'"=>$_POST['User_DateofBirth'],
      "'$UserName'"=>$_POST['User_Course'],
      "'$UserName'"=>$_POST['User_ID2'],
    );
    if ($stmt->execute($dados)) {
      header("location:view.php");
    }
  } catch (PDOException $e) {
    header("location:Registration.php?msgErro=Falha ao cadastrar");
  }
}
}

$UserName = $_POST['name'];
$UserPhone = $_POST['telefone'];
$UserWhatsapp = $_POST['whatsapp'];
$UserDateofBirth = $_POST['idade'];
$UserCourse = $_POST['curso'];
$UserDate = $_POST['data'];
$UserID2 = $_POST['ID2'];
*/
  if (!empty($_POST)){
    if ($_POST['enviarDados'] == 'CAD') {
      try {
        // Preparar as informações
          // Montar a SQL (pgsql)

          $sql = "INSERT INTO usuario
          (nome, telefone, whastapp, curso, cpf, data_dia, data_nascimento)
           VALUES (:name,:telefone,:whatsapp,:curso, :cpf, :data_dia, :data_nascimento)";

          // Preparar a SQL (pdo)
          $stmt = $pdo->prepare($sql);

          // Definir/organizar os dados p/ SQL
          $dados = array(
            ':name' => $_POST['nome'],
            ':telefone' => $_POST['telefone'],
            ':whatsapp' => $_POST['whatsapp'],
            ':curso' => ($_POST['curso']),
            ':cpf' => $_POST['cpf'],
            ':data' => $_POST['data_dia'],
            ':idade' => $_POST['data_nascimento']
          );
          // Tentar Executar a SQL (INSERT)
          if ($stmt->execute($dados)) {
            header("Location: view.php");
          }
      } catch (PDOException $e) {
          //die($e->getMessage());
          header("Location: Registration.php?msgErro=Falha ao cadastrar...");
      }
    }
    else {
      header("Location: index.php?msgErro=Erro de acesso.");
    }
    }
    // Está chegando dados por POST e então posso tentar inserir no banco
    // Obter as informações do formulário ($_POST)


 ?>

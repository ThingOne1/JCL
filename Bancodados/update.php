<?php

    require_once("connection.php");

  /*  if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserPhone = $_POST['telefone'];
        $UserWhatsapp = $_POST['whatsapp'];
        $UserDateofBirth = $_POST['idade'];
        $UserCourse = $_POST['curso'];
        $UserDate = $_POST['data'];
        $UserID2 = $_POST['ID2'];

        $query = " update into records (User_Name, User_Phone, User_Whastapp, User_DateofBirth, User_Course, User_Date, User_ID2) values('$UserName','$UserPhone','$UserWhatsapp','$UserDateofBirth','$UserCourse','$UserDate','$UserID2')";
        $result = pg_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query no update';
        }
    }
    else
    {
        header("location:view.php");
    }*/
if (!empty($_POST)){
  if ($_POST['enviarDados'] == 'ALT'){
    try {

      $sql = "UPDATE public.usuario
	     SET nome=:nome, telefone=:telefone, whastapp=:whatsapp, curso=:curso, data_dia=:data, data_nascimento=:idade
	     WHERE <cpf=:ID>";

      // Preparar a SQL (pdo)
      $stmt = $pdo->prepare($sql);

      // Definir/organizar os dados p/ SQL
      $dados = array(
        ':name' => $_POST['nome'],
        ':telefone' => $_POST['telefone'],
        ':whatsapp' => $_POST['whatsapp'],
        ':curso' => ($_POST['curso']),
        ':ID' => $_POST['cpf'],
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

?>

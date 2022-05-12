<?php
  require_once('connection.php');
  /*if (isset($_GET['Del']))
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
  }*/
if (!empty($_POST)){
  if ($_POST['enviarDados'] == 'DEL')
  {
    try {
      $sql = "DELETE FROM anuncio WHERE cpf = :ID";
      $stmt = $pdo->prepare($sql);
      $dados = array(':ID' => $_POST['cpf']);
      if ($stmt->execute($dados)) {
        header("Location: view.php?msgSucesso=Registro excluído com sucesso!!");
      }
      else {
        header("Location: view.php?msgSucesso=Falha ao EXCLUIR registros..");
      }
    } catch (\Exception $e) {
        header("Location: view.php");
    }
  }
  else {
    header("Location:view.php");
  }
}


 ?>

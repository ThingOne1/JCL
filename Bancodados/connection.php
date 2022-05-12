<?php
$endereco = 'localhost';
$banco = 'postgres';
$usuario = 'postgres';
$senha = '123456';
  /*$con =  pg_pconnect("host=$endereco port=5432 dbname=$banco user=$usuario password=$senha");
  if (!$con) {
    die(" connection error");
  }

try {

  $con = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
  echo "Falha ao Connectar";
  die($e->getMessage());
}*/
try {

  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  //echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
  echo "Falha ao conectar ao banco de dados. <br/>";
  die($e->getMessage());
}

 ?>

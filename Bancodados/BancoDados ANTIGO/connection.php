<?php
  /*$host = "localhost";
	$database = "bancodados";
	$user = "postgre";
	$password = "123456";
  $port = "5432";*/

  //$con =  pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
  /*if (!$con) {
    die(" connection error");
  }*/

  $endereco = 'localhost';
  $banco = 'bancodados';
  $usuario = 'postgres';
  $senha = '123456';

  //$con1 =  pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
try {

  $con = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",$usuario,$senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
  echo "Falha ao Connectar";
  die($e->getMessage());
}

 ?>

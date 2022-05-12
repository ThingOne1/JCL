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
              <h3 class="bg-dark text-white text-center py-3">Cartão de registro de alunos</h3>
            </div>
            <div class="card-body">
                <form  action="insert.php" method="post">
                  <input id="nome" class="form-control mb-2" type="text" name="nome" placeholder="Nome completo">
                  <input id="telefone" class="form-control mb-2" type="tel" name="" placeholder="Telefone">
                  <input id="whatsapp" class="form-control mb-2" type="text" name="whatsapp" placeholder="Numero do Whatsapp">
                  <input id="data_nascimento" class="form-control mb-2" type="text" name="data_nascimento" placeholder="Data de nascimento">
                  <input id="curso" class="form-control mb-2" type="text" name="curso" placeholder="curso">
                  <input id="data_dia" class="form-control mb-2" type="data" name="data_dia" placeholder="Data">
                  <input id="cpf" class="form-control mb-2" type="text" name="cpf" placeholder="CPF">
                  <button  type="submit" class="bg-dark btn btn-primary mt-2" name="enviarDados" value="CAD"> Enviar</button>
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

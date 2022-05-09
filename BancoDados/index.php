<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS\bootstrap.css">
    <title>Cartao de registro</title>
  </head>
  <!-- Image and text -->
  <nav class="navbar navbar-dark bg-dark text-white">
  <a class="navbar-brand" href="#">
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
              <h3 class="bg-dark text-white text-center py-3">Cartao de registro</h3>
            </div>
            <div class="card-body">
                <form  action="insert.php" method="post">
                  <input class="form-control mb-2" type="text" name="name" placeholder="Nome completo">
                  <input class="form-control mb-2" type="email" name="email" placeholder="Endereco de Email">
                  <input class="form-control mb-2" type="text" name="password" placeholder="Numero da Matricula">
                  <input class="form-control mb-2" type="text" name="idade" placeholder="Idade">
                  <input class="form-control mb-2" type="text" name="cidade" placeholder="Cidade">
                  <input class="form-control mb-2" type="text" name="estado" placeholder="Estado">
                  <button class=" bg-dark btn btn-primary mt-2" name="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </body>
  <footer class="bg-dark text-center text-lg-start">
  <!-- Copyright -->
  <div class="bottom-container text-white text-center p-3">
    © 2022 Copyright
    <a class="text-white" href="https://www.jcl-tecnologia.com.br/" >JCL tecnologias</a>
  </div>
</footer>
</html>

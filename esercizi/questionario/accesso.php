<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form di accesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:<?=$_GET['colore'] ?>; font-family:Cambria; font-size:larger">
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Questionario
        <img src="https://static.vecteezy.com/system/resources/previews/024/029/746/non_2x/book-icon-clipart-transparent-background-free-png.png" style="width:40px">
    </a><br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Iscriviti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<center>
    <h1>Benvenuto <?= $_GET['nome']?> <?= $_GET['cognome'] ?> </h1>
</center>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center " style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://icleonardodavincisenago.edu.it/assets/avatar/141319A3-7592-4997-970CD777CE3FE2F8/"
                alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
              <h5><?= $_GET['nome']?> <?= $_GET['cognome'] ?></h5>
              <p>Utente</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Informazioni</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?= $_GET['email']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Sport preferito</h6>
                    <p class="text-muted"><?= $_GET['sport']?></p>
                  </div>
                </div>
                <h6>Altro</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Password</h6>
                    <p class="text-muted"><?= $_GET['password']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Età</h6>
                    <p class="text-muted"><?= $_GET['age']?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <footer class="footer mt-auto py-3" style="background-color: black; align:">
        <div class="container">
          <span class="text-light">
          <div style="width: 30%; align:left"><img src="https://static.vecteezy.com/system/resources/previews/024/029/746/non_2x/book-icon-clipart-transparent-background-free-png.png" style="width: 60px"></div>
          <div style="align: right">
            <h5 style="text-align: right"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
              <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
            </svg> Questionario </h5>
            </div>
          </span>
        </div>
      </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
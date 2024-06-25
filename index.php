<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina João gui</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="script.js" defer></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>



  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        
        <a class="navbar-brand" href="index.php?pg=home">
        GameOn
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php?pg=jogos">jogos</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Opções
              </a>      
        <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?pg=contato">Contato</a></li>
                <li><a class="dropdown-item" href="index.php?pg=equipe">Equipe</a></li>
                <li>
                  
                
              </ul>

            </li>
          </ul>

        </div>
      </div>
    </nav>


  </header>
  <main>
    <?php
    //print_r($_GET);
    
    $pg = $_GET["pg"] ?? "home";
    $pg = "paginas/{$pg}.php";
    if (file_exists($pg)) {
      include $pg;
    } else {
      include "paginas/erro.php";
    }

    ?>
  </main>
  <footer class="footer">
    <p>Desenvolvido por João Guilherme</p>


  </footer>

</body>

</html>
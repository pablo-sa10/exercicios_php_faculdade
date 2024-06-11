<?php 

$current_page = basename($_SERVER['PHP_SELF']);
//var_dump($current_page);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de exercicios</title>
    <!-- links bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
  <div class="container">
    <a class="navbar-brand" href="<?php $current_page == "index.php" ? $link = "" : $link = "../../"?> <?= $link ?>">Exercícios</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lista 2
          </a>
          <ul class="dropdown-menu">
            <?php for($i = 1; $i < 11; $i++){ 

               $link = $current_page == "index.php" ? "./lista2/ex{$i}/ex{$i}.php" : "../../lista2/ex{$i}/ex{$i}.php";
                    
            ?>
            <li><a class="dropdown-item" href="<?= $link ?>">Exercício <?= $i ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lista 3
          </a>
          <ul class="dropdown-menu">
            <?php for($i = 1; $i < 6; $i++){
                    
                    $link = $current_page == "index.php" ? "./lista3/ex{$i}/ex{$i}.php" : "../../lista3/ex{$i}/ex{$i}.php";
                
                ?>
            <li><a class="dropdown-item" href="<?= $link ?>">Exercício <?= $i ?></a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
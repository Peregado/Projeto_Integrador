<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
          <a class="logo" href="index.html"> <img src =".\img\logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left: 45%">
            <ul class="navbar-nav me-auto mb-2 mb-md-0" style="font-family: 'Montserrat';">
         
              <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href ="#">Catálogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Planos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Central</a>
              </li>
              <?php if(@!isset($_SESSION['user'])): ?>
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="#">Entrar / Cadastrar</a>
              </li>
              <?php else: ?>
              <!-- dropdown with user name and sair -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <!-- explode second space in name -->

                <?php $name = explode(" ", $_SESSION['user']['nome']); echo $name[0]; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item text-black" href="#">Meus dados</a></li>
                  <li><a class="dropdown-item text-black" href="<?php echo SITE_URL ?>logout.php">Sair</a></li>
                </ul>
              </li>

              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
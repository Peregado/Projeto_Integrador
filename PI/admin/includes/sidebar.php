    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo SITE_URL ?>admin/admin/index.php">
                  <span data-feather="home"></span>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo SITE_URL ?>admin/view.php">
                  <span data-feather="calendar"></span>
                  Ver Locações
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo SITE_URL ?>admin/config.php">
                  <span data-feather="truck"></span>
                  Gerenciar Frota
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo SITE_URL ?>admin/view.php">
                  <span data-feather="map"></span>
                  Gerenciar Locadoras
                </a>
              </li>

             
            </ul>

            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo SITE_URL ?>admin/manage.php?type=manage_users">
                  <span data-feather="users"></span>
                  Gerenciar Usuários
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="check-square"></span>
                  Gerenciar Agenda
                </a>
              </li> -->
              
            </ul>

           
          </div>
        </nav>
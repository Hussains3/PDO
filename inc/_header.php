<?php ?>
<header>
      <!-- Image and text -->
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
          <img src="img/sabbir.svg" height="30" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <?php if (isset($_SESSION['id'])) :?>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
            <?php endif; ?>
            <li class="nav-item">
              <?php if (isset($_SESSION['id'])) :?>
              <a class="nav-link" href="<?php echo BASE_URL;?>php/logout.php">Logout</a>
              <?php else: ?>
                <a class="nav-link" href="<?php echo BASE_URL;?>login.php">Login</a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
      </nav>
    </header>
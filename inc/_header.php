<?php ?>
<header>
      <!-- Image and text -->
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
          <img src="img/pdo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          PDO
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL;?>login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
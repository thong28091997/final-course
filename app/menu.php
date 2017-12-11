<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">OTO MOTO SHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <div class="slogan">
        
      </div>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACTS</a>
        </li>
        <?php if(isset($_SESSION["login"])){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SETTINGS</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="admin/users/">Admin panel</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>
        <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
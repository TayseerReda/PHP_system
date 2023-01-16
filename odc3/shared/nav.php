<?php
session_start();

if(isset($_POST["logout"])){
  session_unset();
  session_destroy();
  header('location:/ODC3/auth/login.php');

}
 
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <?php if(isset($_SESSION['admin'])){?>
      <li class="nav-item active">
        <a class="nav-link" href="/ODC3/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown

        </a>
    
          <div class="dropdown-menu">
          <a class="dropdown-item" href="/ODC3/employees/create.php">CREATE</a>
          <a class="dropdown-item" href="/ODC3/employees/list.php">LIST</a>
          <a class="dropdown-item" href="/ODC3/employees/update.php">UPDATE</a>
          <a class="dropdown-item" href="/ODC3/admin/profile.php">PROFILE</a>
        </div>
      </li>
      <?php }?>
    </ul>
    <?php if(isset($_SESSION['admin'])){?>
    <form action="" method="POST">
    <button class="btn btn-secondary btn-danger"  name="logout">logout</button>
      </form>

    <?php } else { ?>
      <a href="/ODC3/auth/login.php" class="btn btn-secondary btn-success" tabindex="-1" role="button" >login</a>

      <?php } ?>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
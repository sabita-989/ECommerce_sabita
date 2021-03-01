<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./index.php">Home Galore</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio1">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <?php 
            if(!isset($_SESSION['login_user']))
            {
              ?>
               <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
              </li>
              <?php 

            }else{
              ?>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link js-scroll-trigger" href="#" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($_SESSION['login_user']) ?></a>
                  
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">                 <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
                </div>
              </li>
              <?php } ?>

         
        </ul>
      </div>
    </div>
  </nav>
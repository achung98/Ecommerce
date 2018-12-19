    <body>
      <div id="register">
        <div id="reg">
          <?php if(isset($_SESSION['ses'])): ?>
            <?php echo '<ul>
              <li>Welcome Back, '.$_SESSION['first']. ' '.$_SESSION['last'].'!</li>
              <li><a href="../Includes/logout.inc.php">Logout</a></li>
             </ul>' ?>
          <?php else: ?>
            <ul>
              <li><a href="../Register/register.php">Register</a></li>
              <li><a href="../Login/login.php">Login</a></li>
             </ul>
          <?php endif; ?>
        </div>
      </div>
      <header id="head">
        <div id="Intro">
           <h1 id="company"><a href="../Main/main.php">Company Name</a></h1>
        </div>
        <nav id="nav">
            <ul>
              <div class="dropdown">
                <button class="dropbtn">Shop
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="../Shop/shop.php?section=Smartphones">Smartphones</a>
                  <a href="../Shop/shop.php?section=Laptops">Laptops</a>
                  <a href="../Shop/shop.php?section=Audio">Audio</a>
                </div>
              </div>
            </div>
              <li>Contact Us</li>
              <li>About</li>
              <li><a href="../Cart/cart.php">Cart</a></li>
            </ul>
        </nav>
      </header>

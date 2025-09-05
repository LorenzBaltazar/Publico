<!-- navbar.php -->
<nav>
  <div class="logo">Publico</div>
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="facilities.php">Facilities</a></li>
    <li><a href="reservation.php">Reservation</a></li>
    <li><a href="about.php">About</a></li>
  </ul>
  <div class="account">
    <?php
      session_start();
      if (isset($_SESSION['user'])) {
          echo '<a href="profile.php" class="btn-account">' . $_SESSION['user'] . '</a> | 
                <a href="logout.php" class="btn-account">Logout</a>';
      } else {
          echo '<a href="login.php" class="btn-login">Login</a>';
      }
    ?>
  </div>
</nav>

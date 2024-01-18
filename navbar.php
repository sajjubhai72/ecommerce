<?php session_start(); ?>

<section id="Top">
  <div class="top_header">
    <div class="row">
      <div class="col-lg-12">
        <span id="english_date">2023 August 15, Tuesday</span>
        <?php 
          if (isset($_SESSION['user_id'])) {
            echo '
            <a href="dashboard.php" id="dashboard_link">Dashboard</a>
            <a href="logout.php" id="logout_link">Logout</a>
          ';
          } else {
          echo '<a href="login.php" id="login_link">Login</a>';
          }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- navigation -->
<nav>
  <img src="images/logo.png" alt="" />
  <div class="navigation">
    <ul>
      <i class="fa fa-times" id="menu-cl"></i>
      <li><a href="index.php"> Home </a></li>
      <?php 
        if (basename($_SERVER['PHP_SELF']) !== 'dashboard.php') {
          echo '
          <li><a href="Notice.php"> Notice </a></li>
          <li><a href="admission.php"> Admission </a></li>
          <li><a href="./Dashboard/index.php"> Teacher Details </a></li>
          <li><a href="./dashboard/SD-Dashboard/find-result.php"> Student Result </a></li>
          <li><a href="Contact.php">Contact</a></li>
          ';
        }
        else {
          echo '
          <li><a href="./dashboard/Notice-Dashboard/N-admin.php"> Notice </a></li>
          <li><a href="./dashboard/admission/A-admin.php"> Admission </a></li>
          <li><a href="./dashboard/admin/dashboard.php"> Teacher Details </a></li>
          <li><a href="./Dashboard/SD-Dashboard/dashboard.php"> Student Result </a></li>
          ';
        }
      ?>

    </ul>
    <img src="images/menu.png" id="manu-btn" />
  </div>
</nav>
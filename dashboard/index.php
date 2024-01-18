<?php include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Teachers Record Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href=".././style.css">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- Navigation-->
            <section id="Top">
  <div class="top_header">
    <div class="row">
      <div class="col-lg-12">
        <span id="english_date">2023 August 15, Tuesday</span>
        <?php 
          if (isset($_SESSION['user_id'])) {
            echo '
            <a href="dashboard.php" id="dashboard_link">Dashboard</a>
            <a href="../logout.php" id="logout_link">Logout</a>
          ';
          } else {
          echo '<a href="../login.php" id="login_link">Login</a>';
          }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- navigation -->
<nav style="padding-top: 35px;">
  <img src="images/logo.png" alt="" />
  <div class="navigation">
    <ul>
      <i class="fa fa-times" id="menu-cl"></i>
      <li><a href="../index.php"> Home </a></li>     
          <li><a href="../Notice.php"> Notice </a></li>
          <li><a href="../admission.php"> Addmission </a></li>
          <li><a href="./index.php"> Teacher Details </a></li>
          <li><a href="./SD-Dashboard/find-result.php"> Student Result </a></li>
          <li><a href="../Contact.php">Contact</a></li>

    </ul>
    <img src="images/menu.png" id="manu-btn" />
  </div>
</nav>

            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">

                    <form method="post" action="search-result.php">
   <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Search Teacher by Name or Subject</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Search Teacher by Name or Subject" aria-label="Email address..." aria-describedby="button-newsletter" name="searchinput" required style="width:350px;" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                </form>
                    <hr />

                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Listed Teachers</h2>
<hr color="red" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                                    <?php
$sql="SELECT * from tblteacher where isPublic='1' limit 9";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>  

                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="teacher/images/<?php echo $row->Picture;?>" alt="<?php  echo htmlentities($row->Name);?>" />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2"><?php  echo htmlentities($row->TeacherSub);?></div>
                                    <a class="text-decoration-none link-dark stretched-link" href="teacher-details.php?tid=<?php echo $row->ID;?>" target="_blank">
                                        <h5 class="card-title mb-3"><?php  echo htmlentities($row->Name);?></h5></a>
                                    <p class="card-text mb-0"><small>Registered Since <?php  echo htmlentities($row->RegDate);?></small></p>
                                </div>
                         
                            </div>
                        </div>
<?php }} else{?>
<h3 align="center" style="color:red;">Record not Found</h3>
<?php } ?>
                 
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer-->
<?php include_once('../Footer.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
      function updateDates() {
        const currentDate = new Date();

        // Update English date
        const options = {
          year: "numeric",
          month: "long",
          day: "numeric",
          weekday: "long",
        };
        document.getElementById("english_date").textContent =
          currentDate.toLocaleDateString("en-US", options);

        // Update Nepali date (replace with your actual logic)
        const nepaliDate = getNepaliDate(currentDate); // Your logic to get Nepali date
        document.getElementById("nepali_date").textContent = nepaliDate;
      }

      // Call the updateDates function to update dates on page load
      updateDates();

      // Update dates every second
      setInterval(updateDates, 1000);
    </script>
    </body>
</html>

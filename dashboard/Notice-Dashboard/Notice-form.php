<?php
// Include the database connection
include '../../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $publisher = $_POST['publisher'];

    // File handling
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    // Get the directory path of the current script
    $current_directory = __DIR__;

    // Navigate to the uploads directory from the current directory
    $uploads_dir = $current_directory . './notice_uploads/';
    $uploaded_file_path = $uploads_dir . $file_name;

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($file_tmp, $uploaded_file_path)) {
        // Insert data into notice table
        $sql = "INSERT INTO notice (published_date, title, file, publisher) VALUES (NOW(), '$title', '$uploaded_file_path', '$publisher')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>
                alert("Notice Uploaded successfully!");
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "File upload failed.";
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Notice Form</title>
  

    <link rel="apple-touch-icon" href="apple-icon.png">


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="Notice.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Notice Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="N-admin.php">Dashboard</a></li>
                            <li><a href="add-subjects.php">Notice Details</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Notice </strong><small> Details</small></div>
                            <form action="" method="post" class="notice-form" enctype="multipart/form-data">
    <h1>Create Notice</h1>
    <div class="field">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="field">
        <label for="publisher">Published By</label>
        <input type="text" name="publisher" id="publisher">
    </div>
    <div class="field">
        <label for="file">Upload File</label>
        <input type="file" name="file" id="file">
    </div>
    <input type="submit" value="Submit" class="btn">
</form>
                        </div>



                                           
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
                                <!-- Right Panel -->


    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>

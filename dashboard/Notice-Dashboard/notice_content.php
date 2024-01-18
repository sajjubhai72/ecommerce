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
                alert("Notice created successfully!");
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "File upload failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notice Uploads</title>

  <!-- <link rel="stylesheet" href="../style.css" /> -->
  <link rel="stylesheet" href="Notice.css" />

</head>
<body>


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

</body>
</html>
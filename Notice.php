<?php
include 'conn.php';

// $sql = "SELECT * FROM notice";
$sql = "SELECT * FROM notice ORDER BY published_date DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notice Board</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  </head>
  <body>

  <!-------- Navigation Baar ------->
    <?php include "navbar.php" ?>
    
    <!----------Main Notice------->
    <section id="main-notice">
      
      <div class="notice_header">
        <h5">Notice Board</h5>
      </div>

      <div class="sam">
        <h5>All Notices</h5>
      </div>

      <div class="main-table">
      <table id="myTable" class="display responsive nowrap">
  <thead>
    <tr>
    <th width="5%">S.N</th>
              <th width="15%">Published Date</th>
              <th width="55%">Notice Title</th>
              <th width="10%">Files</th>
              <th width="15%">Published By</th>
    </tr>
  </thead>
  <tbody id="noticeTableBody">
            <?php
              $counter = 0; // Initialize the counter
              while ($row = mysqli_fetch_assoc($result)) {
                $counter++; // Increment the counter for each row
                echo '<tr class="odd">';
                echo '<td>' . $counter . '</td>'; // Use the counter as serial number
                echo '<td>' . $row['published_date'] . '</td>';
                echo '<td>' . $row['title'] . '</td>';
                echo '<td><a href="./dashboard/Notice-Dashboard/notice_uploads/' . $row['file'] . '" target="_blank">File</a></td>';
                echo '<td>' . $row['publisher'] . '</td>';
                echo '</tr>';
              }
            ?>
           </tbody>
        </table>
      </div>
    </section>

    <!------- Footer baar -------->
    <?php include "Footer.php" ?>

  <script>
    $(document).ready(function () {
       const dataTable = $("#dataTable").DataTable({
        // Set the number of rows to display per page based on the default select value
        "pageLength": parseInt($("#showEntries").val()),
      });

      // Update the table when the select dropdown changes
      $("#showEntries").on("change", function () {
        dataTable.page.len(parseInt($(this).val())).draw();
      });
    });
  </script>


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


<script>
  let table = new DataTable('#myTable');
</script>



  </body>
</html>

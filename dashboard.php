<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dashboard.css" />
    
  </head>
  <body>

  <?php include "navbar.php" ?>

  <div class="som">
    <h1> Welcome to Admin Page..........</h1>
  </div>
    

<div id="content">
  <!-- Yahaan par content dikhaya jayega -->
</div>


  <!-- NAvigatin Top (Time) -->
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

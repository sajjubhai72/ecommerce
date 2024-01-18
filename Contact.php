<?php
// Include the database connection
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL query to insert data into feedback table
    $sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
            alert("Feedback submitted successfully!");
            window.location.href = "contact.php"; // Redirect back to the contact form
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
     <!---------- navigation ------------>
    <?php include "navbar.php" ?>

    <!------------- HOME ------------->
    <selection id="home-5">
      <h2>CONTACT</h2>
      <p>
        It acts as a bridge between the entity and its audience, enabling
        communication, building connections, and facilitating various
        interactions.
      </p>
    </selection>

    <!--------- CONTACT --------->
    <section id="contact">
      <div class="get-in">
        <h2>Important / Official Call</h2>
        <p>
          Attend town halls, workshops, and forums to share your ideas,
          experiences, and expertise.
        </p>

        <div class="get-deatails">
          <h3>Head-Office</h3>
          <div>
            <i class="fa-solid fa-house get"></i>
            <p>Laxmi Sadak Dharan-1, Sunsari Nepal</p>
          </div>

          <h3>Office Numbers</h3>
          <div>
            <i class="fa fa-phone get"></i>
            <p>
              025 534013 <br />
              025 523262
            </p>
          </div>

          <h3>Office-Email</h3>
          <div>
            <i class="fa fa-envelope get"></i>
            <p>
              info@stc.edu.np
            </p>
          </div>

          <h3>Check This Links</h3>
          <div class="pro-links">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-twitter"></i>
          </div>
        </div>
      </div>

      <form action="#" method="post" class="form">
        <h4>Fillup Form and Connect us....</h4>
        <p>In a world that seems to grow more interconnected by the day.</p>

        <div class="form-row">
          <input type="text" placeholder="Your Name" name="name" />
          <input type="text" placeholder="Your Email" name="email" />
        </div>

        <div class="form-col">
          <input type="text" placeholder="Your Subject" name="subject" />
        </div>

        <div class="form-col">
          <textarea
            name="message"
            id=""
            cols="30"
            rows="8"
            placeholder="How can we help?"
          ></textarea>
        </div>

        <div class="form-col">
          <button>Submit Message</button>
        </div>
      </form>
    </section>

    <section id="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.525262601533!2d87.28122487513569!3d26.82324087670061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef417485bf0697%3A0x5d819e0cfb1b1874!2z4KS44KWB4KSo4KS44KSw4KWAIOCkn-Clh-CkleCljeCkqOCkv-CkleCksiDgpJXgpLLgpYfgpJw!5e0!3m2!1sen!2snp!4v1695634818713!5m2!1sen!2snp"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>

    <!------- Footer -------->
    <?php include "Footer.php" ?>

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
    

    <!-- JavaScript -->
    <script>
      $("#manu-btn").click(function () {
        $("nav .navigation ul").addClass("active");
      });
      $("#menu-cl").click(function () {
        $("nav .navigation ul").removeClass("active");
      });
    </script>
    <!-- End JavaScript -->
  </body>
</html>

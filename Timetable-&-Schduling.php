<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Timetable and Scheduling</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
  </head>
  <body>
    <!----- Navigation -------->
    <?php include "navbar.php" ?>

    <!-- HOME -->
    <selection id="home-4">
      <h2>Timetable & Scheduling</h2>
      <p>
        Timetable and scheduling play crucial roles in various aspects of our
        lives, from education and work to personal routines and events.
      </p>
    </selection>

    <!----- Timetable & Scheduling -------->
    <div class="cont">
      <h1>Your Time-table & Scheduling is bleow</h1>
      <p>
        Timetable and scheduling play crucial roles in various aspects of our
        lives, from education and work to personal routines and events.
      </p>
    </div>

    <!------- Show School Time-table ------->
    <section id="timetable">
      <div class="grade-container">
        <ul class="grades">
          <h4>Your CLasses</h4>
          <li onclick="showGradeContent('home')">Home</li>
          <li onclick="showGradeContent('grade-one')">Class-One</li>
          <li onclick="showGradeContent('grade-two')">Class-Two</li>
          <li onclick="showGradeContent('grade-three')">Class-Three</li>
          <li onclick="showGradeContent('grade-four')">Class-Four</li>
          <li onclick="showGradeContent('grade-five')">Class-Five</li>
        </ul>
      </div>

      <div class="content">
        <h1>Class Schedules</h1>
        <div id="grade-one" style="display: none">
          <table>
            <thead>
              <tr>
                <th class="a" colspan="11">Class-One (Time-table)</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th>Time</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Sunday</th>
                <th rowspan="10">
                  A <br />
                  S <br />
                  S <br />
                  E <br />
                  M <br />
                  B <br />
                  L <br />
                  Y<br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>Nepali</th>
                <th>English</th>
                <th>Math</th>
                <th>Social</th>
                <th rowspan="10">
                  B <br />
                  R <br />
                  E <br />
                  A <br />
                  K <br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
                <th>--</th>
              </tr>
              <tr>
                <td>Monday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <td>Tuesday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Wednesday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Thursday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Friday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="grade-two" style="display: none">
          <table>
            <thead>
              <tr>
                <th class="a" colspan="11">Class-Two (Time-table)</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th>Time</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Sunday</th>
                <th rowspan="10">
                  A <br />
                  S <br />
                  S <br />
                  E <br />
                  M <br />
                  B <br />
                  L <br />
                  Y<br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th rowspan="10">
                  B <br />
                  R <br />
                  E <br />
                  A <br />
                  K <br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <td>Monday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <td>Tuesday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Wednesday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Thursday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Friday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="grade-three" style="display: none">
          <table>
            <thead>
              <tr>
                <th class="a" colspan="11">Class-Three (Time-table)</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th>Time</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Sunday</th>
                <th rowspan="10">
                  A <br />
                  S <br />
                  S <br />
                  E <br />
                  M <br />
                  B <br />
                  L <br />
                  Y<br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th rowspan="10">
                  B <br />
                  R <br />
                  E <br />
                  A <br />
                  K <br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <td>Monday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <td>Tuesday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Wednesday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Thursday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Friday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="grade-four" style="display: none">
          <table>
            <thead>
              <tr>
                <th class="a" colspan="11">Class-Four (Time-table)</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th>Time</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Sunday</th>
                <th rowspan="10">
                  A <br />
                  S <br />
                  S <br />
                  E <br />
                  M <br />
                  B <br />
                  L <br />
                  Y<br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th rowspan="10">
                  B <br />
                  R <br />
                  E <br />
                  A <br />
                  K <br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <td>Monday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <td>Tuesday</td>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Wednesday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Thursday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
              <tr>
                <th>Friday</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="grade-five" style="display: none">
          <table>
            <thead>
              <tr>
                <th class="a" colspan="11">Class-Five (Time-table)</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th>Time</th>
                <th>07:00AM-07:20AM</th>
                <th>07:20AM-08:00AM</th>
                <th>08:00AM-08:40AM</th>
                <th>08:40AM-09:20AM</th>
                <th>09:20AM-10:00AM</th>
                <th>10:00AM-10:30AM</th>
                <th>10:30AM-11:10AM</th>
                <th>11:10AM-11:50AM</th>
                <th>11:50AM-12:30PM</th>
                <th>12:30PM-01:10PM</th>
              </tr>
              <tr>
                <th>Sunday</th>
                <th rowspan="10">
                  A <br />
                  S <br />
                  S <br />
                  E <br />
                  M <br />
                  B <br />
                  L <br />
                  Y<br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>English</th>
                <th>Social</th>
                <th>Nepali</th>
                <th>Health</th>
                <th rowspan="10">
                  B <br />
                  R <br />
                  E <br />
                  A <br />
                  K <br />
                  <br />
                  T <br />
                  I <br />
                  M <br />
                  E
                </th>
                <th>Math</th>
                <th>Science</th>
                <th>Education</th>
                <th>Opt. Math</th>
              </tr>
              <tr>
                <td>Monday</td>
                <th>Nepali</th>
                <th>English</th>
                <th>Math</th>
                <th>Science</th>
                <th>Social</th>
                <th>Health</th>
                <th>Education</th>
                <th>Opt. Math</th>
              </tr>
              <tr>
                <td>Tuesday</td>
                <th>Opt. Math</th>
                <th>Social</th>
                <th>English</th>
                <th>Health</th>
                <th>Science</th>
                <th>Math</th>
                <th>Education</th>
                <th>Nepali</th>
              </tr>
              <tr>
                <th>Wednesday</th>
                <th>English</th>
                <th>Social</th>
                <th>Opt. Math</th>
                <th>Science</th>
                <th>Nepali</th>
                <th>Education</th>
                <th>Health</th>
                <th>Math</th>
              </tr>
              <tr>
                <th>Thursday</th>
                <th>Math</th>
                <th>English</th>
                <th>Science</th>
                <th>Opt. Math</th>
                <th>Education</th>
                <th>Nepali</th>
                <th>Social</th>
                <th>Health</th>
              </tr>
              <tr>
                <th>Friday</th>
                <th>Health</th>
                <th>Nepali</th>
                <th>Opt. Math</th>
                <th>English</th>
                <th>Social</th>
                <th>Math</th>
                <th>Education</th>
                <th>Science</th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-------- Footer --------->
    <?php include "Footer.php" ?>

    <!-- Satrt JavaScript -->
    <script>
      function updateDates() {
        const currentDate = new Date();

          const options = {
          year: "numeric",
          month: "long",
          day: "numeric",
          weekday: "long",
        };

        document.getElementById("english_date").textContent =
        currentDate.toLocaleDateString("en-US", options);
      }
    </script>

    <script>
      function showGradeContent(gradeId) {
        ectorAll(".content div");
        gradeDivs.forEach(function (div) {
          div.style.display = "none";
        });

        var gradeContent = document.getElementById(gradeId);
        if (gradeContent) {
          gradeContent.style.display = "block";
        }
      }
    </script>

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

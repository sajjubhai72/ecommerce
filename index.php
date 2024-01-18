<?php include "conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Management System</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <!---------- navigation ------------>
    <?php include "navbar.php" ?>

    <!-- HOME -->
    <selection id="home">
      <h2>Enhance Your Future With this School</h2>
      <p>
        Our school is a dynamic and inclusive learning institution dedicated to
        providing high-quality education to students of all backgrounds. We
        believe in nurturing the intellectual, social, and emotional growth of
        our students, preparing them to become responsible global citizens.
      </p>

      <div class="btn">
        <a class="blue" href="#"> Learn More </a>
        <a class="yellow" href="#"> Visit Our School </a>
      </div>
    </selection>

    <!-- Features -->
    <selection id="features">
      <h1>Our features</h1>
      <p>
        Features refer to distinctive characteristics or qualities that
        distinguish something from others.
      </p>

      <div class="fea-base">
        <div class="fea-box">
          <i class="fa fa-thumbs-o-up"></i>
          <h3>Academic Excellence</h3>
          <p>
            A school committed to academic excellence places a strong emphasis
            on providing high-quality education, offering a well-rounded
            curriculum, and ensuring rigorous academic standards.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-blind"></i>
          <h3>Qualified and Dedicated Teachers</h3>
          <p>
            A school's success is greatly influenced by the competence and
            dedication of its teachers.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-book"></i>
          <h3>Holistic Education</h3>
          <p>
            A school that promotes holistic education recognizes the importance
            of nurturing not only intellectual growth but also social,
            emotional, and physical development.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-television"></i>
          <h3>Technology Integration</h3>
          <p>
            A school that leverages technology effectively equips students with
            digital literacy skills, provides access to educational resources,
            and prepares them to navigate a technologically-driven world.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-comment"></i>
          <h3>Focus on Character Development</h3>
          <p>
            A school that emphasizes character development nurtures ethical
            values, integrity, empathy, and responsible citizenship.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-grav"></i>
          <h3>Support and Guidance</h3>
          <p>
            Recognizing that every student is unique, a good school offers
            individualized support and guidance.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-envira"></i>
          <h3>Inclusive and Supportive Environment</h3>
          <p>
            A school that prioritizes inclusivity and creates a supportive
            environment ensures that every student feels valued, respected, and
            included.
          </p>
        </div>

        <div class="fea-box">
          <i class="fa fa-hand-peace-o"></i>
          <h3>Continuous Improvement and Evaluation</h3>
          <p>
            A quality school is committed to continuous improvement and
            regularly evaluates its programs, teaching methodologies, and
            student outcomes.
          </p>
        </div>
      </div>
    </selection>

    <!-- Our Subjects -->
    <section id="course">
      <h1>Our Subjects</h1>
      <p>
        As we progress through this subject, let us embrace the learning process
        with enthusiasm and curiosity.
      </p>

      <div class="sub-box">
        <div class="subject">
          <img src="images/english.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>English</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/nepali.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Nepali</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/social.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Social</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/science.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Science</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/health.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Health and Papulation</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/math.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Compulsory Math</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/education.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Education</h6>
          </div>
        </div>

        <div class="subject">
          <img src="images/opt-math.jpeg" />
          <div class="details">
            <span> Updated 2080/03/27 </span>
            <h6>Optional Math</h6>
          </div>
        </div>
      </div>
    </section>

    <!-- why we choose our school -->
    <section id="ch-school">
      <h1>Why we Choose Our School</h1>
      <p>Here are some common reasons people may choose our school:</p>

      <div class="sch-box">
        <div class="school">
          <img src="images/school-view.jpg" />
          <div class="deta">
            <h6>School View</h6>
            <span>
              School views can vary greatly depending on the educational
              institution and its mission, values, and philosophy.
            </span>
          </div>
        </div>

        <div class="school">
          <img src="images/classroom.jpeg" />
          <div class="deta">
            <h6>Class-Room</h6>
            <span>
              Classrooms are the foundational spaces where students and teachers
              come together to engage in the process of learning.
            </span>
          </div>
        </div>

        <div class="school">
          <img src="images/Friendly-Teacher.jpeg" />
          <div class="deta">
            <h6>Friendly-Teacher</h6>
            <span>
              These teachers possess qualities that go beyond simply imparting
              knowledge and demonstrate a genuine care and understanding for
              their students.
            </span>
          </div>
        </div>

        <div class="school">
          <img src="images/libarary.jpg" />
          <div class="deta">
            <h6>Library</h6>
            <span>
              Libraries are essential institutions that serve as repositories of
              knowledge, resources, and community hubs for learning, research,
              and leisure.
            </span>
          </div>
        </div>

        <div class="school">
          <img src="images/computer.jpg" />
          <div class="deta">
            <h6>Computer Lab</h6>
            <span>
            Computer labs are commonly found in educational institutions, research facilities, offices, 
            and public spaces, and they serve various functions and purposes.
            </span>
          </div>
        </div>

        <div class="school">
          <img src="images/school-field.jpg" />
          <div class="deta">
            <h6>School-Field</h6>
            <span>
              A school-field, also known as a field trip, is an educational
              excursion that takes students outside of the traditional classroom
              setting to explore and learn in real-world environments.
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- Experts People -->
    <section id="experts">
      <h1>Community Peoples</h1>
      <p>
        Community people is members of the local community, are individuals who
        reside in a specific geographic area and actively contribute to the
        well-being and development of that community.
      </p>

      <div class="exp-box">
        <div class="profile">
          <img src="images/amit-gupta.jpeg" alt="" />
          <h6>Smit Kumar Gupta</h6>
          <p>School Chief/Principal</p>

          <div class="pro-links">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
          </div>
        </div>

        <div class="profile">
          <img src="images/dadi-raam-acharya.png" alt="" />
          <h6>Dadhi Raam Acharya</h6>
          <p>Administrative Chief</p>

          <div class="pro-links">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
          </div>
        </div>

        <div class="profile">
          <img src="images/Lekhi-subba.jpeg" alt="" />
          <h6>Lekhi Raaj Subba</h6>
          <p>Chairman</p>

          <div class="pro-links">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
          </div>
        </div>
      </div>
    </section>


   <!------- Start Footer --------->
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

  </body>
</html>

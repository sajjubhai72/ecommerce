<?php
// Include the database connection
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s_name = $_POST['fullName'];
    $f_name = $_POST['fatherName'];
    $m_name = $_POST['motherName'];
    $s_gender = $_POST['gender'];
    $s_dob = $_POST['dob'];
    $address = $_POST['address'];
    $e_mail = $_POST['email'];
    $mobile_number = $_POST['mobile'];
    $s_nationality = $_POST['nationality'];
    $s_class = $_POST['class'];
    $a_fee = $_POST['fee'];

    // File handling
    $s_photo_name = $_FILES['photo']['name'];
    $s_photo_tmp = $_FILES['photo']['tmp_name'];

    $nationality_photo_name = $_FILES['nationalityPhoto']['name'];
    $nationality_photo_tmp = $_FILES['nationalityPhoto']['tmp_name'];

    $tc_certificate_name = $_FILES['tcContainer']['name'];
    $tc_certificate_tmp = $_FILES['tcContainer']['tmp_name'];

    $s_marksheet_name = $_FILES['marksheetContainer']['name'];
    $s_marksheet_tmp = $_FILES['marksheetContainer']['tmp_name'];

    // Get the directory path of the current script
    $current_directory = __DIR__;
    

    // Navigate to the uploads directory from the current directory
    $uploads_dir = $current_directory . '/dashboard/admission/admission-data-upload/image/';
    
    // Move the uploaded files to the desired directory
    $s_photo_path = moveUploadedFile($s_photo_tmp, $uploads_dir, $s_photo_name);
    $nationality_photo_path = moveUploadedFile($nationality_photo_tmp, $uploads_dir, $nationality_photo_name);

    // Check the selected class to decide whether to upload TC and Marksheet
    if ($s_class !== 'nursery' && $s_class !== 'lkg' && $s_class !== 'ukg') {
        $tc_certificate_path = moveUploadedFile($tc_certificate_tmp, $uploads_dir, $tc_certificate_name);
        $s_marksheet_path = moveUploadedFile($s_marksheet_tmp, $uploads_dir, $s_marksheet_name);
    } else {
        // For Nursery, LKG, and UKG, set these paths to null or any default value
        $tc_certificate_path = null;
        $s_marksheet_path = null;
    }

    // Insert data into student_admission table
    $sql = "INSERT INTO admission (s_name, f_name, m_name, s_gender, s_dob, address, e_mail, mobile_number, s_nationality, s_class, a_fee, s_photo, nationality_photo, tc_certificate, s_marksheet)
            VALUES ('$s_name', '$f_name', '$m_name', '$s_gender', '$s_dob', '$address', '$e_mail', '$mobile_number', '$s_nationality', '$s_class', '$a_fee', '$s_photo_path', '$nationality_photo_path', '$tc_certificate_path', '$s_marksheet_path')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
            alert("Student admission form submitted successfully!");
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Function to move uploaded files to the desired directory
function moveUploadedFile($tmp_file, $target_directory, $file_name)
{
    $target_path = $target_directory . $file_name;

    if (move_uploaded_file($tmp_file, $target_path)) {
        // Store only the relative path in the database
        return './dashboard/admission/admission-data-upload/image/' . $file_name;
    } else {
        echo "File upload failed.";
        exit;
    }
}

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Admission Form</title>
  

    <link rel="apple-touch-icon" href="apple-icon.png">


    <link rel="stylesheet" href="./dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dashboard/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./dashboard/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="./dashboard/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>

  <div id="right-panel" class="right-panel">

    <!-------- Navigation Baar ------->
    <?php include "navbar.php" ?>

    <h1 style="text-align: center; padding-top: 40px;">Student Admission Form</h1>

    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><strong>Student </strong><small> Personal Details </small></div>

              <form name="" method="post" action="https://uat.esewa.com.np/epay/main" enctype="multipart/form-data">
                <div class="card-body card-block">
                  <div class="form-group">
                    <label for="fullName" class=" form-control-label">Student Full Name:</label>
                    <input type="text" name="fullName" value="" class="form-control" id="fullName" required="true">
                  </div>

                  <div class="form-group">
                    <label for="fatherName" class=" form-control-label">Father's Name:</label>
                    <input type="text" name="fatherName" value="" class="form-control" id="fatherName" required="true">
                  </div>

                  <div class="form-group">
                    <label for="motherName" class=" form-control-label">Mother's Name:</label>
                    <input type="text" name="motherName" value="" class="form-control" id="motherName" required="true">
                  </div>

                  <div class="form-group">
                    <label for="gender" class=" form-control-label">gender:</label>
                    <select id="gender" name="gender" class="form-control" required>
                      <option value="" disabled selected>Select Gender</option>  
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                                                                          
                                        
                  <div class="form-group">
                      <label for="dob" class=" form-control-label">Date of Birth:</label>
                      <input type="date" name="dob" value="" id="dob" class="form-control" required="true">
                  </div>

                  <div class="form-group">
                      <label for="email" class=" form-control-label">E-mail:</label>
                      <input type="email" name="email" value="" id="email" class="form-control" required="true">
                  </div>
                                        
                  <div class="row form-group">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="mobile" class=" form-control-label">Mobile Number:</label>
                        <input type="text" name="mobile" id="mobile" value="" class="form-control" required="true" maxlength="10" pattern="[0-9]+">
                      </div>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12">
                      <div class="form-group">
                      <label for="nationality" class=" form-control-label">Nationality:</label>
                          <select id="nationality" name="nationality" class="form-control" required>
                            <option value="" disabled selected>Select Nationality</option>
                            <option value="Nepal">Nepal</option>
                            <option value="India">India</option>
                            <option value="China">China</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Pakistan">Pakistan</option>
                          </select>
                      </div>
                    </div>
                  </div>
                                                    
                  <div class="row form-group"></div>
                  <div class="row form-group">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="city" class=" form-control-label">Student Address:</label>
                        <textarea type="text" name="address" id="address" value="" class="form-control" rows="4" cols="12" required="true"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

         <!---------------------------------------------------------->
         <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><strong>Student </strong><small> Proefessional Details</small></div>
              <div class="card-body card-block">                 

                <div class="row form-group">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="class" class=" form-control-label">Class:</label>
                      <select id="class" name="class" class="form-control" onchange="calculateFee(), toggleExtraFields(), validateForm()" required>
                        <option value="" disabled selected>Your Class</option>
                        <option value="nursery">Nursery</option>
                        <option value="lkg">LKG</option>
                        <option value="ukg">UKG</option>
                        <?php
                          // Assuming classes from 1 to 9
                          for ($i = 1; $i <= 9; $i++) {
                            echo "<option value=\"$i\">Class $i</option>";
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="card-body card-block">
                    <div class="row form-group">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="photo" class=" form-control-label">Student Photo:</label>
                          <input type="file" name="photo" value="" id="photo" class="form-control" required="true">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="card-body card-block">
                    <div class="row form-group">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="nationalityPhoto" class=" form-control-label">Student Nationality Photo:</label>
                          <input type="file" id="nationalityPhoto" name="nationalityPhoto" class="form-control" accept="image/*" required="true">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row form-group" id="tcContainer">
                  <div class="card-body card-block">
                    <div class="row form-group">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="tcContainer" class=" form-control-label">Student TC/Charactor:</label>
                          <input type="file" id="tcContainer" name="tcContainer" class="form-control" accept="image/*, .pdf, .doc, .docx">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row form-group" id="marksheetContainer">
                  <div class="card-body card-block">
                    <div class="row form-group">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="marksheetContainer" class=" form-control-label">Student Marksheet:</label>
                          <input type="file" id="marksheetContainer" name="marksheetContainer" class="form-control" accept="image/*, .pdf, .doc, .docx">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="card-body card-block">
                    <div class="row form-group">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="feeResult" class=" form-control-label">Fee:</label>
                          <input type="text" id="feeResult" name="fee" class="form-control" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <p style="text-align: center;">
                  <input value="100" name="tAmt" type="hidden">
                  <input value="90" name="amt" type="hidden">
                  <input value="5" name="txAmt" type="hidden">
                  <input value="2" name="psc" type="hidden">
                  <input value="3" name="pdc" type="hidden">
                  <input value="EPAYTEST" name="scd" type="hidden">
                  <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
                  <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
                  <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
                  <button type="submit" value="Submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                    <i class="fa fa-dot-circle-o"></i>  Submit Your Form
                  </button>
                </p>
                                                    
              </div>
              </form>
            </div>
          </div>
        </div><!-- .animated -->
      </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!------- Footer baar -------->
    <?php include "Footer.php" ?>

  </div><!-- Right Panel -->

  

  <script src="./dashboard/vendors/jquery/dist/jquery.min.js"></script>
  <script src="./dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="./dashboard/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="./dashboard/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
  <script src="./dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./dashboard/assets/js/main.js"></script>
  <script>
    function calculateFee() {
      var classSelect = document.getElementById("class");
      var feeResult = document.getElementById("feeResult");

      // Define fee values for each class
      var fees = {
        nursery: 250,
        lkg: 275,
        ukg: 300,
        // Assuming fees for classes 1 to 9 are the same, you can modify this accordingly
        1: 350,
        2: 375,
        3: 400,
        4: 475,
        5: 500,
        6: 525,
        7: 550,
        8: 575,
        9: 600
      };

            // Get the selected class value
            var selectedClass = classSelect.value;

            // Set the corresponding fee in the feeResult input
            feeResult.value = "Rs. " + fees[selectedClass];
    }

    function toggleExtraFields() {
        var selectedClass = document.getElementById('class').value;
        var tcContainer = document.getElementById('tcContainer');
        var marksheetContainer = document.getElementById('marksheetContainer');

        // Reset the display style
        tcContainer.style.display = 'block';
        marksheetContainer.style.display = 'block';

        // Hide extra fields for Nursery, UKG, and LKG
        if (selectedClass === 'nursery' || selectedClass === 'ukg' || selectedClass === 'lkg') {
            tcContainer.style.display = 'none';
            marksheetContainer.style.display = 'none';
        }
    }

    function validateForm() {
        // Your existing validation logic

        // Additional validation based on the selected class
        var selectedClass = document.getElementById('class').value;

        if (selectedClass !== 'nursery' && selectedClass !== 'ukg' && selectedClass !== 'lkg') {
            var tc = document.getElementById('tc').value;
            var marksheet = document.getElementById('marksheet').value;

            if (tc === '' || marksheet === '') {
                alert('TC and Marksheet are required for Class ' + selectedClass + '.');
                return false;
            }
        }

        return true;
    }
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
     var hash = CryptoJS.HmacSHA256("Message", "secret");
     var hashInBase64 = CryptoJS.enc.Base64.stringify(hash);
     document.write(hashInBase64);
</script>

</body>
</html>



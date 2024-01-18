<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- /.left-sidebar -->
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    <h2 class="title" align="center">Result Management System</h2>
                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title" style=" ">
                                                    <?php
                                                    $rollid=$_POST['rollid'];
                                                    $classid=$_POST['class'];
                                                    $_SESSION['rollid']=$rollid;
                                                    $_SESSION['classid']=$classid;
                                                    $qery = "SELECT   tblstudents.StudentName,tblstudents.FatherName,tblstudents.DOB,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=:rollid and tblstudents.ClassId=:classid ";
                                                    $stmt = $dbh->prepare($qery);
                                                    $stmt->bindParam(':rollid',$rollid,PDO::PARAM_STR);
                                                    $stmt->bindParam(':classid',$classid,PDO::PARAM_STR);
                                                    $stmt->execute();
                                                    $resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($stmt->rowCount() > 0)
                                                    {
                                                    foreach($resultss as $row)
                                                    {   ?>
                                                    <h5 style="text-align: center; font-weight: 800;">School Certificate Level</h5>
                                                    <h1 style="text-align: center; background: #e9ecef; font-weight: 800;">MARK SHEET</h1>
                                            <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
                                                <div class="col-1">
                                                <p><b>Student Name :</b> <?php echo htmlentities($row->StudentName);?></p>
                                                    <p><b>Student Roll Id :</b> <?php echo htmlentities($row->RollId);?></p>
                                                    <p><b>Student Class:</b> <?php echo htmlentities($row->ClassName);?>(<?php echo htmlentities($row->Section);?>)</p>

                                                </div>
                                                <div class="col-2">
                                                <p><b>Father's Name :</b> <?php echo htmlentities($row->FatherName);?></p>
                                                <p><b>Date Of Birth :</b> <?php echo htmlentities($row->DOB);?></p>
                                                <p><b>School Name :</b> Sunsari Technical College</P>

                                                </div>
                                            </div>
                                                    
                                                    <?php }

                                                    ?>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <table class="table table-hover table-bordered">
                                                
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" style="width: 5%; text-align: center;">S.N</th>
                                                            <th rowspan="2" style="width: 50%; text-align: center;">Subject</th>    
                                                            <th colspan="3" style="width: 45%; text-align: center;">Marks</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Full Marks</th>
                                                            <th>Pass Marks</th>
                                                            <th>Marks Obtained</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php                                              
                                                        // Code for result

                                                        $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectId,tblsubjects.SubjectName from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=:rollid and t.ClassId=:classid)";
                                                        $query= $dbh -> prepare($query);
                                                        $query->bindParam(':rollid',$rollid,PDO::PARAM_STR);
                                                        $query->bindParam(':classid',$classid,PDO::PARAM_STR);
                                                        $query-> execute();  
                                                        $results = $query -> fetchAll(PDO::FETCH_OBJ);
                                                        $cnt=1;
                                                        if($countrow=$query->rowCount()>0)
                                                        { 

                                                        foreach($results as $result){

                                                        ?>

                                                		<tr>
                                                            <th scope="row"><?php echo htmlentities($cnt);?></th>
                                                			<td><?php echo htmlentities($result->SubjectName);?></td>
                                                            <td>100</td>
                                                            <td>40</td>
                                                			<?php
    $subjectMarks = $result->marks;
    $failColor = ($subjectMarks < 40) ? 'background-color: #7e7c87; color: white;' : '';
?>
<td style="<?php echo $failColor; ?>"><?php echo htmlentities($totalmarks = $subjectMarks); ?></td>

                                                		</tr>
                                                        
                                                        <?php 
                                                        $totlcount+=$totalmarks;
                                                        $cnt++;}
                                                        ?>

                                                         <tr>
                                                            <th scope="row" colspan="2" style="text-align: right;">Total Marks</th>
                                                            <th><?php echo htmlentities($outof=($cnt-1)*100); ?></th>
                                                            <th></th>
                                                            <td><b><?php echo htmlentities($totlcount); ?></b></td>
                                                        </tr>
                                                        

                                                        <?php } else { ?>     
                                                        <div class="alert alert-warning left-icon-alert" role="alert">
                                                            <strong>Notice!</strong> Your result not declare yet
                                                            <?php }?>
                                                        </div>

                                                        <?php } else{?>

                                                        <div class="alert alert-danger left-icon-alert" role="alert">Not! Record Found!!!!</strong>
                                                            <?php
                                                            echo htmlentities("");
                                                             }
                                                            ?>
                                                        </div>
                                                    </tbody>
                                                </table>
                                                <div class="main-re" style="display: flex; justify-content: space-between; padding: 0 60px">
                                                    <div class="sub-re">
                                                        <p><b>Abs</b>=Absent</p>
                                                        <p><b>CL</b>=Cancelled</p>
                                                        <p><b>NQ</b>=Not Qualified</p>
                                                    </div>
                                                    <div class="sub2-re">
                                                    <p>Result:<b>
    <?php
    // Check if any subject has marks less than 40
    $failed = false;
    foreach ($results as $result) {
        if ($result->marks < 40) {
            $failed = true;
            break; // No need to check further once failed is detected
        }
    }

    // Display result based on the failed flag
    if ($failed) {
        echo 'Failed';
    } else {
        echo 'Passed';
    }
    ?>
</b></p>
                                                        <p>Percntage: <b> <?php echo  htmlentities($totlcount*(100)/$outof); ?> %</b></p>
                                                        <p>Division:<b>
                                                        <?php
                                                            // Determine division based on percentage
                                                            if (($totlcount*(100)/$outof) >= 80) {
                                                                echo 'Distinction';
                                                            } elseif (($totlcount*(100)/$outof) >= 60) {
                                                                echo 'First Division';
                                                            } elseif (($totlcount*(100)/$outof) >= 45) {
                                                                echo 'Second Division';
                                                            } elseif (($totlcount*(100)/$outof) >=32) {
                                                                echo 'Third Division';
                                                            }else {
                                                                echo 'Not Found Division';
                                                            }
                                                            ?>
                                                        </b></p>
                                                    </div>
                                                </div>  
                                                <span style="font-size: 10px;"><b><strong>NOTE:</strong> This is not for official use. If any mistakes on the marksheet, it will be corrected according to the original record of school, the Office of the Controller of Examinations.</b></span>         
                                                        <br>    <b style="border: 1px solid; padding: 5px; background: rgb(21, 21, 100); color: #fff;"><a href="download-result.php">Download </a> </b>
                                                        

                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <a href="find-result.php">Back to Home</a>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->
                    </div>
                    <!-- /.main-page -->
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>

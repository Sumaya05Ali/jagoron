<?php
	session_start();
	
	//create database connection
	include("../../query/connect_db.php");
	
	//blank var
	$getsessionID = '';
	
	//call session data
	if(isset($_COOKIE['sessionid'])){
		//get session id from browser and update variable
		$getsessionID = $_COOKIE['sessionid'];
	}
	//set the validity mode for session data
	$validity = "valid";	
	//verify session id
	if(mysqli_num_rows(mysqli_query($con, "select * from sessions where session_id='$getsessionID' AND validity='$validity'")) <= 0){
		
	}

    $userid = $_SESSION['userid'];
    if ($conn->query("SELECT * FROM registration WHERE id='$userid' AND user_type='lawyer'")->num_rows > 0) {
        // output data of each row
        if($row = $conn->query("SELECT username FROM registration WHERE id='$userid'")->fetch_assoc()) {
                // Do nothing
        }
    } else {
        echo "A Regular User Can't Access this Page.";
        exit();
    }


    $message = '';

    $userid = $_SESSION['userid'];
    $sql_q = "   SELECT * 
                FROM registration
                INNER JOIN lawyer
                ON lawyer.user_id =  registration.id
                WHERE registration.id='$userid'
            ";

    if (mysqli_num_rows(mysqli_query($conn, $sql_q)) > 0) {
        // output data of each row
        if($row = mysqli_fetch_assoc(mysqli_query($conn, $sql_q))) {
            $lawyer_name = $row['lawyer_name'];
            $lawyer_pp = $row['p_p'];
            $lawyer_info = $row['lawyer_info'];
            $case_details = $row['case_details'];
            $lawyer_email = $row['lawyer_email'];
        }
    } else {
        echo "<b>Something Went Wrong!</b>";
    }


    // check if the form has been submitted
    if(isset($_POST['submit'])) {

        // get form data
        $userid = $_COOKIE['userid'];
        $lawyer_name = $_POST['inputUsername'];
        $lawyer_email = $_POST['inputEmailAddress'];
        $lawyer_info = $_POST['inputBio'];
        $case_details = $_POST['inputCaseDetails'];

        // check if an image has been uploaded
        if(isset($_FILES['formFile']) && !empty($_FILES['formFile']['name'])) {

            // delete the old image
            $old_image = "../../assets/img/" . $row['p_p'];
            if(file_exists($old_image)) {
                unlink($old_image);
            }

            // upload the new image
            $file_name = $_FILES['formFile']['name'];
            $file_tmp = $_FILES['formFile']['tmp_name'];
            $file_type = $_FILES['formFile']['type'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $extensions = array("jpeg", "jpg", "png");
            if(in_array($file_ext, $extensions)) {
                $new_image = "../../assets/img/" . $file_name;
                move_uploaded_file($file_tmp, $new_image);
            } else {
                echo "Only JPEG, JPG, and PNG files are allowed.";
                $message = "Only JPEG, JPG, and PNG files are allowed.";
                header('Location: edit_profile.php?msg='.$message);
            }
        } else {
            $new_image = $row['p_p'];
        }

        // update the database
        $sql_u = "UPDATE lawyer SET 
                    lawyer_name='$lawyer_name', 
                    p_p='$new_image', 
                    lawyer_info='$lawyer_info', 
                    case_details='$case_details', 
                    lawyer_email='$lawyer_email'
                WHERE user_id='$userid'";

        if(mysqli_query($conn, $sql_u)) {
            //echo "Record updated successfully";
            $message = 'Updated Successfully';
            header('Location: edit_profile.php?msg='.$message);
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    $messageEcho = '';
    if(isset($_GET['msg'])){
        $messageEcho = $_GET['msg'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/edit_profile.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Edit Profile</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="#!">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"></div>
                                Go to dashboard
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></div>
                                Edit your profile
                            </a>
                            <a class="nav-link" href="../../index.php">
                                <div class="sb-nav-link-icon"></div>
                                Back to Jagoron
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"></div>
                                
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>

                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></div>
                                
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">
                        <?php
                            $userid = $_COOKIE['userid'];
                            if ($conn->query("SELECT username FROM registration WHERE id='$userid'")->num_rows > 0) {
                                // output data of each row
                                if($row = $conn->query("SELECT username FROM registration WHERE id='$userid'")->fetch_assoc()) {
                                    echo "<span>Welcome <strong>".$row['username']."</strong></span><br>";
                                }
                            } else {
                                echo "<b>Something Went Wrong!</b>";
                            }
                            ?>
                    
                            <a style="float: right; color: white;" class="button-10" href="../../logout.php">Logout</a>

                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 ">
                        <h1 class="mt-4">Profile Edit</h1>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header" align="center">
                                <i class="fas fa-table me-1"></i>
                                Edit Your Profile
                            </div>
                            <div class="container-xl px-4 mt-4">
                            <!-- Account page navigation-->
                            <!--<nav class="nav nav-borders">
                                <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
                                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
                                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
                                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
                            </nav>-->
    <script>
        function previewImage() {
        // get the input file element
        const input = document.getElementById('formFile');

        // get the preview image element
        const preview = document.getElementById('preview');
        const labelImage = document.getElementById('labelImage2');
        
        // read the selected file
        const file = input.files[0];
        
        // create a FileReader to read the file
        const reader = new FileReader();

        // set the function to be executed when the file is read
        reader.onload = function(e) {
            preview.src = e.target.result; // set the source of the preview image
            //preview.style.display = "block"; // show the preview image
            labelImage.innerHTML = "Please Save Changes!";
        }

        // read the file as a data URL
        reader.readAsDataURL(file);

        }
    </script>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">

            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="../../assets/img/<?= $lawyer_pp; ?>" id="preview" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <label class="btn btn-danger" for="formFile" id="labelImage" class="form-label ">Upload New Image</label></br>
                    <small id="labelImage2" class="form-label"></small>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <!-- START FORM -->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="">
                        <input class="form-control" type="file" id="formFile" name="formFile" onchange="previewImage();" hidden/>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Change user name</label>
                            <input class="form-control" id="inputUsername" name="inputUsername" value="<?= $lawyer_name; ?>" type="text" placeholder="Enter your username">
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Change Email address</label>
                            <input class="form-control" id="inputEmailAddress" name="inputEmailAddress" value="<?= $lawyer_email; ?>" type="email" placeholder="Enter your email address">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Change Bio</label>
                            <textarea class="form-control" id="inputEmailAddress" name="inputBio" placeholder="Enter Bio" style="height:200px;"><?= $lawyer_info; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Change Case Details</label>
                            <input class="form-control" id="inputEmailAddress" name="inputCaseDetails" value="<?= $case_details; ?>" type="text" placeholder="Enter Case details">
                        </div>
                        <!-- Form Row-->
                        <!-- Save changes button-->
                        <button class="btn btn-danger" name="submit" type="submit">Save changes</button>
                        </br>
                        <b style="color: green"><?= $messageEcho; ?></b>
                    </form>
                </div>
            </div>
        </div>
        <!-- END FORM -->
    </div>
</div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto" style="position: fixed;bottom: 0;left: 88vh;right: 40vh;height: 57px;max-width: 285px;">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright (c) 2023 by team Jagoron. </div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

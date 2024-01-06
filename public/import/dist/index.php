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

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lawyer Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Jagoron(Lawyer Panel)</a>
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
                        
                        <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
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
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="edit_profile.php">
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
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">401 Page</a>
                                            <a class="nav-link" href="#">404 Page</a>
                                            <a class="nav-link" href="#">500 Page</a>
                                        </nav>
                                    </div>
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
 
                        
                        <?php
                            $userid = $_SESSION['userid'];
                            if ($conn->query("SELECT * FROM registration WHERE id='$userid' AND user_type='lawyer'")->num_rows > 0) {
                                // output data of each row
                                if($row = $conn->query("SELECT username FROM registration WHERE id='$userid'")->fetch_assoc()) {
                                    ?>
                                    
                                    <?php
                                }
                            } else {
                                echo "<center><h1>A User Can't Access this Page.</h1></center>";
                                exit();
                            }
                        ?>


                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Requested Appointment List 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Crime</th>
                                            <th>Appointment Date</th>
                                            <th>Time</th>
                                            <th>Lawyer ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Crime</th>
                                                <th>Appointment Date</th>
                                                <th>Time</th>
                                                <th>Lawyer ID</th>
                                                <th>Action</th>
                                            </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

                                        $currentUser = $_COOKIE['userid']; 
                                        $CurrentUserLawyerID = mysqli_fetch_assoc(mysqli_query($conn, " SELECT * FROM `lawyer` 
                                                                                                        INNER JOIN `registration` 
                                                                                                        ON `registration`.`id` = `lawyer`.`user_ID` 
                                                                                                        WHERE `lawyer`.`user_ID`='$currentUser'"))['lawyer_ID'];


                                        $sql = "SELECT * FROM appoinment WHERE `lawyer_ID`='$CurrentUserLawyerID'";
                                        $result = mysqli_query($con, $sql);
                                        while($rows = mysqli_fetch_assoc($result)){     
                                    ?>
                                        <tr>
                                            <td><?= $rows['user_name'];?></td>
                                            <td><?= $rows['email'];?></td>
                                            <td><?= $rows['phone'];?></td>
                                            <td><?= $rows['crime_name'];?></td>
                                            <td><?= $rows['appointment_date'];?></td>
                                            <td>
                                                <?php 
                                                    
                                                    $slot = $rows['time_slot'];
                                                    $string = $slot;

                                                    if (preg_match('/^\d{1,2}:\d{2}$/', $string)) {
                                                        // string matches pattern
                                                        $time = $rows['time_slot'];
                                                        $twelve_hour_time = date("g:i A", strtotime($time));
                                                        echo 'From '.$twelve_hour_time;
                                                    } else {
                                                        // string does not match pattern
                                                            // Select lawyer_ID and lawyer_name from the lawyer table
                                                            
                                                                $sql = "SELECT * FROM time_slot WHERE id='".$rows['time_slot']."'";
                                                                                                            
                                                                $result = mysqli_query($conn, $sql);
                
                
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    $start_time = $row['start_time'];
                                                                    $end_time = $row['end_time'];
                                                                    echo $start_time . ' - ' . $end_time;
                                                                }
       
                                                    }

                                                ?>
                                            </td>
                                            <td><?= $rows['lawyer_ID'];?></td>
                                            <td>
                                                <form action="form_action.php?action=appointment&id=">
                                                    <button type="button" onclick="customAlert('Request Accepted!', 'green'); this.nextElementSibling.remove(); this.innerHTML='Accepted!';" name="accept" class="btn btn-success">Accept</button> 
                                                    <button type="button" onclick="customAlert('Request Declined!', 'red'); this.parentElement.parentElement.parentElement.remove();" name="decline" class="btn btn-danger">Decline</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
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
        <div class="alertw3" id="alertBox" style="display:none;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <span id="alertw3-innertext">This is an alert box.</span>
        </div>
        <script>
            function customAlert(text, color){
                clearTimeout(elem);
                document.getElementById('alertBox').style.display = "inherit";
                document.getElementById('alertBox').style.backgroundColor = color;
                document.getElementById('alertw3-innertext').innerHTML = text;
                var elem = setTimeout(function(){document.getElementById('alertBox').style.display = "none";}, 3000);
            }
        </script>
        <style>
            /* The alert message box */
            .alertw3 {
                position: fixed;
                padding: 20px;
                background-color: #f44336;
                color: white;
                margin-bottom: 15px;
                bottom: 2px;
                right: 14px;
            }

            /* The close button */
            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            /* When moving the mouse over the close button */
            .closebtn:hover {
                color: black;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

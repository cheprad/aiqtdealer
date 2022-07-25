<?php
	require("connect.php");
	require("authen.php");
	checkadmin();
	
    if(isset($_POST['edit_user'])){
        $firstname = mysql_real_escape_string($_POST['firstname']);
        $lastname = mysql_real_escape_string($_POST['lastname']);
        $email= mysql_real_escape_string($_POST['email']);
        $telnum= mysql_real_escape_string($_POST['telnum']);
        $userrole= mysql_real_escape_string($_POST['userrole']);
	}
   
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	
    <?php 
		include("header.php"); 
	?>

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Settings</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">

						Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="help.html">Learn more</a></div>
						<br>
						<?php 
							echo '<h3 class="section-title">time : ';
							echo $todate ;
							echo '</h3>';
						?>
	                </div>
	                <div class="col-12 col-md-8">
						
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								
							    <form class="settings-form" action="admin_user_detail_edit_db.php" method="post">
								
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">ชื่อจริง</label>
										<?php 
											echo '<input name="firstname" type="text" class="form-control" id="setting-input-1" value="'.$firstname.'">';
										?>
										
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">นามสกุล</label>
									    <?php 
											echo '<input name="lastname" type="text" class="form-control" id="setting-input-1" value="'.$lastname.'" >'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">email</label>
									    <?php 
											echo '<input name="email" type="email" class="form-control signin-email" placeholder="Email address"  value="'.$email.'" >'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">เบอร์โทรศัพท์</label>
									    <?php 
											echo '<input name="telnum" type="text" class="form-control" id="setting-input-1" value="'.$telnum.'" >'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">สถานะ</label>
									    <?php 
											// echo '<input name="userrole" type="text" class="form-control" id="setting-input-1" value="'.$userrole.'" >';
                                            echo '<select id="userrole" name="userrole">';
                                            echo '<option value="'.$userrole.'">'.$userrole.'</option>';
                                            echo '<option value="user">user</option>';
                                            echo '<option value="applicant">applicant</option>';
                                            echo '</select>';
										?>
									</div>
									
									<button name="edit_user" type="submit" class="btn app-btn-primary" >แก้ไข</button>
									<!-- <button name="add_shop" type="submit" class="btn app-btn-primary" >บันทึก</button> -->
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
						
	                </div>
                </div><!--//row-->
                
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		    </div>
	    </footer><!--//app-footer-->
    </div><!--//app-wrapper-->    					
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 


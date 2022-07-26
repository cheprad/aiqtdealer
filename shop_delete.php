<?php 
// session_start();
require("authen.php");
require("connect.php");
isset($_GET['sid'])? $sid = $_GET['sid'] : $sid = '';

if(!empty($sid)){
    $sql = "DELETE FROM shop WHERE shopid=$sid;";
    $query = mysql_query($sql,$conn);
	}

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Dealer - Admin dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Dealer - Admin dashboard">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	
    <?php include("header.php") ?>
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Settings</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="help.html">Learn more</a></div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="index.php">
									<div class="alert alert-success" role="alert">
										ลบข้อมูลสำเร็จ
									</div>

								    <!-- <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Business Email Address</label>
									    <input type="email" class="form-control" id="setting-input-3" value="hello@companywebsite.com" disabled>
									</div> -->
									<button type="submit" href="index.php" class="btn app-btn-primary"> home </button>
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
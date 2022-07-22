<?php
	require("connect.php");
	isset($_GET['sid'])? $sid = $_GET['sid'] : $sid = '';
	if(!empty($sid)){
		$sql = "SELECT * FROM `shop` WHERE `shopid` = $sid";
		$result = mysql_query($sql,$conn);
            
		// print_r($_SESSION);
		if (mysql_num_rows($result)==1){
			$fetch_result = mysql_fetch_assoc($result);
			$shopid = $fetch_result["shopid"];
			$shopname = $fetch_result["shopname"];
			$shopdetail = $fetch_result["shopdetail"];
		}
		// ดึง codegen เพื่อใช้งาน
		$todate = date("Y-m-d");
		$sid = 6;
	
		$queryCode = "SELECT * FROM aiqtdealer.gencode WHERE codedate = '$todate' AND shopid = '$sid' ";
		$result_queryCode = mysql_query($queryCode,$conn);
		while ($row = mysql_fetch_assoc($result_queryCode)) { 
			$data[] = $row; 
		} 

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
								
								<div class="mb-3 ">
									<label for="setting-input-2" class="form-label">code ประจำวันนี้</label>
									<form action="">
										<div class="mb-3 ">
											<?php 
												if (mysql_num_rows($result)==1){ 
													// echo 'get : ';
													// echo mysql_num_rows($result);
													echo ' the code : ';
													print_r($data);
													foreach ($data as $value) {
														$codegen = $value['codegen'];
														$codedate = $value['codedate'];
													}	
													if ($codedate==$todate){
														echo "เท่ากัน";
													} else {
														echo "ไม่เท่าจ้า";
														echo "<br> codedate = ";
														echo $codedate;
														echo "<br> todate = ";
														echo $todate ;
													}
													
												}
												echo '<input type="text" class="form-control" id="setting-input-1" value="'.$codegen.'" disabled>'
											?>
											<br>
											<button name="edit_shop" type="submit" class="btn app-btn-primary" >generate</button>
										</div> <!-- mb-3 -->  
										
									</form>
								</div>
								
									
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
						<br>
						
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								<?php 
							    	echo '<form class="settings-form" action="shop_edit.php?shopid='.$shopid.'&shopdetail='.$shopdetail.'&shopname='.$shopname.'"method="post">'
								?>
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">ชื่อร้าน<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
										<circle cx="8" cy="4.5" r="1"/>
										</svg></span></label>
										<?php 
											echo '<input type="text" class="form-control" id="setting-input-1" value="'.$shopname.'" disabled>';
											echo '<input  name="shopid"  type="hidden"class="form-control" id="setting-input-1"  required="required" value="';
											echo $shopid ;
											echo '">';
										?>
										
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">ข้อมูลร้านค้า</label>
									    <?php 
											echo '<input type="text" class="form-control" id="setting-input-1" value="'.$shopdetail.'" disabled>'
										?>
									</div>
									
									<button name="edit_shop" type="submit" class="btn app-btn-primary" >แก้ไข</button>
									<?php 
										echo '<a class="btn btn-danger href="shop_delete.php?sid='.$shopid.'" onClick="return confirm(\'ต้องการจะลบข้อมูลร้านหรือไม่?\')">ลบร้าน</a>';
									?>
									
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


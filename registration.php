<?php
ob_start();
session_start();
require('configdb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Leapcoin</title><meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />



<style type="text/css">
 	.widget-title{
 		background-color: blue;
 	}
</style>
</head>
<body>

<!--Header-part-->
<div id="header" style="background-color:  #0000b3;">
<img src="img/goldleap.png" style="margin-left: 50px; margin-top: 5px;">
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->

<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li"><button class="btn btn-primary"  style="margin-left:-290px;"><i class="icon icon-signal" style="color: white; padding-left: 10px;"></i>JOIN OUR TELEGRAM CHANNEL</button></li>
                        

  </ul>
</div>


<div id="sidebar" style="background-color:#1919ff;"><a href="#" class="visible-phone"><i class="icon icon-home"></i>MENU</a>
  <ul>
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span style="font-size: 15px;">Dashboard</span></a> </li>
    <li> <a href="distribution.php"><i class="icon icon-signal"></i> <span style="font-size: 15px;">Distribution</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span style="font-size: 15px;">ICO Site</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span style="font-size: 15px;">White Paper</span></a></li>

    <li style="float: right"><a href="login.php"><span style="font-size: 15px;">Login</span></a></li>
    <li style="float: right"><a href="register.php"><span style="font-size: 15px;">Sign Up</span></a></li>
    

    
   
   
  </ul>
</div>

<div id="content">
  <div id="content-header">
    
  </div>
    
      <div class="container">
      
          <div class="row">
        
              <div class="span3">
  
              </div>

              <div class="span6">
                    <div class="widget-box">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-info-sign"></i>                  
                </span>
                <h5 style="color: white;">Signup</h5>
              </div>
              <div class="widget-content nopadding">
                <form id="form-wizard" class="form-horizontal" action="registration.php" method="post">
                  <div id="form-wizard-1" class="step">
                                    
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo isset($_POST['email'])? $_POST
                                                ['email']: ''; ?>" >
                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Firstname</label>
                                        <div class="controls">
                                      <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']: ''; ?>" >
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Lastname</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter Lastname" name="lastname" id="lastname" value="<?php echo isset($_POST['lastname'])? $_POST['lastname']: ''; ?>" >
                                        </div>
                                    </div>
                                   <div class="control-group">
                                      <label class="control-label">Password</label>
                                      <div class="controls">
                                        <input id="password" type="password" placeholder="Enter Password" name="password" />
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label">Confirm Password</label>
                                      <div class="controls">
                                        <input id="password2" type="password" placeholder="Re-enter Password" name="password2" />
                                      </div>
                                    </div>
                                    <div class="form-actions">
                                      
                                        <input type="submit" name="register" value="Register" class="btn btn-primary" style="width: 95px; height: 35px; font-size: 18px; font-weight: bold">
                                       
                                     
                                    	<button class="btn btn-success" style="width: 95px; height: 35px; margin-left: 20px; font-weight: bold; font-size:18px;5"><a href="login.php">Login</a></button>

                                        
                                    </div>
                                  </div>
                                </form>
              </div>
            </div>  
              </div>
            

              <div class="span3">
          
              </div>


              <?php
              	if(isset($_POST['register'])){
              		$email=$_POST['email'];
              		$firstname=$_POST['firstname'];
              		$lastname=$_POST['lastname'];
              		$password=$_POST['password'];
              		$confirm_password=$_POST['password2'];
              		$datetime = date("Y-m-d H:i:s"); 

              		if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password) && !empty($confirm_password)){

              			if($password == $confirm_password){

              				if(isset($_POST['email'])){
              					$query="SELECT * FROM user WHERE email='$email'";
              					$query_run=mysqli_query($mysqli,$query_run);
              						if(mysqli_num_rows($query_run)>0){
              							echo "<script>alert('Email Already Exist')</script>";
              						}else{
              							$query="INSERT INTO user(email,firstname,lastname,password,datetime) VALUES('$email','$firstname','$lastname','$password','$datetime')";

              							$query_run=mysqli_query($mysqli,$query);

              							if($query_run){
              								echo "<script>alert('registration succesful')</script>";
              							}else{
              								echo "<script>alert('fail to register')</script>";
              							}
              						}
              				}else{

              				}

              			}else{
              				echo "<script> alert('Password does not Match')</script>";
              			}

              		}else{
              			echo "<script> alert('All field are required')</script>";
              		}
              	}else{
              		
              	}
              ?>


          </div>
        </div>
    </div>
</div>
<div class="row-fluid">
      <div id="footer" class="span12"> <p style="font-size: 16px;">Copyright © Leapcoin Repair 2018</p>
 </div>
    </div>

     <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.calendar.js"></script> 
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>

</html>

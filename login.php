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
                <h5>Login</h5>
              </div>
              <div class="widget-content nopadding">
                <form id="form-wizard" class="form-horizontal" action="login.php" method="post">
                      <div id="form-wizard-1" class="step">
                                    
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo isset($_POST['email'])? $_POST
                                                ['email']: ''; ?>" >
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                      <label class="control-label">Password</label>
                                      <div class="controls">
                                        <input type="password" placeholder="Enter Password" name="password" id="password" />
                                      </div>
                                    </div>
                                   <a href="#"><p style="margin-left: 10px;">Forgot password?</p></a>
                                    <div class="form-actions">

                                      
                                      
                                        <a href="registration.php" style="color: blue; font-weight: bold; font-size: 20px;">Register</a>
                                        <input type="submit" name="login_button" value="Login" class="btn btn-success" style="width: 95px; margin-left: 30px; font-weight: bold; font-size:16px; height: 35px;">
                                    
                                        
                                    </div>
                               </div>
                        </form>

              </div>
            </div>  
              </div>
            

              <div class="span3">
          
              </div>

              <?php
                if(isset($_POST['login_button'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];

                      if(!empty($email) && !empty($password)){
                          $query="SELECT * FROM user WHERE email='$email'";
                          $query_run=mysqli_query($mysqli,$query);
                            if(mysqli_num_rows($query_run)==0){
                            echo "<script> alert('Wrong Email Address')</script>";
                            }else{
                            }
                            $query="SELECT * FROM user WHERE password='$password'";
                            $query_run=mysqli_query($mysqli,$query);
                              if(mysqli_num_rows($query_run)==0){
                                  echo "<script> alert('Password Wrong')</script>";
                              }else{
                                $query="SELECT * FROM user WHERE email='$email' AND password='$password'";
                                $query_run=mysqli_query($mysqli,$query);
                                  if(mysqli_num_rows($query_run)>0){
                                    $_SESSION['email']=$email;
                                    header("Location:logindashboard.php");
                                  }else{
                                    echo "<script> alert('Login Error')</script>";
                                  }

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

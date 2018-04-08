<?php
  ob_start(); // it is use to cancel any other OUTPUT that might cause HEADER() not to display
  
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


<div id="sidebar" style="background-color:#1919ff;"><a href="#" class="visible-phone" style="background-color:#1919ff;">MENU</a>
  <ul style="background-color:#1919ff;">
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span style="font-size: 15px;">Dashboard</span></a> </li>
    <li> <a href="distribution.php"><i class="icon icon-signal"></i> <span style="font-size: 15px;">Distribution</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span style="font-size: 15px;">ICO Site</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span style="font-size: 15px;">White Paper</span></a></li>

         <li style="float: right; background-color: #1919ff;">
                     <a style="color: white;"><b style="font-size: 15px;"><?php if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                            echo ' <i class="icon icon-user" style="padding-right: 8px; float:left"></i><li style="float:right;background-color: #1919ff;">
                                    <form action="dashboard.php" method="POST" role="form">
                                        <button type="submit" name="logout" style="color:white; background-color: #1919ff; font-size: 15px; font-weight:bold; border:1px solid #1919ff">Logout</button>
                                    </form>
                                </li>';
                                if(isset($_POST['logout'])){
                                        session_destroy();
                                        header("location:dashboard.php");
       
                                }else{
                                    
                                }               
                      }else{
                        echo '<li style="float: right; background-color: #1919ff; color:white">
                              <a href="registration.php"><span style="font-size: 15px;">Sign Up</span></a> |
                                   <a href="login.php"><span style="font-size: 15px;">Login</span></a>
                                </li>';
                      }?></b> </a>                     
      </li>
    
   
   
  </ul>
</div>

<div id="content">
  <div id="content-header">
    
  </div>
  
  <div class="container">
    
    <div class="row">
      
     <div class="span8">
        <div class="widget-box">
          
          <div class="widget-content">
                    <center>
                                    <p style="color:#024fa4; font-size: 26px;">Welcome to Leapcoin</p><br/>

                                    <p style="font-size: 17px;">Thank you for your interest in purchasing LPC tokens.</p>
                                </center>
          </div>
        </div>
      </div>

          <div class="span4">
        <div class="widget-box">
          
          <div class="widget-content">
                 <center>

                                    <p style="color:#024fa4;  font-size: 28px;">Tokens Raised</p>
                                    <br/>

    

                                    <div style="background-color: #e9e9e9; height: 50px;">
                                        <p style="font-size: 17px; color:#024fa4; margin-top: 16px; position: absolute; margin-left: 75px;">2712 of 6000 LPC</p>
                                     </div>
                                    <br/>

                                    <p style="color:#024fa4; font-size: 27px;">Sale Ends</p><br/>

                                 
                                </center>

                                <center>
                                
                            <?php include("countdown.php");?>
                              </center>



          </div>


        </div>
         <a href="registration.php"><button class="btn btn-warning btn-large" style="width: 100%; height:60px; border-radius: 3px;">SIGN UP</button></a>
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

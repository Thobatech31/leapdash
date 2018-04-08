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
            <link rel="stylesheet" href="modal.css">



<style type="text/css">
      #modal1{
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.6);
    
    top: 100%;
    right: 0;
    bottom: 0;
    left: 0%;
   
    display: none;
}

.modal_view1{
    width: 100%;
    height: 150px;
   
    background-color: #fff;
   margin-top: -540px;
  
}

.closesign1{
    float: right;
    padding:10px 15px;
    cursor:pointer;
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

    <li style="float: right">
                    <form action="finalstage.php" method="POST" role="form">
                        <button type="submit" name="logout" class="btn-big" style="background-color:#1919ff; color: white; border:2px solid #1919ff; font-weight: bold; font-size: 16px;">Logout</button>                    
                    </form>
                </li>


    <li style="float: right">
                  <a><b style="font-size: 15px;"><i class="icon icon-user" style="padding-right: 8px;"></i><?php echo $_SESSION['email']?></b></a>

                            

                            <?php
                                    if(isset($_POST['logout'])){
                                        session_destroy();
                                        header("location:index.php");
       
                                }
                            ?>  
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
                                    <p style="color:#024fa4; font-size: 26px;">Welcome to Leapcoin </p><br/>

                                    <p style="font-size: 17px;">Thank you for your interest in purchasing LPC tokens.</p>
                                </center>
          </div>
        </div>
                                 
                           <div class="widget-box">
                                  <center><br/>
                                    <p style="font-size: 17px;">Let us know where you are investing from</p>

                              
                                       <button class="btn btn-primary btn-large" style="width: 95%; height:70px; border-radius: 3px;" onclick="openModal1()">NON-US INVESTOR</button>
                                    </center>
                                    <br/><br/>
                            </div>
      </div>

          <div class="span4">
        <div class="widget-box">
          
          <div class="widget-content">
                 <center>

                                    <p style="color:#024fa4;  font-size: 28px;">Tokens Raised</p>
                                    <div class="progress progress-striped active" style="margin-top: 10px;">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 45%; height: 10px;">
                                             <span class="sr-only">45% Complete</span>
                                         </div>
                                    </div><br/>

    

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


 <section id="modal1">
    <div class="modal_view1">
      <div class="container">
      
          <div class="row">
        
              <div class="span3">
          
              </div>

             <div class="span6" style="margin-top: -305px;">
                <div class="widget-box">
                 
                    <div class="widget-content nopadding fix_hgt" style="height: 330px;">
                      <ul class="recent-posts">
                          <center>
                              <h3 style="color:#024fa4; margin-top: 10px; font-size: 18px;">Disclosure and Private Placement Memorandum</h3>
                          </center>

                        
                          
                          <form action="jgfjgjghjg.php" method="POST">  
                            <div class="control-group" style="margin-left: 20px;">
                              <div class="controls">
                                <label style="font-size: 16px;">
                                  <input type="checkbox" name="radio1" />      
                                     I certify that I have checked my local, federal and other applicable laws thoroughly and I am legally able to invest in a US company to receive securities in the form of tokens.</label>
                                <label style="font-size: 16px;">
                                  <input type="checkbox" name="radio2" />                       
                                    I understand that I must carefully review the Private Placement Memorandum once it is made available. I understand that it lists some of the risks involved in investing in LPC’s Repair, Inc.</label>
                                
                              </div>
                            </div>
                        

                    
                                        <center>
                                              <div class="form-actions"> 
                                                  <input type="submit" value="CANCEL" class="btn btn-warning" class="closesign1" onclick="closeModal1()" style="width: 95px;">
                                                  <input type="submit" name="submit1" value="SUBMIT" class="btn btn-primary" style="width: 95px; margin-left: 20px;">       
                                            </div>
                                        </center>
                                          
                            </div>
                         </form>
                      </ul>

                </div>
              </div>
            

              <div class="span2">
          
              </div>

          </div>
        </div>
    </div>
  </section>




<div class="row-fluid" style="background-color: white;">
      <div id="footer" class="span12"> <p style="font-size: 16px;" >Copyright © Leapcoin Repair 2018</p>
 </div>
    </div>
<script type="text/javascript">

</script>

    <script type="text/javascript" src="modal1.js"></script> 

    <script type="text/javascript" src="modal22.js"></script> 

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

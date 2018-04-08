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


<div id="sidebar" style="background-color:#1919ff;"><a href="#" class="visible-phone"><i class="icon icon-home"></i>MENU</a>
  <ul>
    <li><a href="dashboard.php"><i class="icon icon-home"></i> <span style="font-size: 15px;">Dashboard</span></a> </li>
    <li> <a href="distribution.php"><i class="icon icon-signal"></i> <span style="font-size: 15px;">Distribution</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span style="font-size: 15px;">ICO Site</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span style="font-size: 15px;">White Paper</span></a></li>

     <li style="float: right">
                    <form action="logindashboard.php" method="POST" role="form">
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
                                    <p style="color:#024fa4; font-size: 26px;">Welcome to Leapcoin Repair!</p><br/>

                                    <p style="font-size: 17px;">Thank you for your interest in purchasing LPC tokens.</p>
                                </center>



          </div>
        </div>

        <div class="row-fluid">
            <div class="widget-box">
              <div class="widget-title" style="background-color:  #1919ff;; height: 50px;">
                <p style="color: white; font-size: 18px; font-weight: bold;">Setup Payout</p>
                
              </div>
              <div class="widget-content">
                <div class="row-fluid">
                  <div class="span12">
                    <p>Before investing can start, we need to know where to send your purchased LPC tokens.</p>

                    <p>Ensure that you provide us with your Private ERC20 compatible Ether wallet address. An example of a website where you can generate such an address is MyEtherWallet.com or you can use a Ledger Nano S. You cannot provide us with an address from an exchange because it will not work and LPC tokens may be lost that way. If you provide a wallet address that is invalid or an address from an exchange we will not refund you for this error. You can double check that your Ether wallet is working properly and accepting ERC20 tokens by referring to that wallet's information page and checking that it accepts ERC20 tokens.</p>


                  </div>

        <br/>
                      <div class="row-fluid">
                        <form action="investors.php" method="post">
                            <div class="span8">     
                                      <div class="control-group" >
                                          <div class="controls">
                                              <input type="text" placeholder="Wallet Address for LPC token*" name="LPCtokens" maxlength="16" style="width: 430px;">
                                              
                                          </div>
                                      </div>
                                    
                              </div>

                              <div class="span4">
                                <button type="submit" name="payout" class="btn btn-primary btn-big" style=" color: white;  font-weight: bold;">SAVE PAYOUT ADDRESS</button>
                              </div>
                          </form>
                          </div>             
                
                </div>
              </div>
            </div>
          </div>
      </div>

      <?php
      if(isset($_POST['payout'])){
          $LPCtokens =$_POST['LPCtokens'];

          if(!empty($LPCtokens)){
              header("location: register.php");
          }else{
              echo "<script>alert('field required')</script>";
          }

      }else{
            }
      ?>

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

    

                                    <div style="background-color: #e9e9e9; height: 80px;">
                                        <p style="font-size: 17px; color:#024fa4; margin-top: 12px; position: absolute; margin-left: 75px;">2712 of 6000 ETH</p>
                                        <p style="color:#024fa4; position: absolute; margin-top: 32px; margin-left: 20px; font-size: 13px;">
                                        Estimated Raised Value: $3,189,794 USD</p>
                                     </div>
                                    <br/>

                                    <p style="color:#024fa4; font-size: 27px;">Sale Ends</p><br/>

                                 
                                </center>

                                <center>
                                
                            <?php include("countdown.php");?>
                              </center>



          </div>
    </div>

    <div class="row-fluid">
            <div class="widget-box">
              <div class="widget-title" style="background-color:  #1919ff;; height: 50px;">
                <p style="color: white; font-size: 18px; font-weight: bold;">Registration Progress</p>
                
              </div>
              <div class="widget-content">
                <div class="row-fluid">
                  <div class="span12">

                      <center>
                        <p>Payout Address Set</p>
                        <p>KYC Complete</p>
                        <p>Investor Status Verified</p>
                      </center>
                  </div>
 
                </div>
              </div>
            </div>
          </div>
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

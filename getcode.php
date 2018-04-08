     <form id="form-wizard" class="form-horizontal" action="POST.php" method="POST">
                      <h5 style="color: white;">POST METHOD</h5>
                          <div class="control-group">
                              <label class="control-label">Name</label>
                              <div class="controls">
                                  <input type="name" placeholder="Enter Name" name="name" id="Name" value="<?php echo isset($_POST['Name'])? $_POST
                                                ['name']: ''; ?>" >  
                            </div>
                          </div>
                            <div class="control-group">
                              <label class="control-label">Email</label>
                              <div class="controls">
                                  <input type="Email" placeholder="Enter Email" name="name" id="Email" value="<?php echo isset($_POST['Email'])? $_POST
                                                ['Email']: ''; ?>" >  
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">
                              <input id="password" type="password" placeholder="Enter Password" name="password" />
                            </div>
                          </div>
                          <div class="form-actions">
                            <button class="btn btn-danger" style="width: 95px; height: 35px; margin-left: 20px; font-weight: bold; font-size:18px;5"><a href="POST.php">SUBMIT</a></button>  
                          </div>
                </form>
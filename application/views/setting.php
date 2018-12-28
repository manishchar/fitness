  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <?php include('layouts/front_meta.php'); ?>
      </head>
    <body>
   <?php include('layouts/front_login_header.php'); ?>
   <?php //include('layouts/front_banner.php'); ?>
 
        
    <section style="margin-top:100px;">
    

    
<div class="container">
  <div class="row">
 <?php include('layouts/front_side_menu.php'); ?>
    
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Setting</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                           
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Old Password</label> 
                                <div class="col-8">
                                  <input id="old_password" name="old_password" placeholder="Old Password" class="form-control here" type="password">
                                </div>
                              </div> 
                           
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="password">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Confirm Password</label> 
                                <div class="col-8">
                                  <input id="cpass" name="cpass" placeholder="Confirm Password" class="form-control here" type="password">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                  <input class="btn btn-primary" type="submit">
                                  <input class="btn btn-warning" type="submit" value="Cancel">
                                </div>
                              </div>
                            </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>


    </section> 

      
 
<?php include('layouts/front_footer.php'); ?>
    </body>
  </html>




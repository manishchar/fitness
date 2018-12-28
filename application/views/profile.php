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
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                              
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="First Name" class="form-control here" type="text" value="<?php echo $user->fname; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text" value="<?php echo $user->lname; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Nick Name*</label> 
                                <div class="col-8">
                                  <input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text" value="<?php echo $user->nick_name; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Display Name public as</label> 
                                <div class="col-8">
                                  <select id="select" name="select" class="custom-select">
                                    <option value="<?php echo $user->fname; ?>"><?php echo $user->fname; ?></option>
                                    <?php if($user->lname){ ?>
                                    <option value="<?php echo $user->lname; ?>"><?php echo $user->lname; ?></option>
                                       <?php } ?>
                                      <?php if($user->nick_name){ ?>
<option value="<?php echo $user->nick_name; ?>"><?php echo $user->nick_name; ?></option>
                                      <?php } ?>
                                    

                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="email" readonly="" value="<?php echo $user->email; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">mobile</label> 
                                <div class="col-8">
                                  <input id="mobile" name="mobile" placeholder="mobile" class="form-control here" type="number" value="<?php echo $user->mobile; ?>">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="website" class="col-4 col-form-label"></label> 
                                <div class="col-8">
                                  <input  value="Update" class="btn btn-primary here" type="submit" >
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




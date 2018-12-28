  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <?php include('layouts/front_meta.php'); ?>
    <style type="text/css">
      
.loginText {
    font-size: 20px;
    text-align: center;
    color: #fff;
    padding: 7px;
    margin-top: 0;
    position: relative;
    top: -38px;
    margin-bottom: -28px;
    height: 45px;
    line-height: 29px;
}

.fpDiv button, .loginButton_div button, .loginText {
    background-color: #ed1c24;
    text-transform: uppercase;
}
.registerBox {
    width: 100%;
    position: relative;
    height: auto;
    margin-top: 20%;
}
.loginBox {
    background-color: #fff;
    padding: 15px;
    width: 400px;
    margin: auto;
    box-shadow: 0 4px 12px #014c7b;
    position: relative;
    left: 40%;
    top: 110px;
    right: 20px;
    bottom: 0;
    /*height: 303px;*/
    transition: all .1s ease 0;
}

.registerBox .field-parentNew input, .registerBox .field-parentNew select {
    box-shadow: unset;
    border-radius: 0;
    margin-bottom: 10px;
    border: 1px solid #aaa;
    padding-left: 41px;
}

.loginBox .field-parentNew input {
    padding-left: 44px;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
a, button, checkbox, input, radio, select, textarea {
    outline: 0;
    text-decoration: none!important;
}

button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.loginBox .field-parentNew .loginIcon {
    position: relative;
    left: 15px;
    top: 28px;
    color: #666;
    font-size: 17px;
    }
/*.registerBox .field-parentNew i {
    top: 8px!important;
    font-size: 18px!important;
}*/

@media (min-width: 992px){
.col-md-6 {
    width: 50%;
}
}

    </style>
    </head>
    <body>
   <?php include('layouts/front_login_header.php'); ?>
   <?php //include('layouts/front_banner.php'); ?>
 
        
    <section style="background-image: url(http://localhost/fitness/resources/front/img/header-bg.jpg);
    background-repeat:no-repeat;
    visibility: visible;
    animation-name: fadeInDown;
    height: 800px;" >
      
<div class="container resPadZero">
         <form id="UserForm2" method="POST">
          <div class="createDiv">
              
                <div class="respadZero1">
                    <div class="loginBox registerBox">
                          <h2 class="loginText">Create Account</h2> 
                          <p style="margin-top: 20px;">
<?php
if($this->session->flashdata('message')){ ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
<?php }
?>
                          </p>
  <div class=" field-parentNew">
    <i class="fa fa-user loginIcon"></i> 
    <span class="text text-danger"><?php echo form_error('fname', '<span class="error">', '</span>'); ?></span>
    <input type="hidden" name="id" value="1">
    <input name="fname" class="form-control" id="fname" placeholder=" First Name" type="text" required="" value="<?php echo set_value('fname'); ?>">
  </div>
  <div class=" field-parentNew">
    <i class="fa fa-user loginIcon"></i> 
    <span class="text text-danger"><?php echo form_error('lname', '<span class="error">', '</span>'); ?></span>
    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"  value="<?php echo set_value('lname'); ?>">
  </div>
                          
  <div class=" field-parentNew">
   <i class="fa fa-envelope loginIcon emailIcon"></i>
   <span class="text text-danger"><?php echo form_error('email', '<span class="error">', '</span>'); ?></span>
   <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required=""  value="<?php echo set_value('email'); ?>">
  </div>
  
  <div class=" field-parentNew">
   <i class="fa fa-unlock-alt loginIcon"></i> 
   <span class="text text-danger"><?php echo form_error('password', '<span class="error">', '</span>'); ?></span>
   <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" autocomplete="off">
  </div>
                      
                          <div class=" field-parentNew">
                           <i class="fa fa-phone loginIcon" aria-hidden="true"></i>
                           <span class="text text-danger"><?php echo form_error('mobile', '<span class="error">', '</span>'); ?></span>
                           <input class="form-control" id="mobile" name="mobile" placeholder="Phone Number"  value="<?php echo set_value('mobile'); ?>">
                          </div>
                          
                                                  
                          
                          <div class=" field-parentNew">
                             <button type="submit" class="form-control btn-danger" id="submit">Submit <i class="fa fa-refresh fa-spin loginLoad" id="signUpLoader2" style="display: none;"></i> </button>
                          </div>
                          
                          <div class="alreadyLogin"><span>Already have an account? <a href="<?php echo base_url().'welcome/login' ?>">Sign In</a></span></div>
                              
                      </div>
                </div>
            </div>
         </form>
        
        
        
        
        
      </div>


    </section> 

      
 
<?php include('layouts/front_footer.php'); ?>
    </body>
  </html>




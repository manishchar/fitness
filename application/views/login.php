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

.field-parentNew {
    position: relative;
    display: inline-block;
    width: 100%;
}
.registerBox .field-parentNew button {
    display: block;
    border-radius: 2px;
    margin: auto auto 12px;
    font-size: 18px;
    transition: all .2s ease 0;
    border: 0;
    background-color: #ed1c24;
    color: #fff;
    height: 40px;
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
                          <h2 class="loginText">Login</h2> 
                          <p style="margin-top: 20px;">
                            <?php
if($this->session->flashdata('message')){ ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
<?php }
?>
<?php
if($this->session->flashdata('error')){ ?>
<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
<?php }
?>
                          </p>
  
                          
  <div class=" field-parentNew">
   <i class="fa fa-envelope loginIcon emailIcon"></i>
   <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="">
  </div>
  
  <div class=" field-parentNew">
   <i class="fa fa-unlock-alt loginIcon"></i> 
   <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
  </div>
                                              
                          
                          <div class=" field-parentNew">
                             <button type="submit" class="form-control btn-danger" id="submit">Submit <i class="fa fa-refresh fa-spin loginLoad" id="signUpLoader2" style="display: block;display: inline-block;"></i> </button>
                          </div>
                          
                          <div class="alreadyLogin"><span>Already have an account? <a href="<?php echo base_url().'welcome/signup' ?>">Sign In</a></span></div>
                              
                      </div>
                </div>
            </div>
         </form>
        
        
    
      </div>


    </section> 

      
 
<?php include('layouts/front_footer.php'); ?>
    </body>
  </html>




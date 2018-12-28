<header id="header" id="home">
          <div class="container">
            <div class="row header-top align-items-center">
              <div class="col-lg-4 col-sm-4 menu-top-left">
                <span>
                  We believe we helps people <br>
                for happier lives
                </span>
              </div>
              <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
              <a  href="<?php echo base_url(); ?>">
                <img class="img-fluid" src="<?php echo base_url().'resources/front/' ?>img/logo.png" alt=""> 
              </a>                
              </div>
              <div class="col-lg-4 col-sm-4 menu-top-right">
                <a class="tel" href="tel:+880 123 12 658 439">+880 123 12 658 439</a>
                <a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
              </div>
            </div>
          </div>  
            <hr>
          <div class="container"> 
            <div class="row align-items-center justify-content-center d-flex">
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="#home">Home</a></li>
                  <li><a href="#offer">we offer</a></li>
                  <li><a href="#top-course">Top Course</a></li>                 
                  <li><a href="#schedule">Schedule</a></li>
                  <li><a href="#trainer">Trainer</a></li>
                  <li><a href="#plan">Plan</a></li>
                  
                  <?php
$session = $this->session->userdata('front_login');
if(!empty($session)){ ?>
 <li class="menu-has-children"><a href="#">Welcome <?php echo $session['fname'] ?></a>
                    <ul>
                      <li><a href="<?php echo base_url().'welcome/profile'; ?>">Profile</a></li>
                      <li><a href="<?php echo base_url().'welcome/plan'; ?>">Plan</a></li>
                      <li><a href="<?php echo base_url().'welcome/setting'; ?>">Setting</a></li>
                      <li><a href="elements.html">Logout</a></li>
                    </ul>
                  </li>
<?php }else{ ?>
<li><a href="<?php echo base_url().'welcome/signup'; ?>">Sign Up</a></li>
                  <li><a href="<?php echo base_url().'welcome/login'; ?>">Sign In</a></li>
<?php } 
//print_r($session);
                  ?>
                 
                </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->

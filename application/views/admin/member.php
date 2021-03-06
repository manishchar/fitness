<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('layouts/meta');  ?>
    
  </head>

  <body>

  <?php $this->load->view('layouts/side_menu'); ?>
    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
      <div class="kt-pagetitle">
        <h5>Dashboard</h5>
      </div><!-- kt-pagetitle -->

      <div class="kt-pagebody">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">
            <?php
if($this->session->flashdata('message')){ ?>
  <div class="alert alert-success">
  <?php echo $this->session->flashdata('message'); ?>
</div>
<?php } ?>
<?php if($this->session->flashdata('error')){ ?>
  <div class="alert alert-danger">
  <?php echo $this->session->flashdata('error'); ?>
</div>
<?php } ?>
          </p>
          <form method="POST">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span><?php echo form_error('fname', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="text" name="fname" value="" placeholder="Enter firstname">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span><?php echo form_error('lname', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="text" name="lname" value="" placeholder="Enter lastname">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Mobile: <span class="tx-danger">*</span><?php echo form_error('mobile', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="number" name="mobile" value="" placeholder="Enter Mobile Number">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-8">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Email Address: <span class="tx-danger">*</span><?php echo form_error('email', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="email" name="email" value="xxx@xxx.com" placeholder="Enter Email Address">
                  </div>
                </div><!-- col-8 -->
                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Role: <span class="tx-danger">*</span><?php echo form_error('role_id', '<span class="text text-danger">', '</span>'); ?></label>
                    <select name="role_id" class="form-control select2" data-placeholder="Choose country">
                      <option label="Choose Role"></option>
                      <?php
                        if($roles){
                          foreach ($roles as $key => $role) { ?>
                          <option value="<?php echo $role->id; ?>"><?php echo $role->role_name; ?></option>
                          <?php }
                        }
                      ?>
                    </select>
                  </div>
                </div><!-- col-4 -->
              </div><!-- row -->

              <div class="form-layout-footer">
                <button class="btn btn-default mg-r-5">Submit Form</button>
                <button class="btn btn-secondary">Cancel</button>
              </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
          </form>
        </div><!-- card -->

        
      </div><!-- kt-pagebody -->
      
      <div class="kt-footer">
        <span>Copyright &copy;. All Rights Reserved. Katniss Responsive Bootstrap 4 Admin Dashboard.</span>
        <span>Created by: ThemePixels, Inc.</span>
      </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->
    <?php $this->load->view('layouts/script'); ?>
    
  </body>
</html>

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
          <h6 class="card-body-title">Cources</h6>
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


          <?php
if(empty($cource)){
  $title = '';
  $price = '';
  $description = '';
}else{
  $title = $cource->title;
  $price = $cource->price;
  $description = $cource->description;
}
          ?>
          <form method="POST" enctype="multipart/form-data"> 
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Title: <span class="tx-danger">*</span><?php echo form_error('title', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="text" name="id" value="<?php echo $id; ?>">
                    <input class="form-control" type="text" name="title" value="<?php echo $title; ?>" placeholder="Enter firstname">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Price: <span class="tx-danger">*</span><?php echo form_error('price', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="number" name="price" value="<?php echo $price; ?>" placeholder="Enter lastname">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span><?php echo form_error('mobile', '<span class="text text-danger">', '</span>'); ?></label>
                    <input class="form-control" type="file" name="image">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Description: <span class="tx-danger">*</span><?php echo form_error('email', '<span class="text text-danger">', '</span>'); ?></label>
                    <textarea placeholder="Description" name="description" class="form-control"><?php echo $description; ?></textarea>
                  </div>
                </div><!-- col-8 -->
                
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

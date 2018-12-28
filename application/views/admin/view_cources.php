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
          <h6 class="card-body-title">Cources List</h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SNO</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Title</th>
                  <th class="wd-15p">Price</th>
                  <th class="wd-10p">Description</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
<?php  

if($cources){
  $i=1;
  foreach($cources as $key=>$cource){ ?>

            <tr>
                  <td><?php echo $i++; ?></td>
                  <td>
                    <?php if($cource->image){ ?>
<img width="80px" src="<?php echo base_url().'resources/img/cources/'.$cource->image; ?>">
                   <?php }else{
                      echo "No Image";
                    } ?>
                    
                  </td>
                  <td><?php echo $cource->title; ?></td>
                  <td><?php echo $cource->price; ?></td>
                  <td><?php echo $cource->description; ?></td>
                  <td>
<a href="<?php echo base_url().'welcome/cources/'.$cource->id; ?>">Edit</a>
                  </td>
                </tr>

  <?php }
}

?>

        
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        
      </div><!-- kt-pagebody -->
      
      <div class="kt-footer">
        <span>Copyright &copy;. All Rights Reserved. Katniss Responsive Bootstrap 4 Admin Dashboard.</span>
        <span>Created by: ThemePixels, Inc.</span>
      </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->
    <?php $this->load->view('layouts/script');  ?>
    
  </body>
</html>
<link href="<?php echo base_url().'resources' ?>/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="<?php echo base_url().'resources' ?>/lib/select2/css/select2.min.css" rel="stylesheet">

    
<script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
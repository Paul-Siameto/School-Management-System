<?php $this->load->view('layouts/header'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
    <h5> </h5>  
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>"><i></i> Sign out</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
            Students</h3>
          <!--<h5>
            <a href = "<?php echo base_url('index.php/students'); ?>" class ="btn btn-danger float-right"> Back </a>
          </h5>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>-->
        </div>
        <div class="box-body">
          <form action="<?php echo base_url("index.php/students/store")?>" method="POST">

            <div class="form-group">
              <label for="">Admition No.</label>
              <input type="text" name="s_no" value="<?= set_value('s_no') ?>" class="form-control">
              <small class="error-class"><?= form_error('s_no');?></small>
            </div>

            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" name="first_name" value="<?php echo set_value('first_name') ?>" class="form-control">
              <small class="error-class"><?php echo form_error('first_name');?></small>
            </div>

            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="last_name" class="form-control">
              <small><? //php echo base_error('last_name');?></small>
            </div>
            
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control">
              <small><? //php echo base_error('email');?></small>
            </div>

            <div class="form-group">
              <label for="">Phone Number</label>
              <input type="text" name="phone" class="form-control">
              <small><? //php echo base_error('phone');?></small>
            </div>

            <div class="form-group">
              <label for="">Course</label>
              <input type="text" name="course" class="form-control">
              <small><? //php echo base_error('course');?></small>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
        <!--<div class="box-footer">
          Footer
        </div>-->
         <!--/.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->


  <?php $this->load->view('layouts/footer'); ?>
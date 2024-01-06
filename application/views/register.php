<?php $this->load->view('layouts/header'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>"><i></i> Sign out</a></li>
      </ol>
    </section>
    <div class="container">
        <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']);?>
        <h3>CO-ADMIN REGISTRATION</h3>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <lable class="col-md-3 control-lable">Username</lable>
                    <div class="col-md-9">
                        <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder'=>'Username']);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('username', '<div class="text-danger">','</div>');?> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <lable class="col-md-3 control-lable">Email</lable>
                    <div class="col-md-9">
                        <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder'=>'Email']);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('email', '<div class="text-danger">','</div>');?> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <lable class="col-md-3 control-lable">Gender</lable>
                        <select class="col-lg-9" name="gender">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('gender', '<div class="text-danger">','</div>');?> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <lable class="col-md-3 control-lable">Role</lable>
                        <select class="col-lg-9" name="role_id">
                            <option value="">Select</option>
                        <?php if(count($roles)):?>
                            <?php foreach($roles as $role):?>
                            <option value=<?php echo $role->rolename?>><?php echo $role->rolename?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                        </select>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('role_id', '<div class="text-danger">','</div>');?> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <lable class="col-md-3 control-lable">Password</lable>
                    <div class="col-md-9">
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder'=>'Password']);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('password', '<div class="text-danger">','</div>');?> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <lable class="col-md-3 control-lable">Password Again</lable>
                    <div class="col-md-9">
                          <?php echo form_password(['name' => 'confpassword', 'class' => 'form-control', 'placeholder'=>'Password Again']);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('confpassword', '<div class="text-danger">','</div>');?> 
            </div>
            <button type="submit" class="btn btn-primary">REGISTER</button>
            <?php echo anchor("welcome", "Back", ['class' => 'btn btn-primary']);?>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<?php $this->load->view('layouts/footer'); ?>
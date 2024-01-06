<?php $this->load->view('layouts/header'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMIN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i></i> Sign out</a></li>
      </ol>
    </section>

<!--<section class="content">-->
    <div class="container">
		<div class="jumbotron">
			<h2 class="display-3" style="text-align: center;">ADMIN & CO ADMIN LOGIN</h2>
			<hr>
			<div class="my-4">
				<div class="row">
					<div class="col-lg-4">
						<?php echo anchor("welcome/adminRegister", "ADMIN REGISTER", ['class'=>'btn btn-primary']);?>
					</div>
					<div class="col-lg-4">
						<?php echo anchor("", "ADMIN LOGIN", ['class'=>'btn btn-primary']);?>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
<?php $this->load->view('layouts/footer'); ?>
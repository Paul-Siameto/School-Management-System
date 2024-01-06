<?php $this->load->view('layouts/header'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        STUDENTS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>"><i></i> Sign out</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                Hover Data Table
                <a href = "<?php echo base_url('index.php/create'); ?>" class ="btn btn-primary float-right"> Add Student </a>
              </h3>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Admition No.</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email </th>
                  <th>Phone Number </th>
                  <th>Course</th>
                  <th>Added On</th>
                  <th>Edit</th>
                  <!--<th>Delete</th>-->
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                   foreach ($student as $row) :?>
                <tr>
                  <td><?= $row->id; ?></td>
                  <td><?= $row->s_no; ?></td>
                  <td><?= $row->first_name; ?></td>
                  <td><?= $row->last_name; ?></td>
                  <td><?= $row->email; ?></td>
                  <td><?= $row->phone; ?></td>
                  <td><?= $row->course; ?></td>
                  <td><?= $row->added_on; ?></td>
                  
                  <td>
                    <a href="<?php echo base_url('students/edit/'.$row-> id)?>" class= "btb btn-success btn-sm">Edit</a>
                  </td>
                  <!--<td>
                    <a href="<//?php echo base_url('students/delete/'.$row-> id)?>" class= "btb btn-danger btn-sm">Delete</a>
                  </td>-->
                  <td>
                    <button type = "button" value = "<?= $row-> id; ?>" class= "btb btn-danger btn-sm confirm-delete">Delete</button>
                  </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                <!--<tfoot></tfoot>-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->


  <?php $this->load->view('layouts/footer'); ?>
  <script>
  $(document).ready(function(){
    $('.confirm-delete').click(function (e) {
      e.preventDefault();

      confirmDialog = confirm("Are you sure?");
      if(confirmDialog){
        var id = $(this).val();
        // alert(id);
        $.ajax({
          type: "POST",
          url: "<?= base_url()?>students/delete/"+id,
          success: function (response) {
            alert("Data deleted successfully");
            window.location.reload();
          }
        });
      }
    });
  });
</script>
<!--swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((confirmDialog) => {
  if (confirmDialog) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});-->
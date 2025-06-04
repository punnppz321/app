<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<?= $this->include('Layout/msgStatus') ?>
<div class="row">
    

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">File Upload <small>(with server-side)</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open('file_uploads', [ 'id' => 'quickForm', 'enctype' => 'multipart/form-data' ])  ?>
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">File Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" required id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div> -->
                    </div>
                    <p class="text-muted pt-2">simple file upload with server-side handling</p>
                    <?php echo form_error('file'); ?>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php echo form_close()  ?>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php include viewPath('includes/footer'); ?>
<!-- jquery-validation -->
<script src="<?php echo $url->assets ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/jquery-validation/additional-methods.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#quickForm').validate();

  // new exampleInputFile
  // $("#exampleInputFile").dropzone({});

});
</script>

<?= $this->endSection() ?>
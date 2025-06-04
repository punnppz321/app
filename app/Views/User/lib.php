<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-12">
        <?= $this->include('Layout/msgStatus') ?>
    </div>
    
    
    <div class="container mt-5">
        
        <h1>Upload Lib.so</h1>
    <form method="post" action="<?php echo base_url('lib');?>" enctype="multipart/form-data">
      <div class="form-group">
        <label></label>
        <input type="file" name="file" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger">Upload</button>
      </div>
    </form>
<?= $this->endSection() ?>
<?= $this->extend('Layout/Starter') ?>
<?= $this->section('content') ?>

<div class="row">
   
        <?= $this->include('Layout/msgStatus') ?>

    
    
    
   <div class="col-lg-12" >
   <div class="card mb-3">
      <div class="card-header h6 p-3 bg-default text-black">
         Send Notification to Users
      </div>
      <div class="card-body" style="padding-bottom:130px;">
         <?= form_open_multipart('upload_apk') ?>
          <label for="apk_file">APK File:</label>
    <input type="file" name="apk_file" id="apk_file"><br>
    <input type="submit" value="Upload">
         <?= form_close() ?>
      </div>
   </div>



<?= $this->endSection() ?>

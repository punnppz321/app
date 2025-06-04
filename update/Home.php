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
         <?= form_open_multipart('notify') ?>
         <input type="textarea" name="textarea_field" id="textarea_field"  class="form-control" placeholder="Send Notification" REQUIRED>
         <div class="form-group my-2">
            <button type="submit" class="btn btn-dark">Push Notification </button>
         </div>
         <?= form_close() ?>
      </div>
   </div>

        
        
        

   <div class="card mb-3">
      <div class="card-header h6 p-3 bg-default text-black">
         Upload Online Lib
      </div>
      <div class="card-body">
         <?= form_open_multipart('upload') ?>
         <input type="file" name="offensive" accept=".so" overwrite="true' class="form-control" REQUIRED>
         <br><br>
         <input type="submit" name="submit" value="upload" class="btn btn-primary w-100 waves-effect waves-light">
         </form>
<div class="progress">
    <div class="progress-bar" role="progressbar"></div>
</div>

      </div>
   </div>

</div>

 
   
       
    

      
</div>
</div>

<script>
$('form').submit(function(event) {
    event.preventDefault();

    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();

    xhr.upload.addEventListener('progress', function(event) {
        if (event.lengthComputable) {
            var percentComplete = event.loaded / event.total * 100;
            $('.progress-bar').css('width', percentComplete + '%');
        }
    });

    xhr.open('GET', '/update');
    xhr.send(formData);
});



</script<

 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
<script>
$(function(){
    <?php if(session()->has("success")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Great! Your lib has been uploaded',
            text: '<?= session("success") ?>'
        })
    <?php } ?>
});
</script>

<script>
$(function(){
    <?php if(session()->has("msg")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Great! Notification Successfully sent to the users',
            text: '<?= session("msg") ?>'
        })
    <?php } ?>
});
</script>
<script>
$(function(){
    <?php if(session()->has("info")) { ?>
        Swal.fire({
            icon: 'info',
            title: 'Done! Key Time Has been Changed',
            text: '<?= session("info") ?>'
        })
    <?php } ?>
});
</script>


<?= $this->endSection() ?>
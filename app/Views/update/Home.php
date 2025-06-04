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
         <div class="row">
            <div class="col-md-6">
               <div class="form-group mb-3">
                  <label for="game_type">Select Game:</label>
                  <select name="game_type" id="game_type" class="form-control" required>
                      <option value="">-- Select Game --</option>
                      <option value="pubg">PUBG Mobile</option>
                      <option value="ff">Free Fire</option>
                      <option value="codm">Call of Duty Mobile</option>
                      <option value="mlbb">Mobile Legends</option>
                      <option value="aov">Arena of Valor</option>
                  </select>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group mb-3">
                  <label for="lib_type">Select Lib Type:</label>
                  <select name="lib_type" id="lib_type" class="form-control" required>
                      <option value="">-- Select Lib Type --</option>
                      <option value="bypass">Bypass Lib</option>
                      <option value="antiban">Anti-Ban Lib</option>
                      <option value="menu">Menu Lib</option>
                      <option value="aimbot">Aimbot Lib</option>
                      <option value="esp">ESP Lib</option>
                      <option value="speed">Speed Hack Lib</option>
                      <option value="other">Other Lib</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="form-group mb-3">
            <label for="offensive">Upload Lib File:</label>
            <input type="file" name="offensive" id="offensive" accept=".so" overwrite="true" class="form-control" required>
         </div>
         <div class="form-group mb-3">
            <label for="version">MOD Version:</label>
            <input type="text" name="version" id="version" class="form-control" required placeholder="Example: 1.0">
         </div>
         <button type="submit" class="btn btn-dark">Upload Game Lib</button>
         <?= form_close() ?>
         
         <div class="progress mt-3">
            <div class="progress-bar" role="progressbar"></div>
         </div>
      </div>
   </div>

</div>

 
   
       
    

      
</div>
</div>

<script>
$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        
        // Validate form
        var gameType = $('#game_type').val();
        var libType = $('#lib_type').val();
        var file = $('#offensive').val();
        var version = $('#version').val();
        
        if (!gameType || !libType || !file || !version) {
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Please fill in all required fields'
            });
            return false;
        }

        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();

        xhr.upload.addEventListener('progress', function(event) {
            if (event.lengthComputable) {
                var percentComplete = event.loaded / event.total * 100;
                $('.progress-bar').css('width', percentComplete + '%');
            }
        });

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Game lib uploaded successfully'
                    }).then(function() {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Upload Failed',
                        text: 'There was an error uploading the file'
                    });
                }
            }
        };

        xhr.open('POST', $(this).attr('action'), true);
        xhr.send(formData);
    });
});

<?php if(session()->has("success")) { ?>
    Swal.fire({
        icon: 'success',
        title: 'Great! Your lib has been uploaded',
        text: '<?= session("success") ?>'
    })
<?php } ?>
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
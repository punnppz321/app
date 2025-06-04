

<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-primary" role="alert">
             <a class="" href="<?= site_url('Offensive') ?>">
                                                <i class="bi bi-bookmark-plus"></i> BT Status</a>
                                                
                                                
        </div>
         <?php if (session()->has('success')): ?>
        <div class="alert alert-success"><?= session()->get('success') ?></div>
    <?php endif ?>
<div class="row">
    <div class="col-lg-12">
       
      
    <!-- Update Form -->
    </div>
     
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
 <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Mod Server Online_Offline  
                                                
            </div>
            
           
                                               
            <div class="card-body">
               <?= form_open('update') ?>



<!-- Online and Maintenance -->
<form method="post" action="update">
  <h3>Update Function</h3>
  <label for="radios">Online:</label>
  <input type="radio" name="radios" value="1" checked>Yes
  <input type="radio" name="radios" value="0">No
  <br>
  <label for="myInput">Maintenance:</label>
  <input type="text" name="myInput">
  <br>
  <input type="submit" name="Update" value="Update">
              
                
            </div>
        </div>
    </div>
   
    <!----><!----><!----><!----><!----><!----><!----><!---->
    
    <div class="col-lg-6" >
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Change Mod Name
            </div>
            <div class="card-body" style="padding-bottom:130px;">
               <label for="myInputKey">Time (in hours):</label>
  <input type="text" name="myInputKey">
  <br>
  <input type="submit" name="UpdateKey" value="Update Key">
  
  <h3>Reset</h3>
  <input type="submit" name="Reset" value="Reset">
            </div>
        </div>
    </div>
    
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
    
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Change AIMBOT BULLET TRACK STATUS
            </div>
            <div class="card-body">
              <h3>Aimbot</h3>
  <input type="submit" name="onAimbot" value="Turn On">
  <input type="submit" name="offAimbot" value="Turn Off">
  
  <h3>Bullet Track</h3>
  <input type="submit" name="onBulletTrack" value="Turn On">
  <input type="submit" name="offBulletTrack" value="Turn Off">
  
  <h3>Memory</h3>
  <input type="submit" name="onMemory" value="Turn On">
  <input type="submit" name="offMemory" value="Turn Off">
</form>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Instruction for Users
            </div>
            <div class="card-body">
                
                
    </div>
    
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
</div>

<?= $this->endSection() ?>
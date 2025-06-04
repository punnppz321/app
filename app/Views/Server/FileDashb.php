<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-primary" role="alert">
            
                       <a class="" href="<?= site_url('memory') ?>">
                                                <i class="bi bi-layer-backward"></i> Return to Memory</a>                         
                                                
        </div>
         <?php if (session()->has('success')): ?>
        <div class="alert alert-success"><?= session()->get('success') ?></div>
    <?php endif ?>
<div class="row">
    <div class="col-lg-12">
       
      
    <!-- Update Form -->
    </div>
     
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
 <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
              BT>AIMBOT>MEMORY STATUS 
                                                
            </div>
            
                
                <div class="card-body">
                    
      <tr>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-hover text-center" style="width:100%">
                                 <thead>
      <tr>
        <th>Online</th>
      <th>Maintenance</th>
      <th>Aimbot</th>
      <th>Bullet</th>
      <th>Memory</th>
       <th>ModName</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><?= ($serverData->Online === 'true') ? 'Yes' : 'No' ?></td>
<td><?= $serverData->Maintenance ?></td>
<td><?= ($serverData->Aimbot === 'true') ? 'On' : 'Off' ?></td>
<td><?= ($serverData->Bullet === 'true') ? 'On' : 'Off' ?></td>
<td><?= ($serverData->Memory === 'true') ? 'On' : 'Off' ?></td>
<td><?= $serverData->modname ?></td>
    </tr>
    </tbody>
     
                               
                </div>
            </div>
            </div>
        </div>
    </div>
    
</div>


<?= $this->endSection() ?>
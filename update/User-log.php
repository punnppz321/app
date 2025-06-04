<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="row">
        <div class="col-lg-12">
            <?= $this->include('Layout/msgStatus') ?>
        </div>
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header bg-default text-white">
                    <div class="row">
                        <div class="col pt-1">
                           <strong>Updated MODS </strong>
                            
                            
                        </div>
                        <div class="col text-end">

                        <div class="float-right">
                        
                    </div>
                       
                         
                           
                            
                             
                            
        
                        </div>
                    </div>
                </div>

                
                <div class="card-body">
                    
      <tr>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-hover text-center" style="width:100%">
                                 <thead>
      <tr>
        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>IP Address</th>
                        <!-- <th>Location</th> -->
                        <th>Browser</th>
                        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $log):?>
      <tr>
                            <td><?= $log['date'] ?></td>
                            <td><?= $log['time'] ?></td>
                            <td><?= $log['name'] ?></td>
                            <td><?= $log['ip'] ?></td>
                            <!-- <td>Philippines</td> -->
                            <td><?= $log['browser'] ?></td>
                            <td><?= $log['status'] ?></td>
                        </tr>
                        <?php endforeach;?>
    
      <p class="text-center">Nothing  to show</p>
                   
    </tbody>
                               
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
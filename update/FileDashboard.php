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
        <th>Id</th>
        <th>Name</th>
        <th>Type</th>
        <th>Size</th>
        <th>Extension</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($files) : ?>
      <?php foreach($files as $file){?>
      <tr>
          
        <td><?php echo $file['id']; ?></td>
        <td><?php echo $file['name']; ?></td>
        <td><?php echo $file['type']; ?></td>
        
         <td><?php echo $file['size']; ?></td>
          <td><?php echo $file['extension']; ?></td>
          <td><?php echo $file['uploadtime']; ?></td>
      </tr>
     <?php }else : ?>
      <p class="text-center">Nothing  to show</p>
                    <?php endif; ?>
    </tbody>
                               
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
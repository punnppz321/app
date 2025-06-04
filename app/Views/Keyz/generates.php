< <?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-primary" role="alert">
            
        </div>
        <div class="card shadow-sm">
           
            <div class="card-header bg-dark text-white h6 p-3">
                

           
          
           
           
           
                            <a class="btn btn-outline-light btn-sm" href="<?= site_url('keys/download/new') ?>"><i class="bi bi-person-plus"></i>DOWNLOAD</a>
           
            </div>
            <br>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <?= $this->include('Layout/msgStatus') ?>
        <?php if (session()->getFlashdata('user_key')) : ?>
            <div class="alert alert-success" role="alert">
                Game : <?= session()->getFlashdata('game') ?> / <?= session()->getFlashdata('duration') ?> Hours<br>
                License : <strong class="key-sensi"><?= session()->getFlashdata('user_key') ?></strong><br>
                Available for <?= session()->getFlashdata('max_devices') ?> Devices<br>
                <small>
                    <i>Duration will start when license login.</i><br>
                    <i class="bi bi-wallet"></i> Saldo Reduce :
                    <span class="text-danger">-<?= session()->getFlashdata('fees') ?></span>
                    (Total left <?= $user->saldo ?>$)
                </small>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header p3 bg-dark text-white">
                <div class="row">
                    <div class="col pt-1">
                        Create License
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-sm btn-outline-light" href="<?= site_url('keys') ?>"><i class="bi bi-people"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= form_open() ?>

                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <label for="game" class="form-label">Gameshjgjh</label>
                        <?= form_dropdown(['class' => 'form-select', 'name' => 'game', 'id' => 'game'], $game, old('game') ?: '') ?>
                        <?php if ($validation->hasError('game')) : ?>
                            <small id="help-game" class="text-danger"><?= $validation->getError('game') ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <label for="max_devices" class="form-label">Max Devices</label>
                        
                        <input type="number" name="max_devices" id="max_devices" class="form-control" placeholder="1" value="<?= old('max_devices') ?: 1 ?>">
                        <?php if ($validation->hasError('game')) : ?>
                        
                        
                            <small id="help-max_devices" class="text-danger"><?= $validation->getError('max_devices') ?></small>
                        <?php endif; ?>
                    </div>
                </div>
                
                
                <div class="form-group mb-3">
                    <label for="duration" class="form-label">Duration</label>
                    <?= form_dropdown(['class' => 'form-select', 'name' => 'duration', 'id' => 'duration'], $duration, old('duration') ?: '') ?>
                    <?php if ($validation->hasError('duration')) : ?>
                        <small id="help-duration" class="text-danger"><?= $validation->getError('duration') ?></small>
                    <?php endif; ?>
                </div>
       
   <label for="loopcount" class="form-label">Bulk Keys</label>         
  <select class="form-select" aria-label="Default select example" name="loopcount" id="loopcount">


  <option value="1">Select Keys</option>
  <option value="5">5 Keys</option>
  <option value="10">10 Keys</option>
  <option value="25">25 Keys</option>
  <option value="50">50 Keys</option>
  <option value="100">100 Keys</option>
  <option value="150">150 Keys</option>
  <option value="200">200 Keys</option>
  <option value="250">250 Keys</option>
  <option value="300">300 Keys</option>
  

</select>

<br>
                
                
                
                <div class="form-group mb-3">
                    <label for="estimation" class="form-label">Estimation</label>
                    <input type="text" id="estimation" class="form-control" placeholder="Your order will total" readonly>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark">Generate</button>
                </div>
                <?= form_close() ?>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    $(document).ready(function() {
        var price = JSON.parse('<?= $price ?>');
        getPrice(price);
        // When selected
        $("#max_devices, #duration, #game, #loopcount").change(function() {
            getPrice(price);
        });
        // try to get price
        function getPrice(price) {
            var price = price;
            var device = $("#max_devices").val();
            var durate = $("#duration").val();
            var loop = $("#loopcount").val();
            var gprice = price[durate];
            if (gprice != NaN) {
                var result = (device * gprice * loop);
                $("#estimation").val(result);
            } else {
                $("#estimation").val('Estimation error');
            }
        }
    });
</script>
<?= $this->endSection() ?>
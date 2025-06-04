<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<?= $this->include('Layout/msgStatus') ?>






<div class="row">
    <div class="col-lg-12">
    </div>
    
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
 <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Online Bullet Track Control
            </div>
            <div class="card-body">
            
            <form method="post">
			<input type="submit" value="Bullet Track ON" formaction="<?= site_url('on') ?>"> 
 
			<input type="submit" value="Bullet Track OFF" formaction="<?= site_url('off') ?>">

			
		</form>
                
        </div>
    </div>


    <div class="row">
    <div class="col-lg-12">
    </div>
    
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
 <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Online Memory Control
            </div>
            <div class="card-body">
            <form method="post">
			<input type="submit" value="Memory ON" formaction="<?= site_url('on') ?>"> 
 
			<input type="submit" value="Memory OFF" formaction="<?= site_url('off') ?>">

			
		</form>
           
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header h6 p-3 bg-primary text-black">
                Extend Key Time
            </div>
            <div class="card-body">

            <legend>Key Time Extend</legend><br>
            
         <form method="post" action=" <?= Base_url('memory')?>">

            <input type="radio" id="radio" name="type" value="1" aria-label="Checkbox for following text input" REQUIRED><font size="2"> Days Key</font>
            <input type="radio" id="radio" name="type" value="2" aria-label="Checkbox for following text input" REQUIRED><font size="2">Hour Keyr</font>
            
           
                
            <input type="text"   name="Key" value="OG6pnKAzyXi5NqP9TaYH"><br> Enter Your Key<br><br>
            <input type="radio"  name="time" value="2" aria-label="Checkbox for following text input" REQUIRED><font size="2">2 Hours</font>
            <input type="radio"  name="time" value="5" aria-label="Checkbox for following text input" REQUIRED><font size="2">5 Hours</font>
            <input type="radio"  name="time" value="7" aria-label="Checkbox for following text input" REQUIRED><font size="2">7 Hours</font>
            <input type="radio"  name="time" value="9" aria-label="Checkbox for following text input" REQUIRED><font size="2">9 Hours</font>
            <input type="radio"  name="time" value="12" aria-label="Checkbox for following text input" REQUIRED><font size="2">12 Hours</font>
            <input type="radio"  name="time" value="24" aria-label="Checkbox for following text input" REQUIRED><font size="2">24 Hours</font>

<br>

	<button type="submit" class="btn btn-primary" style="width:200px" name="save">Submit</button>
</form>
                
        </div>
    </div>

    

<?= $this->endSection() ?>
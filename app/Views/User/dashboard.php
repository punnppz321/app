<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<style>
      background: linear-gradient(0.97turn, #e3393988, #2a2225, #622f2f);
      
      .
  </style>
  
  
<?= $this->include('Layout/msgStatus') ?>


<div class="row">

<div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-header text-center text-white bg-primary">
            Panel Logged on this IP
            </div>
            <div class="card-body">
                <ul class="list-group list-hover mb-3">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    IP Address
                        <span class="badge text-danger">
                        <h5 id="gfg"></h5>
                  
                    
                </ul>
                
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-header text-center text-white bg-primary">
                Users's and Key Details
            </div>
            <div class="card-body">
                <ul class="list-group list-hover mb-3">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Total Keys
                        <span class="badge text-danger">
                        <h5><?= $keysAll ?></h5>
                        </span>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Sold Keys
                        <span class="badge text-warning"role="alert">
                        <h5><?= $usedKeys ?></h5>
                        </span>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Unused Key
                        <span class="badge text-warning"role="alert">
                        <h5><?= $unusedKeys ?></h5>
                        </span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Total Users
                        <span class="badge text-success">
                        <h5 style="color:black;"><?= $userAll ?></h5>
                        </span>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>



<div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-header text-center text-white bg-primary">
                Information
            </div>
            <div class="card-body">
                <ul class="list-group list-hover mb-3">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Roles
                        <span class="badge text-danger">
                            <?= getLevel($user->level) ?>
                        </span>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Rupees
                        <span class="badge text-warning"role="alert">
                            ₹<?= $user->saldo ?>
                        </span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Login Time
                        <span class="badge text-success">
                            <?= $time::parse(session()->time_since)->humanize() ?>
                        </span>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        Auto Logout
                        <span class="badge text-info">
                            <?= $time::now()->difference($time::parse(session()->time_login))->humanize() ?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-header text-center text-white bg-primary">
            Your Visitor Count is
            </div>
            <div class="card-body">
                <ul class="list-group list-hover mb-3">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Counter no is 
                        <span class="badge text-danger">
                        <h5 id="CounterVisitor"></h5>
                  
                    
                </ul>
                
            </div>
        </div>
    </div>
</div>


</div>


  </div>

  <script>
     
                
     $.getJSON("https://api.ipify.org?format=json", function(data) {
          
         // Setting text of element P with id gfg
         $("#gfg").html(data.ip);
     })
     </script>


     <script>
var n = localStorage.getItem('on_load_counter');

if (n === null) {
  n = 0;
}
n++;

localStorage.setItem("on_load_counter", n);

nums = n.toString().split('').map(Number);
document.getElementById('CounterVisitor').innerHTML = '';
for (var i of nums) {
  document.getElementById('CounterVisitor').innerHTML += '<span class="counter-item">' + i + '</span>';
}

</script>
<?= $this->endSection() ?>
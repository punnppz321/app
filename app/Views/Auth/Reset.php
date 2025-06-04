<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<div class="d-flex flex-column min-vh-100 px-3 pt-4">
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-lg-6 col-xl-5">

            <div class="text-center mb-4">
                <a href="https://remblerpro.in/>
                                <img src=" /assets/images/auth-bg-1.jpg" alt="" height="22"> <span class="logo-txt">TROJAN VIP PANEL</span>
                </a>
            </div>

            <div class="card">
                <div class="card-body p-4">

                    <div class="text-center mt-2">
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p class="text-muted">Sign in to continue to Panel.</p>
                    </div>
                    <div class="p-2 mt-4">
                        <?= form_open() ?>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" aria-describedby="help-email" placeholder="Your email" required minlength="4">
                            <?php if ($validation->hasError('email')) : ?>
                            <small id="help-email" class="form-text text-danger"><?= $validation->getError('email') ?></small>
                            <?php endif; ?>
                        </div>

                      


                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-primary w-100 waves-effect waves-light"><i class="bi bi-box-arrow-in-right"></i>Reset Pass</button>
                        </div>
                        <?= form_close() ?>


                    </div>


                
                    


                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-muted p-4">
                    <p class="text-white-50">© <script>
                            document.write(new Date().getFullYear())
                        </script>Panel. Crafted with <i class="mdi mdi-heart text-danger"></i> by @Mr_TrojanOP</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- end col -->
</div>
</div>
</div>

<script>
    $(function(){
        <?php if(session()->has("error")) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Uh! You have been Logged Out',
                text: '<?= session("error") ?>'
            })
        <?php } ?>
    });
</script>


<?= $this->endSection() ?>
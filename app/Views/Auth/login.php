<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<div class="d-flex flex-column min-vh-100 px-3 pt-4">
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-lg-6 col-xl-5">

            <div class="text-center mb-4">
                <a href="https://remblerpro.in/>
                                <img src=" /assets/images/auth-bg-1.jpg" alt="" height="22"> <span class="logo-txt"> 𝑯𝑬𝑿 𝑴𝑶𝑫</span>
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
                            <label class="form-label" for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="help-username" placeholder="Your username" required minlength="4">
                            <?php if ($validation->hasError('username')) : ?>
                            <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <div class="float-end">
                                <a href="forgot_passowrd" class="text-muted">Forgot password?</a>
                            </div>
                            <label class="form-label" for="userpassword">Password</label>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="help-password" placeholder="Your password" required minlength="6">
                            <?php if ($validation->hasError('password')) : ?>
                            <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <input type="hidden" class="form-control mt-2" name="ip" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>" id="ip" aria-describedby="help-ip" required>

                            <?php if ($validation->hasError('ip')) : ?>
                            <small id="help-password" class="form-text text-danger"><?= $validation->getError('ip') ?></small>
                            <?php endif; ?>
                        </div>

                        <div class="form-check">

                            <input type="checkbox" class="form-check-input" name="stay_log" id="stay_log" value="yes">
                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                        </div>

                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-primary w-100 waves-effect waves-light"><i class="bi bi-box-arrow-in-right"></i> Log in</button>
                        </div>
                        <?= form_close() ?>


                    </div>


                    <div class="mt-4 text-center">
                        <p class="mb-0">Don't have an account ? <a href="<?= site_url('register') ?>" class="text-default">Sign Up Now</a> </p>
                    </div>
                    


                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-muted p-4">
                    <p class="text-white-50">© <script>
                            document.write(new Date().getFullYear())
                        </script>Panel. Crafted with <i class="mdi mdi-heart text-danger"></i> 𝑴𝑹 𝑯𝑬𝑿 𝑴𝑶𝑫</p>
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
<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>



    
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="text-center mb-4">
                            <a href="index.html">
                                <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt"></span>
                            </a>
                       </div>

                        <div class="card">
                            <?= form_open() ?>
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Register Account</h5>
                                    <p class="text-muted">Get your account now.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    
                                        
                                        
                                      
        
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Username</label>
                                            <input type="text" class="form-control mt-2" name="username" id="username" aria-describedby="help-username" placeholder="Your username" minlength="4" maxlength="24" value="<?= old('username') ?>" required>
                                            <?php if ($validation->hasError('username')) : ?>
                                                <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
                                            <?php endif; ?>        
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Password</label>
                                            <input type="password" class="form-control mt-2" name="password" id="password" aria-describedby="help-password" placeholder="Your password" minlength="6" maxlength="24" required>
                    <?php if ($validation->hasError('password')) : ?>
                        <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
                    <?php endif; ?>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Confirm Password</label>
                                            <input type="password" name="password2" id="password2" class="form-control mt-2" placeholder="Confirm password" aria-describedby="help-password2" minlength="6" maxlength="24" required>
                    <?php if ($validation->hasError('password2')) : ?>
                        <small id="help-password2" class="form-text text-danger"><?= $validation->getError('password2') ?></small>
                    <?php endif; ?>       
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Referral">Referral</label>
                                            <input type="text" name="referral" id="referral" class="form-control mt-2" placeholder="Referral code" aria-describedby="help-referral" value="<?= old('referral') ?>" maxlength="25" required>
                    <?php if ($validation->hasError('referral')) : ?>
                        <small id="help-referral" class="form-text text-danger"><?= $validation->getError('referral') ?></small>
                    <?php endif; ?>       
                                        </div>

                                        <input type="hidden" name="ip" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>" required>
               

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                                            <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                        <button type="submit" class="btn btn-primary w-100 waves-effect waves-light"><i class="bi bi-box-arrow-in-right"></i> Register</button>
                                        </div>
                                        </div>
                <?= form_close() ?>



                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="<?= site_url('login') ?>" class="fw-medium text-primary"> Login</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script>Panel. Crafted with <i class="mdi mdi-heart text-danger"></i> HEX MOD</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
 

    <script>
$(function(){
    <?php if(session()->has("msgDanger")) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Failed, Please check the form',
            text: '<?= session("msgDanger") ?>'
        })
    <?php } ?>
});
</script>

<script>
$(function(){
    <?php if(session()->has("msgError")) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Wrong password, please try again',
            text: '<?= session("msgError") ?>'
        })
    <?php } ?>
});
</script>
<?= $this->endSection() ?>
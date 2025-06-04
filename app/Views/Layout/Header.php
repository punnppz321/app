
<header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm align-middle">
        <div class="container px-3">
            <a class="navbar-brand" href="<?= site_url() ?>"><i class="bi bi-x-diamond-fill"></i><?= BASE_NAME ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if (session()->has('userid')) : ?>
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= site_url('keys') ?>">License</a>
                        </li>
                         
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= site_url('keys/generate') ?>">Generate</a>
                        </li>
                       
                       
                    </ul>
                    
                
                    <div class="float-right" >
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle pe-2"></i><?= getName($user) ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown"  >
                                    <li>
                                        <a class="dropdown-item" href="<?= site_url('settings') ?>">
                                            <i class="bi bi-gear"></i> Settings
                                        </a>
                                    
                                        
                                    </li>
                                    
                             <li>
                                        <a class="text-center dropdown-item" href="https://t.me/MO_zake">
                                         <font size="3" >
                                        <i class="bi bi-code-slash"></i> 𝑯𝑬𝑿 𝑴𝑶𝑫
                                         </font>
                                         </font>
            </a>
            </li>
                                   
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <?php if ($user->level == 1) : ?>
                                        <li class="dropdown-item text-muted">Administrator</li>
                                        
                                        

                                        
                                    <li>
                                            <a class="dropdown-item" href="<?= site_url('Server') ?>">
                                                <i class="bi bi-hdd-rack"></i> Server Online
                                            </a>
                                        </li>
                                        
                                          <li>
                                            <a class="dropdown-item" href="<?= site_url('memory') ?>">
                                                <i class="bi bi-code-square"></i> BT & Memory
                                            </a>
                                        </li>
                            
                                        
                                        
                                          <li>
                                            <a class="dropdown-item" href="<?= site_url('upload') ?>">
                                                <i class="bi bi-grid-1x2"></i> Update Online
                                            </a>
                                        </li>
                                      
                                        
                                         
                                      
                                     <?php if(session()->get('userid')==1){ ?>
                                        <li>
                                            <a class="dropdown-item" href="<?= site_url('admin/manage-users') ?>">
                                                <i class="bi bi-people"></i> Manage Users
                                            </a>
                                        </li>
                                        
                                      
                                        <li>
                                            <a class="dropdown-item" href="http://www.xmprotect.com/">
                                                <i class="bi bi-file-earmark-lock2-fill"></i> Protect Your Lib
                                            </a>
                                        </li>
                                        
                                       
                                        
                                        
                                        <?php } ?>
                                          
                                  <?php if(session()->get('userid')==1){ ?>
                                        <li>
                                            <a class="dropdown-item" href="<?= site_url('admin/create-referral') ?>">
                                                <i class="bi bi-people"></i> Create Resseller
                                            </a>
                                        </li>
                                        
                                       
                                        
                                         
                                        <?php } ?>
                                       
                                   
        
                                   
                 
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <a class="dropdown-item text-danger" href="<?= site_url('logout') ?>">
                                            <i class="bi bi-box-arrow-in-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        <?php endif; ?>

        </div>
    </nav>
</header>
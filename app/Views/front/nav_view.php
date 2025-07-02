<body>
    <section class="w-100 m-0 p-0">   
        <nav class="navbar navbar-expand-lg custom-navbar navbar-dark">
            <div class="container-fluid">
                <?php if (session('perfil_id') != 1): ?>
                    <a class="nav-link active" aria-current="page" href="<?= base_url('principal') ?>">
                        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="77" height="77" class="img-fluid">
                    </a>
                <?php endif; ?>
                <?php if (session('perfil_id') == 1): ?>
                    <a class="nav-link active" aria-current="page" href="<?= base_url('logueado') ?>">
                        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="77" height="77" class="img-fluid">
                    </a>
                <?php endif; ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if (session('perfil_id') != 1): ?>
                        <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('acerca_de') ?>">Acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active nav_color" href="<?= base_url('quienes_somos') ?>">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active nav_color" href="<?= base_url('registro') ?>">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active nav_color" href="<?= base_url('login') ?>">Login</a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('perfil_id') == 2): ?>
                            <li class="nav-item">
                                <a class="nav-link active nav_color" href="<?= base_url('/logout') ?>">Cerrar sesión</a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('perfil_id') == 1): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('/vista') ?>">Crud Usuarios</a>
                            <li>
                            <li class="nav-item">
                                <a class="nav-link active nav_color" href="<?= base_url('/logout') ?>">Cerrar sesión</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="navbar-nav ms-auto"> 
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="perfilDropdown">
                                <li><a class="dropdown-item"href="<?= base_url('registro') ?>">Registro</a></li>
                                <li><a class="dropdown-item"href="<?= base_url('login') ?>">Login</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('datos_personales') ?>">Datos Personales</a></li>
                                <?php if (in_array(session('perfil_id'), [1, 2])): ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('/logout') ?>">Cerrar sesión</a>
                                    </li>
                                <?php endif; ?>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
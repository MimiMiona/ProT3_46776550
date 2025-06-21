<body>
    <section class="w-100 m-0 p-0"> 
        <nav class="navbar navbar-expand-lg custom-navbar navbar-dark">
            <div class="container-fluid">
                <a class="nav-link active" aria-current="page" href="<?= base_url('principal') ?>">
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="70" height="70" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 custom-search-input" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success custom-submit-btn" type="submit">Search</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
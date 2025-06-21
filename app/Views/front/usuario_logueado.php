<section class="container py-5" style="max-width: 1200px; margin: 0 auto; padding: 20px;">  
    <div class="mb-5 text-center">
        <h1 class="display-4">🧁 Bienvenido <?= session('nombre'); ?> a Dulces Caprichos</h1>
        <p class="lead">Tu rincón para degustar los mejores cupcakes</p>
        <div class="text-center">
            <img src="<?= base_url('assets/img/feliz2.jpg') ?>" alt="Vainilla" class="img-fluid">
        </div>
    </div>
</section>
<section class="container my-5">
        <h1>¡🧁Los productos más buscados🧁!</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="<?= base_url('assets/img/cupcakes_de_vainilla2.jpg') ?>" alt="Vainilla">
                    <div class="card-body">
                        <h5 class="card-title">Vainilla</h5>
                        <p class="card-text">Dulces y sencillos, la opción más práctica de todas!</p>
                        <p class="card-text">Precio: 350$</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="<?= base_url('assets/img/cupcakes_de_lemon_pie2.jpg') ?>" alt="Lemon Pie">
                    <div class="card-body">
                        <h5 class="card-title">Lemon Pie</h5>
                        <p class="card-text">La opción más ácida para aquellos que se atreven, ¡elección interesante para probar!</p>
                        <p>Precio: 400$</p>
                    </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="<?= base_url('assets/img/cupcakes_de_red_velvet2.jpg') ?>" alt="Red Velvet">
                    <div class="card-body">
                        <h5 class="card-title">Red Velvet</h5>
                        <p class="card-text">Un sabor elegante para cualquier ocasión</p>
                        <p>Precio: 400$</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="<?= base_url('assets/img/cupcakes_de_tiramisu2.jpg') ?>" alt="Tiramisu">
                    <div class="card-body">
                        <h5 class="card-title">Tiramisu</h5>
                        <p class="card-text">El sabor de equilibrio entre lo amargo y lo dulce, amado por gran parte de la comunidad</p>
                        <p>Precio: 500$</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
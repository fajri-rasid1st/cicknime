<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="flash-data" data-flash="<?= session()->getFlashData("message"); ?>" data-title="Login Success" data-icon="success"></div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url("/img/home-1.jpg"); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Find Your Favorite Anime!</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url("/img/home-2.jpg"); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Create Your Account!</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url("/img/home-3.jpg"); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Dahlah Malesss!</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="jumbotron">
                <h1 class="display-4 mb-4">Welcome To Cicknime!</h1>
                <p class="lead">This is my first website, using CodeIgniter 4!</p>
                <hr class="my-4">
                <h5>
                    This website contains some data of anime which you can later
                    edit, delete, add, and see the detail of anime you want.
                </h5>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Harum eos ea maxime nihil quidem odit, facilis esse
                    necessitatibus eveniet repudiandae? Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Voluptates suscipit mollitia at alias
                    nisi autem.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
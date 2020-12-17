<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand mr-4" href="<?= base_url("/"); ?>">Cicknime</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex align-items-center justify-content-between nav-action" style="width: 100%;">
                <div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="<?= base_url("/pages/index"); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="<?= base_url("/anime"); ?>">Anime</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="<?= base_url("/pages/about"); ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="<?= base_url("/pages/contact"); ?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav mr-auto d-flex align-items-center">
                        <?php if (logged_in()) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    <span class="profile">
                                        <p class="d-inline mb-0 mr-2">
                                            Admin
                                        </p>
                                        <img src="<?= base_url("/img/user.jpg"); ?>" class="user-img" />
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-columns mr-1"></i>
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url("/logout"); ?>">
                                        <i class="fas fa-sign-out-alt mr-1"></i>
                                        Log out
                                    </a>
                                </div>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link mr-2" href="<?= base_url("/login"); ?>">
                                    <i class="fas fa-sign-in-alt mr-1"></i>
                                    Log in
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
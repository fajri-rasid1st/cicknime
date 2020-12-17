<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url("/"); ?>">Cicknime</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("/pages/index"); ?>"><?= lang('Auth.home') ?> <span class="sr-only">(<?= lang('Auth.current') ?>)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="flash-data" data-flash="<?= session()->getFlashData("message"); ?>" data-title="Success" data-icon="success"></div>
            <h1 class="mt-4 mb-3 display-4 text-center">Anime List</h1>
            <div class="action-user d-flex-column mb-4">
                <?php if (logged_in()) : ?>
                    <a href="<?= base_url("anime/insert"); ?>" role="button" id="btn-insert" class="btn bg-default">
                        <i class="fas fa-plus mr-2"></i>
                        Insert new anime
                    </a>
                <?php endif ?>
                <div class="search">
                    <form action="<?= base_url("anime"); ?>" method="POST">
                        <div class="input-group">
                            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search anime..." autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button class="btn bg-default" type="submit" id="btn-search">
                                    <i class="fas fa-search mx-1"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-striped table-bordered table-secondary text-center">
                <thead class="thead bg-default">
                    <tr>
                        <th scope="col" class="table-head">No.</th>
                        <th scope="col" class="table-head">Poster</th>
                        <th scope="col" class="table-head">Title</th>
                        <th scope="col" class="table-head">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (5 * ($current_page - 1)); ?>
                    <?php foreach ($animes as $anime) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <img src="<?= base_url("img"); ?>/<?= $anime["poster"]; ?>" alt="<?= $anime["poster"]; ?>" class="preview-poster img-thumbnail">
                            </td>
                            <td><?= $anime["title"]; ?></td>
                            <td>
                                <div class="action">
                                    <a role="button" href="<?= base_url("anime"); ?>/<?= $anime["slug"]; ?>" class="btn btn-outline-dark mr-2">
                                        <i class="fas fa-info-circle mr-1"></i>
                                        See details...
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="mt-5">
                <?= $pager->links('anime', 'my_pagination') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
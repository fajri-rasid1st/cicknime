<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="flash-data" data-flash="<?= session()->getFlashData("message"); ?>" data-title="Success" data-icon="success"></div>
            <h1 class="mt-4 mb-3 display-4">Detail of Anime</h1>
            <div class="card detail-card">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="<?= base_url("img"); ?>/<?= $detail["poster"]; ?>" class="card-img" alt="<?= $detail["poster"]; ?>">
                    </div>
                    <div class="col-md-9 card-parent">
                        <div class="card-body">
                            <h4 class="card-title"><?= $detail["title"]; ?></h4>
                            <table class="table-details mb-3">
                                <tr>
                                    <td>Type</td>
                                    <td>&#8192:&#8192 <?= $detail["type"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>&#8192:&#8192 <?= $detail["status"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Released</td>
                                    <td>&#8192:&#8192 <?= $detail["released"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td>&#8192:&#8192 <?= $detail["duration"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Genres</td>
                                    <td>&#8192:&#8192 <?= $detail["genres"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Score</td>
                                    <td>&#8192:&#8192 <?= $detail["score"]; ?> (MyAnimeList)</td>
                                </tr>
                            </table>
                            <?php if (logged_in()) : ?>
                                <div class="detail-action">
                                    <div class="up-del mb-3">
                                        <a role="button" href="<?= base_url("anime/update"); ?>/<?= $detail["slug"]; ?>" class="btn btn-outline-primary mr-2">
                                            <i class="fas fa-edit mr-1"></i>
                                            Update
                                        </a>
                                        <form action="<?= base_url("anime"); ?>/<?= DELETE_URI; ?>/<?= $detail["id"]; ?>" method="POST" class="d-inline">
                                            <?php csrf_field(); ?>
                                            <button type="submit" id="delete" class="btn btn-outline-danger mr-2">
                                                <i class="fas fa-trash mr-1"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="go-back">
                            <a href="<?= base_url("anime"); ?>" role="button" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left mr-1 py-1"></i>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
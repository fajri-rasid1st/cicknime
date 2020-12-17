<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="flash-data" data-flash="<?= session()->getFlashData("message"); ?>" data-title="Login Success" data-icon="success"></div>
            <h1 class="mt-4 mb-4 display-4">Insert New Anime</h1>
            <form action="<?= base_url("anime/save_insert"); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row mb-4">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= $validation->hasError('title') ? 'is-invalid' : ''; ?>" id="title" name="title" autocomplete="off" value="<?= old('title'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError("title"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="type" name="type">
                            <option value="TV" <?= old('type') == 'TV' ? 'selected' : ''; ?>>
                                TV
                            </option>
                            <option value="Movie" <?= old('type') == 'Movie' ? 'selected' : ''; ?>>
                                Movie
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="status" name="status">
                            <option value="Currently Airing" <?= old('status') == 'Currently Airing' ? 'selected' : ''; ?>>
                                Currently Airing
                            </option>
                            <option value="Finished Airing" <?= old('status') == 'Finished Airing' ? 'selected' : ''; ?>>
                                Finished Airing
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="released" class="col-sm-2 col-form-label">Released</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= $validation->hasError('released') ? 'is-invalid' : ''; ?>" id="released" name="released" autocomplete="off" value="<?= old('released'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("released"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= $validation->hasError('duration') ? 'is-invalid' : ''; ?>" id="duration" name="duration" placeholder="Duration in minutes" autocomplete="off" value="<?= old('duration'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("duration"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="genres" class="col-sm-2 col-form-label">Genres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= $validation->hasError('genres') ? 'is-invalid' : ''; ?>" id="genres" name="genres" autocomplete="off" value="<?= old('genres'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("genres"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="score" class="col-sm-2 col-form-label">Score</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control <?= $validation->hasError('score') ? 'is-invalid' : ''; ?>" id="score" name="score" placeholder="Scores between 1-10" autocomplete="off" value="<?= old('score'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("score"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="poster" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                        <div class="img-container my-1">
                            <img class="preview-poster img-thumbnail" src="<?= base_url("img/default.png"); ?>" width="150">
                        </div>
                        <input type="file" class="my-2 <?= $validation->hasError('poster') ? 'is-invalid' : ''; ?>" id="poster" name="poster" onchange="previewImage();">
                        <div class="invalid-feedback">
                            <?= $validation->getError("poster"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-5">
                    <div class="col d-flex justify-content-between">
                        <a href="<?= base_url("anime"); ?>" type="button" role="button" class="btn bg-default">
                            <i class="fas fa-arrow-left mr-1 py-1"></i>
                            Back
                        </a>
                        <button type="submit" class="btn bg-default">
                            <i class="fas fa-plus mr-1 py-1"></i>
                            Add Anime
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
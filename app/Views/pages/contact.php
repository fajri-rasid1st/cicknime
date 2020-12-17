<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="flash-data" data-flash="<?= session()->getFlashData("message"); ?>" data-title="Login Success" data-icon="success"></div>
            <h1 class="display-4 mb-4 text-center">Contact Us</h1>
            <div class="list-contact d-flex" style="margin-top: 10vh;">
                <div class="text-center mx-3">
                    <i class="fab fa-whatsapp fa-10x"></i>
                    <a class="text-default mt-2" href="https://api.whatsapp.com/send?phone=6282290380510&text=hello" target="_blank"><?= $contact["whatsapp"]; ?></a>
                </div>
                <div class="text-center mx-3">
                    <i class="fab fa-instagram fa-10x"></i>
                    <a class="text-default mt-2" href="https://www.instagram.com/fajri_rasid1st/" target="_blank"><?= $contact["instagram"]; ?></a>
                </div>
                <div class="text-center mx-3">
                    <i class="fab fa-twitter fa-10x"></i>
                    <a class="text-default mt-2" href="https://twitter.com/FajriRasid" target="_blank"><?= $contact["twitter"]; ?></a>
                </div>
                <div class="text-center mx-3">
                    <i class="fab fa-linkedin fa-10x"></i>
                    <a class="text-default mt-2" href="https://www.linkedin.com/in/fajri-rasid-26558114b/" target="_blank"><?= $contact["linkedin"]; ?></a>
                </div>
                <div class="text-center mx-3">
                    <i class="fab fa-github fa-10x"></i>
                    <a class="text-default mt-2" href="https://github.com/fajri-rasid1st" target="_blank"><?= $contact["github"]; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
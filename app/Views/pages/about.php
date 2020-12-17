<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <div class="flash-data" data-flash="<?= session()->getFlashData("message"); ?>" data-title="Login Success" data-icon="success"></div>
            <div class="jumbotron">
                <h1 class="display-4 mb-4">About This Website</h1>
                <img src="<?= base_url(); ?>/img/profile.jpg" class="rounded-circle shadow" alt="fajri-rasid" width="175">
                <p class="my-4 lead">
                    Hi, my name is <?= $about[0]; ?>. I'm <?= $about[1]; ?> years old. My job is <?= $about[2]; ?>.
                </p>
                <hr class="my-4">
                <div class="my-experience text-left">
                    <h4 class="mb-4">Sekilas tentang saya</h4>
                    <p class="text-justify">
                        Hai, nama saya
                        <strong> Muhammad Fajri Rasid.</strong>
                        Saya adalah seorang programer pemula yang tertarik
                        mempelajari web development dan mobile apps
                        development. Hobi saya ngoding, edit video, nonton
                        youtube, main game, lihat asupan meme, dan juga
                        nonton anime.
                    </p>
                    <p class="text-justify">
                        Saat ini saya menempuh pendidikan S1 Ilmu Komputer
                        di Universitas Hasanuddin. Saya juga terus
                        mengembangkan skill programming yang saya miliki
                        agar nantinya bisa menjadi seorang programer
                        profesional dan bekerja di perusahaan bidang IT.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<section class="page-section bg-primary text-white mt-3">
    <div class="container text-center">
        <h2 class="page-section-heading text-center text-uppercase text-white">My Profile</h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row">
            <div class="col-md-3 ms-auto">
                <img src="<?= BASEURL; ?>/images/zuhril.jfif" alt="myProfiles" width="200" class="rounded">
            </div>
            <div class="col-lg-4 me-auto">
                <ul class="list-unstyled">
                    <li>
                        <h5>Nama : <?= $data['nama']; ?></h5>
                    </li>
                    <li>
                        <h5>Umur : <?= $data['umur']; ?> Tahun </h5>
                    </li>
                    <li>
                        <h5>Pekerjaan : <?= $data['pekerjaan']; ?></h5>
                    </li>
                    <li>
                        <h5>Email : <?= $data['email']; ?></h5>
                    </li>
                    <li>
                        <h5>Negara : Indonesia</h5>
                    </li>
                    <li>
                        <h5>NoHp : 082133475587</h5>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Do something today that your future self will thank you for. Because life is a journey to be experienced, not a problem to be solved. Many of life's failures are people who did not realize how close they were to success when they gave up.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">Successful people don't fear failure but understand that it's necessary to learn and grow from, and one of the greatest regrets in life is being what others would want you to be, rather than being yourself.</p>
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-secondary" href="<?= BASEURL; ?>/about/index">
                <i class="fas fa-angle-left"></i>
                back
            </a>
        </div>
    </div>
</section>
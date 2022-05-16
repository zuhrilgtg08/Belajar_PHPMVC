<section class="page-section my-1" id="about">
    <div class="container mt-1">
        <h2>Detail Mahasiswa : </h2>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= BASEURL; ?>/images/aset/img/avataaars.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Nama : <?= $data['mhs']['nama']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">NIS : <?= $data['mhs']['nis'] ?></h6>
                        <p class="card-text">Email : <?= $data['mhs']['email'] ?></p>
                        <p class="card-text">Jurusan : <?= $data['mhs']['jurusan'] ?></p>
                        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
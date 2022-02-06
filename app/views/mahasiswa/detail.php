<section class="page-section my-1" id="about">
    <div class="container mt-1">
        <h2>Detail Mahasiswa : </h2>
        <div class="card" style="width: 18rem;">
            <img src="<?= BASEURL; ?>/images/aset/img/avataaars.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nis'] ?></h6>
                <p class="card-text"><?= $data['mhs']['email'] ?></p>
                <p class="card-text"><?= $data['mhs']['jurusan'] ?></p>
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>
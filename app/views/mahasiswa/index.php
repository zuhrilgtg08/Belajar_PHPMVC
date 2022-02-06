<section class="page-section my-1" id="about">
    <div class="container mt-1">

        <div class="row">
            <div class="col-lg-6">
                <?php FLasher::flash(); ?>
            </div>
        </div>

        <div class="row">
            <div class="container-fluid">
                <h1 class="text-center">Daftar Mahasiswa</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success m-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data Mahasiswa
                </button>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead class="bg-primary text-white text-center">
                        <th>No</th>
                        <th>NIS</th>
                        <th>Email</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jurusan</th>
                        <th colspan="2">Action</th>
                    </thead>

                    <?php $no = 1; ?>

                    <tbody>
                        <?php foreach ($data['mhs'] as $mhs) : ?>
                            <tr class="text-center">
                                <td><?= $no++; ?></td>
                                <td><?= $mhs['nis']; ?> </td>
                                <td><?= $mhs['email'];  ?></td>
                                <td><?= $mhs['nama']; ?></td>
                                <td><?= $mhs['jurusan']; ?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin Ingin Hapus Data ini ?');"><span class="badge rounded-pill bg-danger">Delete</span></a></button>
                                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"><span class="badge rounded-pill bg-success">Detail</span></a>
                                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal" class="tampilModalUbah" data-id="<?= $mhs['id']; ?>"><span class=" badge rounded-pill bg-primary">Edit</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <!-- hidden input -->
                        <input type="hidden" name="id" id="id">

                        <div class="mb-3 form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="number" class="form-control" id="nis" name="nis" required>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select form-control" id="jurusan" name="jurusan">
                                <option disabled>List Jurusan:</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Robotika">Teknik Robotika</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Fisika">Teknik Fisika</option>
                            </select>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</section>
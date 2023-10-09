<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
            <br></br>
            <h3>Daftar Mahasiswa</h3>
            <div class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="list-group-item list-group-item-action">
                        <?= $mhs['nama']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div>
                <label for="jurusan">Jurusan</label>
                <select class="form-select" name="jurusan" id="jurusan">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Magister Hukum">Magister Hukum</option>
                    <option value="Magister Informatika">Magister Informatika</option>
                    <option value="Magister Psikologi">Magister Psikologi</option>
                    <option value="Pendidikan Bahasa">Pendidikan Bahasa</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
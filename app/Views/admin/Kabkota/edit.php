<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Nama Kabupaten / Kota</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/kabkota/proses_edit/' . $kabkotaData->id_kabkota) ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="id_provinsi">Nama Provinsi</label>
                                        <select class="form-control" id="id_provinsi" name="id_provinsi">
                                            <?php foreach ($all_data_Provinsi as $provinsi) : ?>
                                                <option value="<?= $provinsi->id_provinsi; ?>" <?php echo ($provinsi->id_provinsi == $kabkotaData->id_provinsi) ? 'selected' : ''; ?>>
                                                    <?= $provinsi->nama_provinsi; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small>*Nama Provinsi</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Kabupaten / Kota</label>
                                        <input type="text" class="form-control" id="nama_kabkota" name="nama_kabkota" value="<?= $kabkotaData->nama_kabkota; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Wilayah Kerja Kabupaten / Kota</label>
                                        <input type="text" class="form-control" id="wilayah_kerja_kabkota" name="wilayah_kerja_kabkota" value="<?= $kabkotaData->wilayah_kerja_kabkota; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="col">
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= session()->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content'); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="section-title">
                <h4 style="margin-top: 32px;">Edit Tempat Kuliner</h4>
                <br>
            </div>
        </div>


    </div>
    <!-- Signup Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="create__form">
                    <form action="/TempatK/update/<?= $tempatk['id']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <input type="hidden" name="slug" value="<?= $tempatk['slug']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $tempatk['gambar']; ?>">

                        <!-- Nama Tempat Kuliner -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Nama :</h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= (old('nama'))
                                                                                                                                                                                ? old('nama') : $tempatk['nama'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Pemilik -->
                        <div class="form-group row">
                            <label for="pemilik" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Pemilik : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError('pemilik')) ? 'is-invalid' : ''; ?>" id="pemilik" name="pemilik" value="<?= (old('pemilik'))
                                                                                                                                                                                ? old('pemilik') : $tempatk['pemilik'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pemilik'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Alamat : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $tempatk['alamat'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>deskripsi : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?> value="<?= (old('deskripsi')) ? old('deskripsi') : $tempatk['deskripsi'] ?>"><?= (old('deskripsi')) ? old('deskripsi') : $tempatk['deskripsi'] ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('deskripsi'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>deskripsi : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('deskripsi'); ?>
                                </div>
                            </div>
                        </div> -->


                        <!-- Kategori -->
                        <div class="form-group row">
                            <label for="kategori" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>Kategori : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <select name="kategori" class="form-control custom-select" id="kategori">
                                    <option value="<?= (old('kategori')) ? old('kategori') : $tempatk['kategori'] ?>"><?= (old('kategori')) ? old('kategori') : $tempatk['kategori'] ?></option>
                                    <option value="murah">Murah</option>
                                    <option value="enak">Enak</option>
                                    <option value="bersih">Bersih</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kategori'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="form-group row">
                            <label for="rating" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>Rating : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <select name="rating" class="form-control custom-select" id="rating">
                                    <option><?= (old('rating')) ? old('rating') : $tempatk['rating'] ?></option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('rating'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Jam Buka -->
                        <div class="form-group row">
                            <label for="jam_buka" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>Jam Buka : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="time" id="jam_buka" name="jam_buka" value="<?= (old('jam_buka')) ? old('jam_buka') : $tempatk['jam_buka'] ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('jam_buka'); ?>
                            </div>
                        </div>
                        <!-- Jam Tutup -->
                        <div class="form-group row">
                            <label for="jam_tutup" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>Jam Tutup : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="time" id="jam_tutup" name="jam_tutup" value="<?= (old('jam_tutup')) ? old('jam_tutup') : $tempatk['jam_tutup'] ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('jam_tutup'); ?>
                            </div>
                        </div>
                        <!-- Harga min -->
                        <div class="form-group row">
                            <label for="jam_tutup" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>Harga Min : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="number" id="harga_min" name="harga_min" step="1000" min="1000" value="<?= (old('harga_min')) ? old('harga_min') : $tempatk['harga_min'] ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga_min'); ?>
                            </div>
                        </div>
                        <!-- Harga max -->
                        <div class="form-group row">
                            <label for="jam_tutup" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>Harga Max : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="number" id="harga_max" name="harga_max" step="1000" min="1000" value="<?= (old('harga_max')) ? old('harga_max') : $tempatk['harga_max'] ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga_max'); ?>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Gambar : </h4>
                                </div>
                            </label>
                            <div class="col-sm-2">
                                <img src="/img/tempat-kuliner/<?= (old('gambar')) ? old('gambar') : $tempatk['gambar'] ?>" alt="" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-7">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewGambar()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar"><?php echo $tempatk['gambar'] ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="col offset-md-9">
                            <button type="submit" class="site-btn mb-4">Edit Data</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Signup Section End -->

</div>
<?= $this->endSection(); ?>
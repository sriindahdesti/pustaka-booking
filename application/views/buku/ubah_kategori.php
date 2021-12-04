<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-3">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <form action="<?= base_url('buku/editKategori'); ?>" method="post">
                <?php
                foreach ($kategori as $k) : ?>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?= $k['kategori']; ?>" id="kategori" placeholder="Masukkan  kategori" name="kategori">
                        <input type="text" class="form-control form-control-user" value="<?= $k['id']; ?>" id="id" placeholder="Masukkan  id" name="id" hidden>
                    </div>
                <?php

                endforeach; ?>

                <div class="form-group">
                    <button type="resset" class="btn btn-secondary"><i class="fas fa-ban"></i> reset</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
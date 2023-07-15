<!-- Begin Page Content -->
<div class="container-fluid"> 
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('artikel/edit_artikel/' . $artikel['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <!-- <label for="email" class="col-sm-2 col-form-label">Employee data</label> -->
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $artikel['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi"><?= $artikel['deskripsi']; ?></textarea>
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="sumber">Sumber</label>
                    <input type="text" class="form-control" id="sumber" name="sumber" value="<?= $artikel['sumber']; ?>">
                    <?= form_error('sumber', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" id="foto" name="foto" placeholder="Choose File" value="<?= $artikel['gambar']; ?>">
                    <?php if ($artikel['gambar'] !='') { ?>
                        <img src="<?php echo "/klinik/assets/image/".$artikel['gambar']; ?>" width='100' height='60'>
                    <?php } ?>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Update</button>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    CKEDITOR.replace( 'deskripsi' );
</script>
</div>
<!-- End of Main Content -->
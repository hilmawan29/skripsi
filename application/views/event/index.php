<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
        	<div class="col-xl">
                <?php echo validation_errors(); ?>
        		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
        		<?= $this->session->flashdata('message'); ?>
        		<a href="" class="btn btn-danger mb-3" data-toggle="modal" data-target="#newEventModal">Tambah Event</a>
        		<table class="table table-hover"> 
						<thead>
    						<tr>
        						<th scope="col">#</th>
                                <th scope="col">Judul</th>
        						<th scope="col">Deskripsi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Gambar</th>
        						<th scope="col">Aksi</th>
    						</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							<?php foreach ($event as $e) : ?>
						<tr>
							<td scope="row"><?= $i; ?></td>
							<td><?= $e['judul']; ?></td>
                        <td><?= myTruncate2($e['deskripsi'], 50); ?></td>
						<td><?= date('d F Y, H:i ', strtotime($e['tanggal'])); ?></td>
                        <td><?= $e['lokasi']; ?></td>
                         <td><?php if ($e['gambar'] !='') { ?>
                            <img src="<?php echo "assets/image/".$e['gambar']; ?>" width='100' height='120'>";
                        <?php } ?></td>
							<td>
								<a href= "<?= base_url('event/edit_event/') . $e['id']; ?>" class="badge badge-success">Ubah</a>
								<a href= "<?= base_url('event/delete_event/') . $e['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
							</td> 
						</tr>
						<?php $i++; ?>
						<?php endforeach; ?>
						</tbody>
					</table>
        	</div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah jika anda siap untuk mengakhiri sesi anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="newEventModal" tabindex="-1" role="dialog" aria-labelledby="newEventModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newEventModalLabel">Tambah Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('event/add_data'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
             <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Event">
          </div>
          <div class="form-group">
             <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
          </div>
          <div class="form-group">
            <input type="datetime-local" class="form-control" id="tanggal" name="tanggal">
     	 </div>
          <div class="form-group">
             <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi">
          </div>
          <div class="form-group">
            <input type="file" class="form-control" id="foto" name="foto" placeholder="Choose File">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-danger">Tambah</button>
      </div>
      </form>
    </div>
  </div> 
</div>
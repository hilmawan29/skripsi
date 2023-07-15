<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
        	<div class="col-xl">
                <?php echo validation_errors(); ?>
        		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
        		<?= $this->session->flashdata('message'); ?>
        		<a href="" class="btn btn-danger mb-3" data-toggle="modal" data-target="#newArtikelModal">Add New Artikel</a>
        		<table class="table table-hover"> 
						<thead>
    						<tr>
        						<th scope="col">#</th>
                                <th scope="col">Judul</th>
        						<th scope="col">Deskripsi</th>
                                <th scope="col">Sumber</th>
                                <th scope="col">Gambar</th>
        						<th scope="col">Action</th>
    						</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							<?php foreach ($artikel as $a) : ?>
						<tr>
							<td scope="row"><?= $i; ?></td>
							<td><?= $a['judul']; ?></td>
                        <td><?= myTruncate2($a['deskripsi'], 50); ?></td>
                        <td><?= $a['sumber']; ?></td>
                         <td><?php if ($a['gambar'] !='') { ?>
                            <img src="<?php echo "assets/image/".$a['gambar']; ?>" width='100' height='120'>";
                        <?php } ?></td>
							<td>
								<a href= "<?= base_url('artikel/edit_artikel/') . $a['id']; ?>" class="badge badge-success">edit</a>
								<a href= "<?= base_url('artikel/delete_artikel/') . $a['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item?');">delete</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="newArtikelModal" tabindex="-1" role="dialog" aria-labelledby="newArtikelModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newArtikelModalLabel">Add New Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('artikel/add_data'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
             <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
          </div>
          <div class="form-group">
             <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
          </div>
          <div class="form-group">
             <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Sumber">
          </div>
          <div class="form-group">
            <input type="file" class="form-control" id="foto" name="foto" placeholder="Choose File">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Add</button>
      </div>
      </form>
    </div>
  </div> 
</div>
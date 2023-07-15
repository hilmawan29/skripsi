

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                    	<div class="col-lg-6">
                    		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
                    		<?= $this->session->flashdata('message'); ?>
                    		<!-- <a href="" class="btn btn-danger mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a> -->
                    		<table class="table table-hover"> 
  								<thead>
  	  								<tr>
      								<th scope="col">#</th>
      								<th scope="col">Role</th>
      								<th scope="col">Action</th>
    								</tr>
  								</thead>
  								<tbody>
  									<?php $i=1 ?>
  									<?php foreach ($role as $r) : ?>
    								<tr>
      								<td scope="row"><?= $i; ?></td>
      								<td><?= $r['role']; ?></td>
      								<td>
      									<a href= "<?= base_url('admin/roleaccess/') . $r['id'];  ?>" class="badge badge-warning">access</a>
      									<a href= "<?= base_url('admin/editrole/') . $r['id']; ?>" class="badge badge-success">edit</a>
      									<a href= "<?= base_url('admin/deleterole/') . $r['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item?');">delete</a>
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
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/role'); ?>" method="post">
      <div class="modal-body">
          <div class="form-group">
    		 <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
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
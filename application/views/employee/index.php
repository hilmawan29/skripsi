

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                    	<div class="col-xl">
                    		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
                    		<?= $this->session->flashdata('message'); ?>
                    		<a href="" class="btn btn-danger mb-3" data-toggle="modal" data-target="#newEmployeeModal">Tambah Data Karyawan</a>
                    		<table class="table table-hover"> 
  								<thead>
  	  								<tr>
      								<th scope="col">#</th>
                                    <th scope="col">Foto</th>
      								<th scope="col">Nama</th>
                                    <th scope="col">Departemen</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">NIK</th>
      								<th scope="col">Aksi</th>
    								</tr>
  								</thead>
  								<tbody>
  									<?php $i=1; ?>
  									<?php foreach ($employee as $e) : ?>
    								<tr>
      								<td scope="row"><?= $i; ?></td>
                                    <td><?php if ($e['foto'] !='') {
                                        echo "<img src=".base_url("upload/".$e['foto'])." width='100' height='120'>";
                                    } ?></td>
      								<td><?= $e['name']; ?></td>
                                    <td><?= $e['department']; ?></td>
                                    <td><?= $e['age']; ?></td>
                                    <td><?= $e['nik']; ?></td>
      								<td>
      									<a href= "<?= base_url('employee/editemployee/') . $e['id']; ?>" class="badge badge-success">Ubah</a>
      									<a href= "<?= base_url('employee/deleteEmployee/') . $e['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
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
<div class="modal fade" id="newEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="newEmployeeModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newEmployeeModalLabel">Tambah Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('employee'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <input type="file" class="form-control" id="foto" name="foto" placeholder="Pilih File">
        </div>
          <div class="form-group">
    		 <input type="text" class="form-control" id="name" name="name" placeholder="Nama Karyawan">
          </div>
          <div class="form-group">
             <select name="department" id="department" class="form-control">
                <option value="">Pilih Departemen ...</option>
                <option value="Accounting">Accounting</option>
                <option value="Compliance">Compliance</option>
                <option value="HRD">HRD</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Payroll">Payroll</option>
                <option value="IT">IT</option>
                <option value="Marketing">Marketing</option>
                <option value="PPIC">PPIC</option>
                <option value="MD">MD</option>
                <option value="EXIM">EXIM</option>
                <option value="FKR">FKR</option>
                <option value="DA">DA</option>
                <option value="QA">QA</option>
                <option value="QC">QC</option>
                <option value="LAB">LAB</option>
                <option value="Product Safety">Product Safety</option>
                <option value="Heatseal">Heatseal</option>
                <option value="Pattern">Pattern</option>
                <option value="Sample">Sample</option>
                <option value="Mechanict">Mechanict</option>
                <option value="Security">Security</option>
                <option value="Manager Production">Manager Production</option>
                <option value="Gudang">Gudang</option>
                <option value="Cutting">Cutting</option>
                <option value="Chiev Sewing">Chiev Sewing</option>
                <optgroup label="Sewing">
                    <option value="Line 1">Line 1</option>
                    <option value="Line 2">Line 2</option>
                    <option value="Line 3">Line 3</option>
                    <option value="Line 5">Line 5</option>
                    <option value="Line 6">Line 6</option>
                    <option value="Line 7">Line 7</option>
                    <option value="Line 8">Line 8</option>
                    <option value="Line 9">Line 9</option>
                    <option value="Line 10">Line 10</option>
                    <option value="Line 11">Line 11</option>
                    <option value="Line 12">Line 12</option>
                    <option value="Line 13">Line 13</option>
                    <option value="Line 15">Line 15</option>
                    <option value="Line 16">Line 16</option>
                    <option value="Line 17">Line 17</option>
                    <option value="Line 18">Line 18</option>
                    <option value="Line 19">Line 19</option>
                    <option value="Line 20">Line 20</option>
                </optgroup>
                <option value="Iron">Iron</option>
                <option value="Packing">Packing</option>
                </select>
          </div>
          <div class="form-group">
             <input type="text" class="form-control" id="age" name="age" placeholder="Umur">
          </div>
          <div class="form-group">
             <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
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
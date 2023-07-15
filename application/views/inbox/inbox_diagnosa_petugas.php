<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> 

    <div class="row">
    	<div class="col-lg">
    		<?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
    		<?= $this->session->flashdata('message'); ?>
            <div>
                <label>Pilih Tanggal</label>
                <input type="date" id="start_date" name="start_date" value="<?= $this->input->get('start_date')
             ?>"> - <input type="date" id="end_date" name="end_date" value="<?= $this->input->get('end_date')
             ?>"> 
            </div>
            <form action="<?= base_url('Laporanpdf/generate'); ?>" method="post">

    		<table class="table table-hover" id="dataTable">
					<thead>
						<tr>
						<th scope="col"><input type="checkbox" id="select_all_patient" name="select_all_patient" value=""></th>
						<th scope="col">Tanggal</th>
						<th scope="col">Nama</th>
						<th scope="col">Departemen</th>
						<th scope="col">Diagnosa</th>
						<th scope="col">Obat</th>
						<th scope="col"><?php 
                            if ($user ['role_id'] == 1){
								echo "Conclusion";                            	
                            }elseif ($user ['role_id'] == 3){
                            	 echo "Conclusion From Dokter";
                            } ?></th>
                    <th scope="col">Aksi</th>
                    </tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($inbox as $p) : ?>
					<tr>
							<td scope="row"><?= $i; ?> <input type="checkbox" id="select_all_patient" name="ids_patient[]" value="<?= $p['id']; ?>"></td>
							<td><?= date('d F Y | H:i', strtotime($p['check_in'])) . ' - '. date('H:i', strtotime($p['check_out'])); ?></td>
							<td><?= $p['name']; ?></td>
							<td><?= $p['department']; ?></td>
							<td><?= myTruncate2($p['diagnosis'], 10); ?></td>
							<td><?= myTruncate2($p['drugs'], 10); ?></td>
                            <td><?php 
                            if ($user ['role_id'] == 1){
								echo $p['conclusion'];                            	
                            }elseif ($user ['role_id'] == 3){
                            	 echo $p['conclusion_from_dokter']; } ?></td>
							<td>
								<!-- <a href= "<?= base_url('diagnosa/editpat/') . $p['id']; ?>" class="badge badge-success">edit</a> -->
								<a href= "<?= base_url('diagnosa/detailpat/') . $p['id']; ?>" class="badge badge-warning">Detail</a>
							</td> 
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
					</tbody>
				</table>
            <button type="submit" class="btn btn-danger">Unduh Data</button>
                
                </form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

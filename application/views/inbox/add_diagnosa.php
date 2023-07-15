<div class="container-fluid">
 
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <?= form_open('inbox/editpat/' . $patient['id']); ?>
    <div class="modal-body">
   
        <div class="form-group">
            <label for="keluhan">Keluhan Pasien</label>
            <textarea name="keluhan" class="form-control" id="keluhan" rows="5" disabled="disabled"><?= $patient['keluhan']; ?>  </textarea>
            <?= form_error('keluhan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="diagnosis">Tindakan Medis</label>
            <textarea name="diagnosis" class="form-control" id="diagnosis"></textarea>
            <?= form_error('diagnosis', '<small class="text-danger pl-3">', '</small>'); ?>
    	</div>
        <div class="form-group">
            <label for="drugs">Obat yang direkomendasikan</label>
            <textarea name="drugs" class="form-control" id="drugs"><?= $patient['drugs']; ?></textarea>
            <?= form_error('drugs', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
    	<div class="form-group" id="conclusion">
         <?php if ($this->session->userdata('role_id') == '3') { ?>
            <label>Conclusion From Dokter : </label>
             <select class="form-control" id="conclusion_from_dokter" name="conclusion_from_dokter">
                 <option value=""></option>
                 <option <?php if($patient ['conclusion_from_dokter'] == "Rawat Jalan"){ echo "selected='selected'";} ?> value="Rawat Jalan">Rawat Jalan </option>
                 <option <?php if($patient ['conclusion_from_dokter'] == "Rawat Inap"){ echo "selected='selected'";} ?> value="Rawat Inap">Rawat Inap</option>
            </select>
             <?php }else{ ?>
            <label>Conclusion : </label>
            <select class="form-control" id="conclusion" name="conclusion">
                 <option <?php if($patient ['conclusion'] == "Beri Obat"){ echo "selected='selected'";} ?> value="Beri Obat">Beri Obat</option>
                 <option <?php if($patient ['conclusion'] == "Istirahat"){ echo "selected='selected'";} ?> value="Istirahat">Istirahat</option>
                 <option <?php if($patient ['conclusion'] == "Rujuk"){ echo "selected='selected'";} ?> value="Rujuk">Rujuk</option>  
            </select>
                 <?php } ?>
            <?= form_error('conclusion', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    <button type="submit" class="btn btn-danger">Add Diagnosa</button>
    </form>
</div>
<div class="container-fluid">
 
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <?= form_open('keluhan/editpat/' . $patient['id']); ?>
    <div class="modal-body">
   
        <div class="form-group">
            <label for="check_in">Jam Masuk</label>
            <?php $exampleDate = $patient['check_in'];
            $newDate = date('Y-m-d\TH:i', strtotime($exampleDate)); ?>
            <input type="datetime-local" class="form-control" id="check_in" name="check_in" value="<?= $newDate; ?>">
            <?= form_error('check_in', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="check_out">Jam Keluar</label>
            <input type="time" class="form-control" id="check_out" name="check_out" value="<?= $patient['check_out']; ?>">
            <?= form_error('check_out', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan Pasien</label>
            <textarea name="keluhan" class="form-control" id="keluhan" rows="5"><?= $patient['keluhan']; ?></textarea>
            <?= form_error('keluhan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
    <button type="submit" class="btn btn-danger">Update Patient Data</button>
    </form>
</div>
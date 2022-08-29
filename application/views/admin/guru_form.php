<div class="container-fluid">
    <form method="POST" action="<?php echo base_url('
        admin/guru/input_aksi')?>">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" placeholder="Masukan NIK" 
            class="form-control">
            <?php echo form_error('nik', 'div class="text-danger 
            small" ml-3') ?> 
            <!-- pesan error home validasi -->
        </div>
        <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" placeholder="Masukan Nama Guru" 
            class="form-control">
            <?php echo form_error('nama_guru', 'div class="text-danger 
            small" ml-3') ?> 
            <!-- pesan error home validasi -->
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<div class="container-fluid">
    <h3> <?php echo $judul; ?></h3>
    <hr>
    <br>
    <form method="POST" action="<?php echo base_url('admin/kriteria/proses_tambah_kriteria'); ?>">
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nisn">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <select class="col-sm-5 " name="jk-siswa" >
                <option value="">Laki-Laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tempat_lahir_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="tgl_lahir_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Asal Sekolah</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="asal_sekolah">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">No Telfon</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="no_telfon_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="agama_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="alamat_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Saudara</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="saudara_siswa">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Jarak</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="jarak_siswa" placeholder="dalam satuan m">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password_siswa">
            </div>
        </div>
        <!-- tombol tambah data-->
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
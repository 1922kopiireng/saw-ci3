<div class="container-fluid">
    <h3> <?php echo $judul; ?></h3>
    <hr>
    <br>
    <form method="POST" action="<?php echo base_url('admin/calonsiswa/proses_edit_data'); ?>">
        <!-- ketika update model tidak tahu id berapa yg diupdate, dipanggil di model nantinya -->
        <input type="hidden" name="nisn" value="<?= $calonsiswa['nisn'];?>">

        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-5">
                <!-- mengambil data dari dikirim ke kontroller -->
                <input type="text" class="form-control" name="nisn" 
                value="<?= $calonsiswa['nisn'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-5">
                <!-- value=" $tabel['name-diinputan']" -->
                <input type="text" class="form-control" name="nama_siswa"
                value="<?= $calonsiswa['nama_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <select class="col-sm-5" name="jk-siswa" value="<?= $calonsiswa['jk-siswa'];?>">
                <option  value="">Laki-Laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>

        <div class="form-group row">
            <select name="jk_siswa" id="jk_siswa">
                <option value="">Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <!-- <div class="form-group">
			<div class="col-sm-3">
				<label for="gender">Jenis Kelamin</label>
			</div>
            <div class="col-sm-8 radio">
                <label>
                    <input type="radio" name="gender" id="laki-laki" value="L" <?= $calonsiswa->gender=='L'?'checked':'' ?>> Laki-Laki
                </label>
                <label>
                    <input type="radio" name="gender" id="perempuan" value="P" <?= $calonsiswa->gender=='P'?'checked':'' ?>> Perempuan
                </label>
			</div>
		</div> -->

        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tempat_lahir_siswa" 
                value="<?= $calonsiswa['tempat_lahir_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="tgl_lahir_siswa" value="<?= $calonsiswa['tgl_lahir_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Asal Sekolah</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="asal_sekolah" value="<?= $calonsiswa['asal_sekolah'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">No Telfon</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="no_telfon_siswa" value="<?= $calonsiswa['no_telfon_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="agama_siswa" value="<?= $calonsiswa['agama_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="alamat_siswa" value="<?= $calonsiswa['alamat_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Saudara</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="saudara_siswa" value="<?= $calonsiswa['saudara_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Jarak</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="jarak_siswa" placeholder="dalam satuan M" 
                value="<?= $calonsiswa['jarak_siswa'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password_siswa" value="<?= $calonsiswa['nama_siswa'];?>">
            </div>
        </div>
        <!-- tombol tambah data-->
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
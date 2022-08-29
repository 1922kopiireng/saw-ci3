<div class="container mt-3">
    <div class="card">
        <h5 class="card-header bg-primary text-white ">Formulir Pendaftaran</h5>
        <div class="card-body">
            <form>
                <h5>Wali Siswa</h5>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Wali Siswa</label>
                    <input type="email" class="form-control" id="nama-wali" aria-describedby="emailHelp" placeholder="Nama Wali Siswa">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin Wali Siswa</label>
                    <select class="form-control" id="jk-wali" placeholder="Jenis-Kelamin">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Agama Wali Siswa</label>
                    <input type="text" class="form-control" id="agama-wali" placeholder="Agama Wali Siswa">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan Wali Siswa</label>
                    <input type="text" class="form-control" id="pekerjaan-wali" placeholder="Pekerjaan Wali Siswa">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Gaji Wali Siswa</label>
                    <input type="text" class="form-control" id="gaji-wali" placeholder="Gaji Wali Siswa">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Telfon Wali Siswa</label>
                    <input type="text" class="form-control" id="no-wali" placeholder="No Telfon Wali Siswa">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat Wali Siswa</label>
                    <textarea class="form-control" id="alamat-wali" rows="3"></textarea placeholder="Alamat Wali Siswa">
                </div>
                <br>

                <!-- siswa -->
                
                <h5>Siswa</h5>
                <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah Siswa</label>
                    <input type="text" class="form-control" id="asal-sekolah" placeholder="Asal Sekolah Siswa">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Surat Keterangan Lulus</label>
                    <input type="text" class="form-control" id="nilai-skl" placeholder="Nilai Surat Keterangan Lulus">
                </div>
                
                <div class="prestasi">
                    <label for="prestasi">Prestasi Siswa</label> 
                    <div class="input-group "> 
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="input-prestasi">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pendaftaran</label>
                    <input type="date" class="form-control" id="tanggal-pendaftaran">
                </div>

                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="verifikasi">
                    <label class="form-check-label" for="gridCheck">
                        Saya bersedia mendaftar
                    </label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>            
</div>
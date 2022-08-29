<?php //var_dump($calonsiswa);?>
<div class="container-fluid">

    <div class="card card shadow mb-4">
        <!-- Card Database -->
        <div class="card-header py-3">
            <h1 class="h3 font-weight-bold mb-4 text-primary">Daftar Calon Siswa</h1>
           <!-- base url berisi nama controller/metode yg dipakai -->
            <a href=" <?= base_url('admin/calonsiswa/tambah_data'); ?>" class="btn btn-primary btn-sm float-right">Tambah
                Data</a>
            
        </div>

        <div class="card-body">
            <div class="table-respoonsive">
            <table class="table table-bordered">
        <tr>
            <td>NISN</td>
            <td>Nama Siswa</td>
            <td>Jenis Kelamin</td>
            <td>Tempat Lahir</td>
            <td>Tanggal Lahir</td>
            <td>Asal Sekolah</td>
            <td>No Telfon</td>
            <td>Agama</td>
            <td>Alamat</td>
            <td>Saudara</td>
            <td>Jarak /Meter</td>
            <td>Password</td>
            <td>Aksi</td>
        </tr>

        <?php foreach ($calonsiswa as $cs ) : ?>
        
        <tr>
            <!-- memanggil sesuai dengan nama ditabel -->
            <td><?= $cs['nisn']; ?></td>
            <td><?= $cs['nama_siswa']; ?></td>
            <td><?= $cs['jk_siswa']; ?></td>
            <td><?= $cs['tempat_lahir_siswa']; ?></td>
            <td><?= $cs['tgl_lahir_siswa']; ?></td>
            <td><?= $cs['asal_sekolah']; ?></td>
            <td><?= $cs['no_telfon_siswa']; ?></td>
            <td><?= $cs['agama_siswa']; ?></td>
            <td><?= $cs['alamat_siswa']; ?></td>
            <td><?= $cs['saudara_siswa']; ?></td>
            <td><?= $cs['jarak_siswa']; ?></td>
            <td><?= $cs['password_siswa']; ?></td>
            <td>
                <!--mengambil data di calon siswa untuk diedit 
                menggunakan method edit_data | bisa dicek dengan 
                mengarahkan cursor ke edit nanti disebelah kiri bawah ada nisnnya-->
                <!-- mengarahkan ke controller -->
                <a href=" <?= base_url() ?>admin/calonsiswa/edit_data/<?= $cs['nisn'];?>" 
                    class="badge badge-primary">Edit
                </a>

                <a href="<?= base_url()?>admin/Calonsiswa/
                    hapus_data/<?= $cs['nisn'];?>"class="badge 
                    badge-danger">Hapus
                </a>
            </td>
        </tr>
        
        <?php endforeach;?>
    </table>
            </div>
        </div>
    </div>
    
    

</div>
        <!-- <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Gaji</th>
            <th scope="col">No Telfon</th>
            <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">W01</th>
            <td>Mark</td>
            <td>40</td>
            <td>Laki-Laki</td>
            <td>islam</td>
            <td>guru</td>
            <td>2000</td>
            <td>086xxx</td>
            <td>Gonggang</td>
            </tr>
            
        </tbody> -->

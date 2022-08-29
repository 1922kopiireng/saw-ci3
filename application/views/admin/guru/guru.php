
<?php //var_dump($gurupenerimaansiswa);?>
<div class="container-fluid">

<div class="card card shadow mb-4">
    <!-- Card Database -->
    <div class="card-header py-3">
        <h1 class="h3 font-weight-bold mb-4 text-primary">Daftar Guru</h1>
       <!-- base url berisi nama controller/metode yg dipakai -->
        <a href=" <?= base_url('admin/kriteria/tambahdkriteria'); ?>" class="btn btn-primary btn-sm float-right">Tambah
            Guru</a>
        
    </div>

    <div class="card-body">
        <div class="table-respoonsive">
        <table class="table table-bordered">
    <tr>
        <td>No</td>
        <td>NIK </td>
        <td>Nama </td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Password</td>
        <td>Aksi</td>
    </tr>

    <?php foreach ($gurupenerimaansiswa as $gps ) : ?>
    
    <tr>
        <?php $no=1; ?>
        <!-- memanggil sesuai dengan nama ditabel -->
        <td><?= $no++?></td>
        <td><?= $gps['nik']; ?></td>
        <td><?= $gps['nama_guru']; ?></td>
        <td><?= $gps['jk_guru']; ?></td>
        <td><?= $gps['alamat_guru']; ?></td>
        <td><?= $gps['password_guru']; ?></td>
        <td>
            <!--mengambil data di calon siswa untuk diedit 
            menggunakan method edit_data | bisa dicek dengan 
            mengarahkan cursor ke edit nanti disebelah kiri bawah ada nisnnya-->
            <!-- mengarahkan ke controller -->
        <a href=" <?= base_url() ?>admin/guru/edit_data/<?= $gps['nik'];?>" 
            class="badge badge-primary">Edit
        </a>

        <a href="<?= base_url()?>admin/guru/
            hapus_data/<?= $gps['nik'];?>"class="badge 
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

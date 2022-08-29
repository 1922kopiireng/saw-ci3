
<?php //var_dump($gurupenerimaansiswa);?>
<div class="container-fluid">

<div class="card card shadow mb-4">
    <!-- Card Database -->
    <div class="card-header py-3">
        <h1 class="h3 font-weight-bold mb-4 text-primary">Daftar Pendaftar</h1>
       <!-- base url berisi nama controller/metode yg dipakai -->
        <a href=" <?= base_url('admin/pendaftaran/tambahddaftar'); ?>" class="btn btn-primary btn-sm float-right">Tambah
            Daftar</a>
        
    </div>

    <div class="card-body">
        <div class="table-respoonsive">
        <table class="table table-bordered">
    <tr>
        
        <td>No Pendaftaran </td>
        <td>Nilai SKL </td>
        <td>Tanggal Daftar</td>
        <td>Prestasi</td>
        <td>Keterangan</td>
        <td>Aksi</td>
    </tr>

    <?php foreach ($pendaftaran as $daftar ) : ?>
    
    <tr>
      
        <!-- memanggil sesuai dengan nama ditabel -->
      
        <td><?= $daftar['no_daftar']; ?></td>
        <td><?= $daftar['nilai_skl']; ?></td>
        <td><?= $daftar['tgl_daftar']; ?></td>
        <td><?= $daftar['prestasi']; ?></td>
        <td><?= $daftar['keterangan_daftar']; ?></td>
        <td>
            <!--mengambil data di calon siswa untuk diedit 
            menggunakan method edit_data | bisa dicek dengan 
            mengarahkan cursor ke edit nanti disebelah kiri bawah ada nisnnya-->
            <!-- mengarahkan ke controller -->
        <a href=" <?= base_url() ?>admin/pendaftaran/edit_data/<?= $daftar['no_daftar'];?>" 
            class="badge badge-primary">Edit
        </a>

        <a href="<?= base_url()?>admin/pendaftaran/
            hapus_data/<?= $daftar['no_daftar'];?>"class="badge 
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


<?php //var_dump($kriteria);?>
<div class="container-fluid">

<div class="card card shadow mb-4">
    <!-- Card Database -->
    <div class="card-header py-3">
        <h1 class="h3 font-weight-bold mb-4 text-primary">Pengumuman Penerimaan Siswa Baru</h1>
        
    </div>

    <div class="card-body">
        <div class="table-respoonsive">
        <table class="table table-bordered">
    <tr>
        <td>No</td>
        <td>No Pendaftaran </td>
        <td>NISN </td>
        <td>Nilai SKL</td>
        <td>Nama Siswa</td>
        <td>Asal Sekolah</td>
        <td>Keterangan</td>

    </tr>

    <?php foreach ($pengumuman as $peng) : ?>
    
    <tr>
        <?php $no=1; ?>
        <!-- memanggil sesuai dengan nama ditabel -->
        <td><?= $no++?></td>
        <td><?= $peng['no_pendaftaran']; ?></td>
        <td><?= $peng['nisn']; ?></td>
        <td><?= $peng['nilai_skl']; ?></td>
        <td><?= $peng['nama_siswa']; ?></td>
        <td><?= $peng['asal_sekolah']; ?></td>
        <td><?= $peng['keterangan']; ?></td>
    
    </tr>
    
    <?php endforeach;?>
</table>
        </div>
    </div>
</div>



</div>
  
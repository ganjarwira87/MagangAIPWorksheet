<?php

    include "koneksi.php";

?>
<h2>Latihan</h2>
<table border="1">

   
    <thead>
    <tr>
        <td>No</td>
        <td>Nama Pegawai</td>
        <td>Nama Bidang</td>
        <td>Jumlah Pendapatan</td>
        <td>keterangan</td>

    </tr>
    </thead>
    <?php
        $sql ="SELECT master_pegawai.nama_pegawai,master_bidang.nama_bidang,SUM(master_pendapatan.pendapatan)AS'jumlah_pendapatan' 
        FROM master_pegawai 
        INNER JOIN master_bidang ON master_pegawai.id_bidang = master_bidang.id_bidang 
        INNER JOIN master_pendapatan ON master_pegawai.id_pegawai = master_pendapatan.id_pegawai 
        GROUP BY master_pegawai.id_pegawai;";
       $no=1;
        $call = mysqli_query($mysqli, $sql);
        while($dan=mysqli_fetch_array($call)) {
            $nama_bidang=$dan['nama_bidang'];
            $nama_pegawai=$dan['nama_pegawai'];
            $jumlah_pendapatan=$dan['jumlah_pendapatan'];
    ?>
    <tbody>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $nama_bidang ?> </td>
            <td><?php echo $nama_pegawai ?></td>
            <td><?php echo $jumlah_pendapatan ?></td>
            <td></td>
        </tr>
    </tbody>
    <?php
    $no++;
        }
    ?>
</table>
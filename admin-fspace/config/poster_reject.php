<?php
// konvert file ke excel
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data REJECT Art Poster.xls");
?>
<?php
include "../koneksi.php";
?>
<h3>Data REJECT Art Poster</h3>

<table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col" width="85px">Username</th>
            <th scope="col">Jenis Pembayaran</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Instansi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Email</th>
            <th scope="col">No WA</th>
            <th scope="col">ID Line</th>
            <!-- <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td> -->
        </tr>
    </thead>
    <?php
    $no = 1;
    $tampil = mysqli_query($conn, "SELECT 
                                                fspace_account.username,
                                                fspace_account.jenis_payment,
                                                fspace_poster.nama_lengkap,
                                                fspace_poster.instansi,
                                                fspace_poster.kelas,
                                                fspace_poster.email,
                                                fspace_poster.nowa,
                                                fspace_poster.idline
                                                FROM fspace_account INNER JOIN fspace_poster 
                                                WHERE `jenis_lomba` LIKE '%poster%' AND `validasi_payment`=0");
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
        <tbody>
            <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['jenis_payment']; ?></td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['instansi']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['nowa']; ?></td>
                <td><?php echo $data['idline']; ?></td>
                <!-- <td>
                        <a class="btn-danger" onclick="return confirm('Yaqueen mau dihapuss?')" href="../config/hapus-solovocal.php?npm=<?php echo $data['id']; ?> "><i class="fa fa-trash" style="padding: 3px; border-radius:30%;"></i></a>
                    </td> -->
            </tr>
        </tbody>
    <?php
    }
    ?>


</table>
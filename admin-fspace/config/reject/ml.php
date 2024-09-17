<?php
// konvert file ke excel
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Reject Lomba Sport.xls");
?>

<?php
include "../../koneksi.php";
?>

<h3>Data REJECT Lomba ML</h3>

<table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col" width="25px">No</th>
            <th scope="col" width="85px">Username</th>
            <th scope="col">Tipe Akun</th>
            <th scope="col">Jenis Lomba</th>
            <th scope="col">Jenis Payment</th>
            <th scope="col">Validasi Payment</th>
        </tr>
    </thead>
    <?php

    $no = 1;
    $tampil = mysqli_query($conn, "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%mobile-legends%' AND `validasi_payment`=0");
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
        <tbody>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['tipe_akun']; ?></td>
                <td><?php echo $data['jenis_lomba']; ?></td>
                <td><?php echo $data['jenis_payment']; ?></td>
                <td><?php echo $data['validasi_payment']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>
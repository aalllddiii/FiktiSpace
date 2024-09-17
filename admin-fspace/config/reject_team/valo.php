<?php
// konvert file ke excel
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pendaftar Anggota Lomba Valorant.xls");
?>

<?php
include "../../koneksi.php";
?>

<h3>Data Pendaftar Team Lomba Valorant</h3>

<table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col" width="25px">No</th>
            <th scope="col" width="85px">Username</th>
            <th scope="col">Nama Team</th>
            <th scope="col">Status</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Instansi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Email</th>
            <th scope="col">No HP</th>
            <th scope="col">ID Line</th>
            <th scope="col">Riot ID</th>
            <!-- <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td> -->
        </tr>
    </thead>
    <?php

    $no = 1;
    $tampil = mysqli_query($conn, "SELECT * FROM fspace_valorant WHERE `validasi`=0 AND `nama_lengkap` <> ''");
    while ($data = mysqli_fetch_array($tampil)) {

    ?>
        <tbody>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['nama_team']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['instansi']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['nowa']; ?></td>
                <td><?php echo $data['idline']; ?></td>
                <td><?php echo $data['riotid_tag']; ?></td>
                <!-- <td>
                            <a class="btn-danger" onclick="return confirm('Yaqueen mau dihapuss?')" href="../config/hapus-solovocal.php?npm=<?php echo $data['id']; ?> "><i class="fa fa-trash" style="padding: 3px; border-radius:30%;"></i></a>
                        </td> -->
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>
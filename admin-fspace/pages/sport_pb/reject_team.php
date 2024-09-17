<?php
require('../include/session.php');
require('../include/header.php');
require('../include/navbar.php');

$username = $_GET['username'];

$no = 1;
$tampil = mysqli_query($conn, "SELECT * FROM fspace_pointblank WHERE `username` = '$username'");
while ($data = mysqli_fetch_array($tampil)) {
    $nama_team = $data['nama_team'];
};
?>

<body>


    <div class="table-responsive jumbotron">

        <h2 class="text-center">Data Team <b><?php echo $nama_team; ?></b> Point Blank</h2>
        <h2 class="text-danger text-center">REJECT</h2>

        <a href="reject.php" class="btn btn-primary">⏎All Team</a>
        <a class="btn btn-success" href="approve_team.php?username=<?php echo $username; ?>" role="button">TO Approved</a>
        <a class="btn btn-danger" href="reject_team.php?username=<?php echo $username; ?>" role="button">TO Reject</a>
        <a href="../../config/reject_team/pb.php" class="btn btn-success float-right">Report Excel</a>

        </br>
        </br>
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
                    <th scope="col">Nickname</th>
                    <th scope="col">KRS</th>
                    <th scope="col" width="10px">Validasi</th>
                    <!-- <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td> -->
                </tr>
            </thead>
            <?php

            $no = 1;
            $tampil = mysqli_query($conn, "SELECT * FROM fspace_pointblank WHERE `validasi`=0 AND `nama_lengkap` <> '' AND `nama_team` = '$nama_team'");
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
                        <td><?php echo $data['nickname']; ?></td>
                        <td><a href="../../../data_user/<?= $data['krs'] ?>" target="__blank">KRS</a></td>
                        <td>
                            <a class="btn btn-success" onclick="return confirm('Approve data?')" href="../../config/update/approve_team/pb.php?id=<?php echo $data['id']; ?>&username=<?= $username ?>" role="button">✔</a><br>
                            <a class="btn btn-secondary" onclick="return confirm('Reject data?')" href="#" role="button" style="  pointer-events: none;cursor: default;">╳</a>
                        </td>
                        <!-- <td>
                            <a class="btn-danger" onclick="return confirm('Yaqueen mau dihapuss?')" href="../config/hapus-solovocal.php?npm=<?php echo $data['id']; ?> "><i class="fa fa-trash" style="padding: 3px; border-radius:30%;"></i></a>
                        </td> -->
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>

    <?php
    require('../include/footer.php')
    ?>
</body>

</html>
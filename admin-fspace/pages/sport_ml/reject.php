<?php
require('../include/session.php');
require('../include/header.php');
require('../include/navbar.php');
?>

<body>

    <div class="table-responsive jumbotron">
        <h2 class="text-danger text-center">Data Team REJECT Mobile Legend</h2>
        <a href="../" class="btn btn-info">⏎ Home</a>
        <a href="approve.php" class="btn btn-success">TO Approved</a>
        <a href="reject.php" class="btn btn-danger">TO Reject</a>
        <a href="../../config/reject/ml.php" class="btn btn-success float-right">Report Excel</a>
        <br><br>
        <table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" width="25px">No</th>
                    <th scope="col" width="85px">Username</th>
                    <th scope="col">Tipe Akun</th>
                    <th scope="col">Jenis Lomba</th>
                    <th scope="col">Jenis Payment</th>
                    <th scope="col" width="100px">Payment</th>
                    <th scope="col">Validasi Payment</th>
                    <th scope="col" width="10px">Detail</th>
                    <th scope="col" width="10px">Validasi</th>
                    <!-- <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td> -->
                </tr>
            </thead>
            <?php

            $no = 1;
            // $tampil = mysqli_query($conn, "select * from fspace_account");
            $tampil = mysqli_query($conn, "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%mobile-legends%' AND `validasi_payment`=0");
            while ($data = mysqli_fetch_array($tampil)) {
                // $team = $data['nama_team'];
                // $show = mysqli_query($conn, "SELECT * FROM `fspace_mobilelegend` WHERE `nama_team`='$team');
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['tipe_akun']; ?></td>
                        <td><?php echo $data['jenis_lomba']; ?></td>
                        <td><?php echo $data['jenis_payment']; ?></td>
                        <td> <a href="../../data_payment/<?= $data['payment'] ?>" target="__blank">Pembayaran</a></td>
                        <td><?php echo $data['validasi_payment']; ?></td>
                        <td><a class="btn btn-primary" href="reject_team.php?username=<?php echo $data['username']; ?>" role="button">Detail</a></td>
                        <td>
                            <a class="btn btn-success" onclick="return confirm('Approve data?')" href="../../config/update/approve/ml.php?id=<?php echo $data['id']; ?>" role="button">✔</a><br>
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
<?php
require('../include/session.php');
require('../include/header.php');
require('../include/navbar.php');
?>

<body>

    <div class="table-responsive jumbotron">
        <h2 class="text-success text-center">Data APPROVED Poster</h2>
        <a href="../" class="btn btn-info">⏎ Home</a>
        <a href="approve.php" class="btn btn-success">TO Approved</a>
        <a href="reject.php" class="btn btn-danger">TO Reject</a>
        <a href="../../config/art_excel_poster.php" class="btn btn-success float-right">Report Excel</a>
        <br><br>
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
                    <th scope="col">Pembayaran</th>
                    <th scope="col" width="10px">Opsi</th>
                    <!-- <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td> -->
                </tr>
            </thead>
            <?php

            $no = 1;
            $tampil = mysqli_query($conn, "SELECT 
                                            fspace_account.id,
                                            fspace_account.username,
                                            fspace_account.jenis_payment,
                                            fspace_account.payment,
                                            fspace_poster.nama_lengkap,
                                            fspace_poster.instansi,
                                            fspace_poster.kelas,
                                            fspace_poster.email,
                                            fspace_poster.nowa,
                                            fspace_poster.idline
                                            FROM fspace_account INNER JOIN fspace_poster ON fspace_account.username = fspace_fotografi.username
                                            WHERE `jenis_lomba` LIKE '%poster%' AND `validasi_payment`=1");
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
                        <td> <a href="../../data_payment/<?= $data['payment'] ?>" target="__blank">Pembayaran</a></td>
                        <td>
                            <a class="btn btn-secondary" onclick="return confirm('Approve data?')" href="#" role="button" style="pointer-events: none;cursor: default;">✔</a><br>
                            <a class="btn btn-danger" onclick="return confirm('Reject data?')" href="../../config/update/art_reject/pt.php?id=<?php echo $data['id']; ?>" role="button">╳</a>
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
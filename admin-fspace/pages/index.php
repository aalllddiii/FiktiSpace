<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Login dulu ngab');
        location.href= '../'
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <img src="" alt="logo"  !important> -->
        <a href="index.php"><img src="../assets/img/logo copy.png" style="width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-danger float-right" href="../config/logout.php">logout</a>
            </div>
        </div>
    </nav>

    <!-- art div -->
    <div class="table-responsive container">
        <h2 style="text-align:center;margin-top:25px">Lomba ART</h2>
        </br>

        <div class="card-deck" style="text-align: center;">
            <div class="card" style="height: 200px;">
                <!-- <img class="card-img-top" src="../assets/img/vocal.png" alt="Card image cap" style="padding:1px"> -->
                <div class="card-body">
                    <i class="fa fa-inbox"></i>
                    <h5 class="card-title">Solo Vocal</h5>
                    <h3>
                        <?php
                        include "../koneksi.php";
                        $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%solo-vocal%'";
                        $query = mysqli_query($conn, $tampil);
                        $count = mysqli_num_rows($query);
                        echo "$count";
                        ?>
                    </h3>
                    <a href="art_solo/reject.php" class="btn btn-primary">Detail</a>
                </div>
            </div>

            <div class="card" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Fotografi</h5>
                    <h3>
                        <?php
                        include "../koneksi.php";
                        $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%photography%'";
                        $query = mysqli_query($conn, $tampil);
                        $count = mysqli_num_rows($query);
                        echo "$count";
                        ?>
                    </h3>
                    <a href="art_fotografi/reject.php" class="btn btn-primary">Detail</a>
                </div>
            </div>

            <div class="card" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Poster</h5>
                    <h3>
                        <?php
                        include "../koneksi.php";
                        $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%poster%'";
                        $query = mysqli_query($conn, $tampil);
                        $count = mysqli_num_rows($query);
                        echo "$count";
                        ?>
                    </h3>
                    <a href="art_poster/reject.php" class="btn btn-primary">Detail</a>
                </div>
            </div>

            <!-- lomba sport -->
            <div class="table-responsive container">
                <h2 style="text-align:center; margin-top:25px">Lomba Sport</h2>
                </br>

                <div class="card-deck" style="text-align: center;">
                    <div class="card" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Mobile legend</h5>
                            <h3>
                                <?php
                                include "../koneksi.php";
                                $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%mobile-legends%'";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                            <a href="sport_ml/reject.php" class="btn btn-primary">Detail</a>
                        </div>
                    </div>

                    <div class="card" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Valorant</h5>
                            <h3>
                                <?php
                                include "../koneksi.php";
                                $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%valorant%'";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                            <a href="sport_valo/reject.php" class="btn btn-primary">Detail</a>
                        </div>
                    </div>

                    <div class="card" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Point Blank</h5>
                            <h3>
                                <?php
                                include "../koneksi.php";
                                $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%point-blank%'";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                            <a href="sport_pb/reject.php" class="btn btn-primary">Detail</a>
                        </div>
                    </div>

                    <!-- <div class="card" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">PUBGM</h5>
                            <h3>
                                <?php
                                // include "../koneksi.php";
                                // $tampil = "SELECT * FROM `fspace_account` WHERE `jenis_lomba` LIKE '%pubgm%'";
                                // $query = mysqli_query($conn, $tampil);
                                // $count = mysqli_num_rows($query);
                                // echo "$count";
                                ?>
                            </h3>
                            <a href="sport_pubgm/reject.php" class="btn btn-primary">Detail</a>
                        </div>
                    </div> -->
                </div>

                <?php
                require('include/footer.php')
                ?>
</body>

</html>
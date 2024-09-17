<?php
session_start();

if($_SESSION['user-jenis-lomba'] == ''){
  echo "<script>alert('Anda belum memilih kompetisi, Silahkan registrasi terlebih dahulu.');
          location.href = '../../index.php';
        </script>";
}

require "../../connection.php";

$username= $_SESSION['user-username'];
$jenis_lomba= $_SESSION['user-jenis-lomba'];

if($jenis_lomba == 'photography'){
  $database_user= 'fspace_fotografi';
}elseif($jenis_lomba == 'solo-vocal'){
  $database_user= 'fspace_solovocal';
}elseif($jenis_lomba == 'poster'){
  $database_user= 'fspace_poster';
}

//akun
$sql= "SELECT * FROM fspace_account WHERE `username` = '$username'";
$result= mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  $tipe_akun= $row['tipe_akun'];
  $jenis_lomba= $row['jenis_lomba'];
  $jenis_payment= $row['jenis_payment'];
  $payment= $row['payment'];
  $validasi_payment= $row['validasi_payment'];
}

//data peserta
$sql_1= "SELECT * FROM $database_user WHERE `username` = '$username'";
$result_1= mysqli_query($conn, $sql_1);
while($row = mysqli_fetch_assoc($result_1)){
  $nama_lengkap= $row['nama_lengkap'];
  $instansi= $row['instansi'];
  $kelas= $row['kelas'];
  $email= $row['email'];
  $nowa= $row['nowa'];
  $idline= $row['idline'];
}

?>
<?php 
    $dir= "../";
    $page= "home";
    $comp= "art";
    require $dir."user-admin-partials/header.php";
?>
          <!-- information start -->
          <div class="sales-report-area mt-5 mb-4">
            <div class="row">
              <div class="col-md-4">
                <div class="single-report mb-xs-30">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa-solid fa-user"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Account</h4>
                      <p><?=strtoupper($tipe_akun)?></p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                      <h2><?=$username?></h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="single-report mb-xs-30">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon ml-1"><i class="fa-solid fa-ticket"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Competition</h4>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                      <h2><?=$jenis_lomba?></h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="single-report">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa-solid fa-wallet"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Payment</h4>
                      <!-- <p style="background-color: darkgreen; color: white;">Gopay</p> -->
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                      <h2>Status</h2>
                      <?php
                      if($validasi_payment == 1){
                        echo"<p style='background-color: green; color: white;'>was paid</p>";
                      }else{
                        echo"<p style='background-color: crimson; color: white;'>not yet paid</p>";
                      }
                      ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- information end -->
          <!-- official table -->
          <div class="row">
            <div class="col-lg-6 mt-1">
              <div class="card">
                <div class="seo-fact sbg1">
                  <div class="p-4 d-flex justify-content-between align-items-center">
                    <div class="seofct-icon"><h2><i class="fa-solid fa-user-astronaut"></i> <?=$nama_lengkap?></h2></div>
                  </div>
                </div>
              </div>

            </div>
            <!-- official table -->
            <div class="col-lg-6 mt-1">
              <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Data Peserta</h4>
                  <div class="single-table">
                    <div class="table-responsive">
                      <table class="table table-bordered text-center">
                        <thead class="text-uppercase bg-primary">
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Email</th>
                            <th scope="col">Whatsapp</th>
                            <th scope="col">LINE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><div style="width: max-content;"><?=$nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$instansi?></div></th>
                            <th><div style="width: max-content;"><?=$kelas?></div></th>
                            <th><div style="width: max-content;"><?=$email?></div></th>
                            <th><div style="width: max-content;"><?=$nowa?></div></th>
                            <th><div style="width: max-content;"><?=$idline?></div></th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        
        
        
      
<?php 
    require $dir."user-admin-partials/footer.php";
?>

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

if($jenis_lomba == 'mobile-legends'){
  $database_user= 'fspace_mobilelegend';
  $id_game= 'userid';
}elseif($jenis_lomba == 'point-blank'){
  $database_user= 'fspace_pointblank';
  $id_game= 'nickname';
}elseif($jenis_lomba == 'valorant'){
  $database_user= 'fspace_valorant';
  $id_game= 'riotid_tag';
}elseif($jenis_lomba == 'pubgm'){
  $database_user= 'fspace_pubgm';
  $id_game= 'nickid';
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

//official
$sql_o= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'official'";
$result_o= mysqli_query($conn, $sql_o);
while($row = mysqli_fetch_assoc($result_o)){
  $nama_team= $row['nama_team'];
  $official_nama_lengkap= $row['nama_lengkap'];
  $official_instansi= $row['instansi'];
  $official_kelas= $row['kelas'];
  $official_email= $row['email'];
  $official_nowa= $row['nowa'];
  $official_idline= $row['idline'];
  $official_id_game= $row["$id_game"];
  $official_krs= $row['krs'];
  $official_validasi= $row['validasi'];
}

//member1
$sql_1= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'member1'";
$result_1= mysqli_query($conn, $sql_1);
while($row = mysqli_fetch_assoc($result_1)){
  $member1_nama_lengkap= $row['nama_lengkap'];
  $member1_instansi= $row['instansi'];
  $member1_kelas= $row['kelas'];
  $member1_email= $row['email'];
  $member1_nowa= $row['nowa'];
  $member1_idline= $row['idline'];
  $member1_id_game= $row["$id_game"];
  $member1_krs= $row['krs'];
  $member1_validasi= $row['validasi'];
}

//member2
$sql_2= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'member2'";
$result_2= mysqli_query($conn, $sql_2);
while($row = mysqli_fetch_assoc($result_2)){
  $member2_nama_lengkap= $row['nama_lengkap'];
  $member2_instansi= $row['instansi'];
  $member2_kelas= $row['kelas'];
  $member2_email= $row['email'];
  $member2_nowa= $row['nowa'];
  $member2_idline= $row['idline'];
  $member2_id_game= $row["$id_game"];
  $member2_krs= $row['krs'];
  $member2_validasi= $row['validasi'];
}

//member3
$sql_3= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'member3'";
$result_3= mysqli_query($conn, $sql_3);
while($row = mysqli_fetch_assoc($result_3)){
  $member3_nama_lengkap= $row['nama_lengkap'];
  $member3_instansi= $row['instansi'];
  $member3_kelas= $row['kelas'];
  $member3_email= $row['email'];
  $member3_nowa= $row['nowa'];
  $member3_idline= $row['idline'];
  $member3_id_game= $row["$id_game"];
  $member3_krs= $row['krs'];
  $member3_validasi= $row['validasi'];
}

//member4
$sql_4= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'member4'";
$result_4= mysqli_query($conn, $sql_4);
while($row = mysqli_fetch_assoc($result_4)){
  $member4_nama_lengkap= $row['nama_lengkap'];
  $member4_instansi= $row['instansi'];
  $member4_kelas= $row['kelas'];
  $member4_email= $row['email'];
  $member4_nowa= $row['nowa'];
  $member4_idline= $row['idline'];
  $member4_id_game= $row["$id_game"];
  $member4_krs= $row['krs'];
  $member4_validasi= $row['validasi'];
}

//member5
$sql_5= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'member5'";
$result_5= mysqli_query($conn, $sql_5);
while($row = mysqli_fetch_assoc($result_5)){
  $member5_nama_lengkap= $row['nama_lengkap'];
  $member5_instansi= $row['instansi'];
  $member5_kelas= $row['kelas'];
  $member5_email= $row['email'];
  $member5_nowa= $row['nowa'];
  $member5_idline= $row['idline'];
  $member5_id_game= $row["$id_game"];
  $member5_krs= $row['krs'];
  $member5_validasi= $row['validasi'];
}

//member6
$sql_6= "SELECT * FROM $database_user WHERE `username` = '$username' AND `status` = 'member6'";
$result_6= mysqli_query($conn, $sql_6);
while($row = mysqli_fetch_assoc($result_6)){
  $member6_nama_lengkap= $row['nama_lengkap'];
  $member6_instansi= $row['instansi'];
  $member6_kelas= $row['kelas'];
  $member6_email= $row['email'];
  $member6_nowa= $row['nowa'];
  $member6_idline= $row['idline'];
  $member6_id_game= $row["$id_game"];
  $member6_krs= $row['krs'];
  $member6_validasi= $row['validasi'];
}

?>
<?php 
    $dir= "../";
    $page= "home";
    $comp= "sport";
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
                    <div class="seofct-icon"><h2><i class="fa-solid fa-people-group"></i> <?=$nama_team?></h2></div>
                  </div>
                </div>
              </div>

              <br>

              <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Official</h4>
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
                            <th scope="col"><?=$id_game?></th>
                            <th scope="col">KRS</th>
                            <th scope="col">Validasi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><div style="width: max-content;"><?=$official_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$official_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$official_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$official_email?></div></th>
                            <th><div style="width: max-content;"><?=$official_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$official_idline?></div></th>
                            <th><div style="width: max-content;"><?=$official_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$official_krs?>" target="__blank"><?php if($official_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($official_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- official table -->
            <div class="col-lg-6 mt-1">
              <div class="card">
                <div class="card-body">
                  <h4 class="header-title">My Team</h4>
                  <div class="single-table">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped text-center">
                        <thead class="text-uppercase">
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Email</th>
                            <th scope="col">Whatsapp</th>
                            <th scope="col">LINE</th>
                            <th scope="col"><?=$id_game?></th>
                            <th scope="col">KRS</th>
                            <th scope="col">Validasi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><div style="width: max-content;"><?=$member1_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$member1_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$member1_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$member1_email?></div></th>
                            <th><div style="width: max-content;"><?=$member1_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$member1_idline?></div></th>
                            <th><div style="width: max-content;"><?=$member1_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$member1_krs?>" target="__blank"><?php if($member1_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($member1_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
                          </tr>
                          <tr>
                            <th><div style="width: max-content;"><?=$member2_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$member2_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$member2_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$member2_email?></div></th>
                            <th><div style="width: max-content;"><?=$member2_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$member2_idline?></div></th>
                            <th><div style="width: max-content;"><?=$member2_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$member2_krs?>" target="__blank"><?php if($member2_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($member2_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
                          </tr>
                          <tr>
                            <th><div style="width: max-content;"><?=$member3_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$member3_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$member3_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$member3_email?></div></th>
                            <th><div style="width: max-content;"><?=$member3_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$member3_idline?></div></th>
                            <th><div style="width: max-content;"><?=$member3_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$member3_krs?>" target="__blank"><?php if($member3_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($member3_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
                          </tr>
                          <tr>
                            <th><div style="width: max-content;"><?=$member4_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$member4_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$member4_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$member4_email?></div></th>
                            <th><div style="width: max-content;"><?=$member4_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$member4_idline?></div></th>
                            <th><div style="width: max-content;"><?=$member4_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$member4_krs?>" target="__blank"><?php if($member4_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($member4_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
                          </tr>
                          <tr>
                            <th><div style="width: max-content;"><?=$member5_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$member5_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$member5_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$member5_email?></div></th>
                            <th><div style="width: max-content;"><?=$member5_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$member5_idline?></div></th>
                            <th><div style="width: max-content;"><?=$member5_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$member5_krs?>" target="__blank"><?php if($member5_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($member5_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
                          </tr>
                          <tr>
                            <th><div style="width: max-content;"><?=$member6_nama_lengkap?></div></th>
                            <th><div style="width: max-content;"><?=$member6_instansi?></div></th>
                            <th><div style="width: max-content;"><?=$member6_kelas?></div></th>
                            <th><div style="width: max-content;"><?=$member6_email?></div></th>
                            <th><div style="width: max-content;"><?=$member6_nowa?></div></th>
                            <th><div style="width: max-content;"><?=$member6_idline?></div></th>
                            <th><div style="width: max-content;"><?=$member6_id_game?></div></th>
                            <td><div style="width: max-content;"><a href="../../data_user/<?=$member6_krs?>" target="__blank"><?php if($member6_krs != ''){echo "Lihat disini";}else{echo "";}?></a></div></td>
                            <th>
                              <?php 
                              if($member6_validasi == 1){
                                echo"<i class='fa-solid fa-circle-check' style='color:green;'></i>";
                              }else{
                                echo"<i class='fa-solid fa-circle-xmark' style='color:red;'></i>";
                              }
                              ?>
                            </th>
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

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











// official update database
if(isset($_POST['official_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'official'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
}

// member1 update database
if(isset($_POST['member1_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'member1'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
}

// member2 update database
if(isset($_POST['member2_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'member2'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
}

// member3 update database
if(isset($_POST['member3_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'member3'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
}

// member4 update database
if(isset($_POST['member4_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'member4'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
}

// member5 update database
if(isset($_POST['member5_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'member5'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
}

// member6 update database
if(isset($_POST['member6_submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    $user_id_game = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id_game']));

    $start_array = 0;
    $nama_explode = explode(" ",$nama_lengkap);

    $nama_krs = "";
    
    while($start_array < count($nama_explode)){
        $nama_krs .= "$nama_explode[$start_array]";
        $nama_krs .= "_";
        $start_array++;
    }

    if($_FILES['krs']['name'] != ''){
        $file_name = htmlspecialchars($_FILES['krs']['name']);
        $explode = explode('.',$file_name);
        $file_type = end($explode);
        $file_size = htmlspecialchars($_FILES['krs']['size']);
        $file_tmp = htmlspecialchars($_FILES['krs']['tmp_name']);
        $file_name_result = 'krs_'. $nama_krs . rand() .'.'. $file_type;
        
        $type_file = ['jpg','jpeg','png','pdf',];
        if (in_array($file_type, $type_file)){
            if ($file_size < 5000000){
                move_uploaded_file($file_tmp, '../../data_user/'. $file_name_result);
            }else{
                echo"<script>alert('KRS harus berukuran dibawah 5MB'); location.href='users.php';</script>";
                exit;
            }
        }else{
            echo"<script>alert('KRS hanya berformat png, jpg, jpeg, dan pdf'); location.href='users.php';</script>";
            exit;
        }

    }else{
        $file_name_result = "";
    }
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline',
                `$id_game`='$user_id_game',
                `krs`='$file_name_result' 
                WHERE `username` = '$username' AND `status` = 'member6'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
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
  $official_id_game= $row[$id_game];
  $official_krs= $row['krs'];
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
  $member1_id_game= $row[$id_game];
  $member1_krs= $row['krs'];
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
  $member2_id_game= $row[$id_game];
  $member2_krs= $row['krs'];
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
  $member3_id_game= $row[$id_game];
  $member3_krs= $row['krs'];
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
  $member4_id_game= $row[$id_game];
  $member4_krs= $row['krs'];
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
  $member5_id_game= $row[$id_game];
  $member5_krs= $row['krs'];
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
  $member6_id_game= $row[$id_game];
  $member6_krs= $row['krs'];
}









?>

<!-- tampilan -->
<?php 
    $dir= "../";
    $page= "my team";
    $comp= "sport";
    require $dir."user-admin-partials/header.php";
?>

<style>
    .form-control{
        height: 35px;
    }
</style>

<div class="row">
    <!-- official -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Official</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z\s]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$official_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$official_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$official_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$official_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$official_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$official_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$official_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($official_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
                
            </div>
            <button type="submit" name="official_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <!-- member1 -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Anggota 1</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$member1_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$member1_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$member1_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$member1_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$member1_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$member1_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$member1_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($member1_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
            </div>
            <button type="submit" name="member1_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <!-- member2 -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Anggota 2</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$member2_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$member2_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$member2_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$member2_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$member2_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$member2_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$member2_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($member2_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
            </div>
            <button type="submit" name="member2_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <!-- member3 -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Anggota 3</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$member3_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$member3_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$member3_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$member3_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$member3_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$member3_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$member3_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($member3_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
            </div>
            <button type="submit" name="member3_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <!-- member4 -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Anggota 4</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$member4_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$member4_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$member4_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$member4_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$member4_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$member4_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$member4_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($member4_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
            </div>
            <button type="submit" name="member4_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <!-- member5 -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Anggota 5</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$member5_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$member5_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$member5_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$member5_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$member5_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$member5_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$member5_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($member5_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
            </div>
            <button type="submit" name="member5_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <!-- member6 -->
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px;">
            <h2>Data Anggota 6</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Nama Lengkap</h6>
                <input type="text" pattern="[A-Za-z]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$member6_nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$member6_instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$member6_kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$member6_email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$member6_nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$member6_idline?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2"><?=$id_game?></h6>
                <input type="text" class="form-control" name="id_game" value="<?=$member6_id_game?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">KRS</h6>
                <input type="file" class="form-control" style="height: 50px;" name="krs">
                <?php
                if($member6_krs != ''){
                    echo"<p><b>KRS :</b> Sudah diupload</p>";
                }else{
                    echo"<p><b>KRS : <span class='text-danger'>Belum diupload</span></b></p>";
                }
                ?>
            </div>
            <button type="submit" name="member6_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>



</div>

<?php 
    require $dir."user-admin-partials/footer.php";
?>
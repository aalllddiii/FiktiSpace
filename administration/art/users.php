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

// update database
if(isset($_POST['submit'])){
    $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nama_lengkap']));
    $instansi = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['instansi']));
    $kelas = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['kelas']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
    $nowa = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['nowa']));
    $idline = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['idline']));
    
    $sql = "UPDATE `$database_user` 
            SET `nama_lengkap`='$nama_lengkap',
                `instansi`='$instansi',
                `kelas`='$kelas',
                `email`='$email',
                `nowa`='$nowa',
                `idline`='$idline'
                WHERE `username` = '$username'";

    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Data berhasil disimpan !'); location.href='users.php';</script>";
        exit;
    }else{
        echo"<script>alert('Data gagal disimpan !'); location.href='users.php';</script>";
        exit;
    }
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

<!-- tampilan -->
<?php 
    $dir= "../";
    $page= "my team";
    $comp= "art";
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
                <input type="text" pattern="[A-Za-z\s]+" title="Only alphabets" class="form-control" name="nama_lengkap" value="<?=$nama_lengkap?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Instansi</h6>
                <input type="text" class="form-control" name="instansi" value="<?=$instansi?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Kelas</h6>
                <input type="text" class="form-control" name="kelas" value="<?=$kelas?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">Email</h6>
                <input type="text" class="form-control" name="email" value="<?=$email?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">No. Whatsapp</h6>
                <input type="text" class="form-control" name="nowa" value="<?=$nowa?>">
            </div>
            <div class="form-group">
                <h6 class="mb-2">ID Line</h6>
                <input type="text" class="form-control" name="idline" value="<?=$idline?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


</div>

<?php 
    require $dir."user-admin-partials/footer.php";
?>
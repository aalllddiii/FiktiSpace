<?php
session_start();
require "./connection.php";

if (isset($_POST['submit'])){
  $username= htmlspecialchars($_POST['username']);
  $password1= htmlspecialchars($_POST['password1']);
  $password2= htmlspecialchars($_POST['password2']);
  $type_account= htmlspecialchars($_POST['type-account']);

  if($password1 !== $password2){
    echo "<script>alert('Konfirmasi password tidak sesuai');</script>";
  }else{
    $sql= "SELECT * FROM fspace_account WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
      echo "<script>alert('Username tidak tersedia');</script>";
    }else{
      $sql= "INSERT INTO `fspace_account`(`id`, `username`, `password`, `tipe_akun`, `jenis_lomba`, `jenis_payment`, `payment`, `validasi_payment`) 
             VALUES ('','$username',PASSWORD('$password1'),'$type_account','','','','0')";
      $result= mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
          echo "<script>alert('Akun berhasil dibuat');
                  location.href = './sign-in.php';
                </script>";

        } else {
          echo "<script>alert('Akun gagal dibuat');</script>";
        }
    }
  }
}
?>
<!-- Header -->
<?php 
    $dir= "./";
    $data1= "Sign Up | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<section class="bg-white py-0">


  <div class="container-fluid" style="height: 100vh;">
    <div class="row">
      <div class="col-lg-4 col-md-4 text-center bg-df">
        <img src="./images/maskot-cengo.png" alt="" srcset="" class="maskot-snsu">
      </div>

      <div class="col-lg-8 col-md-8 col-12 px-5">
        <h4 style="position: relative; top:30px;"><a href="./index.php"><i class="fa-solid fa-arrow-left"></i></a></h4>
        <form action="" method="post" class="mx-auto">
          <br><br>
          <div class="text-center">
            <h1 style="line-height: 10px;">Sign Up</h1>
          </div>
          <br><br>

          <div class="row justify-content-center">
            <div class="col-8">

            <h5>Username</h5>
            <input type="text" class="form-control bg-white text-dark" name="username" placeholder="Username" style="border: 2px solid grey;">
            <br>

            <h5>Password</h5>
            <input type="password" class="form-control bg-white text-dark" name="password1" placeholder="Password" style="border: 2px solid grey;">
            <br>

            <h5>Re-type password</h5>
            <input type="password" class="form-control bg-white text-dark" name="password2" placeholder="Password" style="border: 2px solid grey;">
            <br>

            <h5>Select account type</h5>
            <div class="form-check">
              <input class="form-check-input" name="type-account" id="inlineRadio1" type="radio" name="jenis" value="mfg">
              <label class="form-check-label" for="inlineRadio1">Mahasiswa FIKTI Gunadarma</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="type-account" id="inlineRadio2" type="radio" name="jenis" value="mg">
              <label class="form-check-label" for="inlineRadio2">Mahasiswa Gunadarma</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="type-account" id="inlineRadio3" type="radio" name="jenis" value="u">
              <label class="form-check-label" for="inlineRadio3">Umum</label>
            </div>

            <br>
            <button type="submit" name="submit" class="btn btn-prim" style="width: 100%;">Sign up</button>
            <br><br>
            <p>already have account? <a href="sign-in.php">Sign In</a></p><br>

            </div>
          </div>

        </form>
      </div>
    </div>
  </div>


</section>
<!-- Footer -->
<?php 
        require $dir."partials/footer.php";
    ?>

<script>

</script>
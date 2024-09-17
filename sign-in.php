<?php
session_start();
require "./connection.php";

if (isset($_POST['submit'])){
  $username= htmlspecialchars($_POST['username']);
  $password= htmlspecialchars($_POST['password']);

  $sql= "SELECT * FROM fspace_account WHERE `username` = '$username' AND `password` = PASSWORD('$password')";
  $result= mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) == 1){
    $_SESSION['user-username']= $username;
    $_SESSION['user-type-account']= $row['tipe_akun'];
    $_SESSION['user-jenis-lomba']= $row['jenis_lomba'];
    echo "<script>alert('Selamat datang $username');
                  location.href = './index.php';
                </script>";

  }else{
    echo "<script>alert('Username / Password salah');</script>";
  }
}
?>
<!-- Header -->
<?php 
    $dir= "./";
    $data1= "Sign In | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<section class="bg-white py-0">


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 text-center bg-df">
        <img src="./images/maskot-cengo.png" alt="" srcset="" class="maskot-snsu">
      </div>

      <div class="col-lg-8 col-md-8 col-12 px-5">
        <h4 style="position: relative; top:30px;"><a href="./index.php"><i class="fa-solid fa-arrow-left"></i></a></h4>
        <form action="" method="post" class="mx-auto">
          <br><br>
          <div class="text-center">
            <h1 style="line-height: 10px;">Sign In</h1>
          </div>
          <br><br>

          <div class="row justify-content-center">
            <div class="col-8">
              <h5>Username</h5>
              <input type="text" name="username" class="form-control bg-white text-dark" placeholder="Username" style="border: 2px solid grey;">
              <br>
              <h5>Password</h5>
              <input type="password" name="password" class="form-control bg-white text-dark" placeholder="Password" style="border: 2px solid grey;">
              <br><br>
              <button type="submit" name="submit" class="btn btn-prim" style="width: 100%;">Sign In</button>
              <br><br>
              <p>Don't have account? <a href="sign-up.php">Sign Up</a></p><br>
              <br><br>
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
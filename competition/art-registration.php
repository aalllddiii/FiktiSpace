<?php
session_start();

if(!isset($_SESSION["user-username"])){
  header("location: ../sign-in.php");
}


if (!isset($_POST['register-competition'])){
header("location:../index.php");
}else{
  $slug = htmlspecialchars($_POST['type-competition']);
  $name = htmlspecialchars($_POST['name-competition']);
  $username = htmlspecialchars($_SESSION['user-username']);
}
?>
<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Art Registration | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<style>
    h2{
        margin: 5px;
    }
    h5{
        margin: 15px 0 5px;
    }
    h6{
        margin: 15px 0 5px;
    }
</style>
<body>
 
<section class="bg-white py-0">

  <div class="container-fluid" style="height: 100vh;">
    <div class="row">

      <div class="col-12 px-5">
        <h4 style="position: fixed; top:30px;"><a href="<?=$slug?>.php" ><i class="fa-solid fa-arrow-left"></i></a></h4>

        <form action="./r-upload.php" method="post" class="mx-auto">
          <input type="text" name="username" value="<?=$username?>" hidden>
          <input type="text" name="name-competition" value="<?=$name?>" hidden>
          <input type="text" name="type-competition" value="<?=$slug?>" hidden>
                  
          <br><br>
          <div class="text-center">
            <h2 class="my-0">Registration</h2>
          </div>

          <div class="col-12 text-center">
            <img src="../images/fspace-logo.png" alt="" srcset="" style="width: 150px;">
          </div>

            <div class="row justify-content-center">
              <div class="col-lg-8 col-9">
                <h5>Nama Lengkap</h5>
                <input type="text" name="nama-lengkap" class="form-control text-dark bg-white" placeholder="..."
                  style="border: 2px solid grey;" required>
                <div class="row">
                  <div class="col-12 col-lg-6 col-md-6">
                    <h6>Username</h6>
                    <input type="text" name="" class="form-control text-dark font-weight-bold" value="<?=$username?>"
                      style="border: 2px solid grey;" disabled>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6">
                    <h6>Competition</h6>
                    <input type="text" name="" class="form-control text-dark font-weight-bold" value="<?=$name?>"
                      style="border: 2px solid grey;" disabled>
                  </div>
                </div>
                <br><br>
                <button type="submit" name="<?=$slug?>" class="btn btn-prim px-5" style="width: 100%; height: 45px;"
                  onclick="return confirm('Anda tidak dapat mengubah lomba setelah registrasi \nApakah anda yakin?')">Register</button>
                <br><br><br>

              </div>
            </div>

        </form>

      </div>
    </div>
  </div>


</section>


</body>

<!-- Footer -->
<?php 
        require $dir."partials/footer.php";
    ?>

<script>

</script>
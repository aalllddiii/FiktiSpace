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

$sql_1= "SELECT * FROM `fspace_account` WHERE `username` = '$username' AND `jenis_lomba` = '$jenis_lomba'";
$result_1= mysqli_query($conn, $sql_1);
while($row = mysqli_fetch_assoc($result_1)){
  $payment= $row['payment'];
}

if(isset($_POST['payment_submit'])){

    $file_name = htmlspecialchars($_FILES['payment']['name']);
    $explode = explode('.',$file_name);
    $file_type = end($explode);
    $file_size = htmlspecialchars($_FILES['payment']['size']);
    $file_tmp = htmlspecialchars($_FILES['payment']['tmp_name']);
    $file_name_result = 'payment_'. $username .'_'. $jenis_lomba .'_'. rand() .'.'. $file_type;
        
    $type_file = ['jpg','jpeg','png','pdf',];
    if (in_array($file_type, $type_file)){
        if ($file_size < 5000000){
            move_uploaded_file($file_tmp, '../../data_payment/'. $file_name_result);
        }else{
            echo"<script>alert('File harus berukuran dibawah 5MB'); location.href='payment.php';</script>";
            exit;
        }
    }else{
        echo"<script>alert('File hanya berformat png, jpg, jpeg, dan pdf'); location.href='payment.php';</script>";
        exit;
    }
    
    $sql= "UPDATE `fspace_account` SET `payment` = '$file_name_result' WHERE `username` = '$username' AND `jenis_lomba`='$jenis_lomba'";
    $result= mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>alert('Pembayaran berhasil diupload!'); location.href='payment.php';</script>";
        exit;
    }else{
        echo"<script>alert('Pembayaran gagal diupload'); location.href='payment.php';</script>";
        exit;
    }
}

?>
<?php 
    $dir= "../";
    $page= "payment";
    $comp= "art";
    require $dir."user-admin-partials/header.php";
?>
<div class="row">
    <!-- official -->
    <div class="col-12 col-lg-6 col-md-6">
        <div class="bg-white px-5 mt-4 py-4" style="border-radius: 5px; min-height: 300px;">
            <h5>Pembayaran dapat dilakukan melalui</h5><br>
            <img src="../../images/dana.png" alt="" style="width: 70px;">
            <p><b>Dana :</b> 0895328119372 (Virli Chaerunnisa)</p><br>
            <img src="../../images/gopay.png" alt="" style="width: 70px;">
            <p><b>Gopay :</b> 0895328119372 (Virli Chaerunnisa)</p><br>
            <img src="../../images/bca.png" alt="" style="width: 40px;">
            <p><b>BCA :</b> 6815169712 (Virli Chaerunnisa)</p>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-md-6">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white px-5 my-4 py-4" style="border-radius: 5px; min-height: 300px;">
            <h2>Payment</h2><br>
            <div class="form-group">
                <h6 class="mb-2">Upload pembayaran disini</h6>
                <input type="file" class="form-control" style="height: 50px;" name="payment">
                <?php
                if($payment != ''){
                    echo"<p><b>File :</b> <a href='../../data_payment/". $payment ."' target='__blank'>Lihat disini</a></p>";
                }
                ?>
                
            </div>
            <button type="submit" name="payment_submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<div class="row">

    <?php

    if($payment != ''){
        echo"<div class='col-12 col-lg-12 col-md-12'>
                <div class='px-3 my-4 py-4' style='border-radius: 5px; border: 2px solid black;'>
                    <h4>Pembayaran telah dilakukan !</h4><br>
                    <p>Terima Kasih telah melakukan pembayaran, Jika dalam <b>1x24 jam</b> status pembayaran belum berubah, dapat menghubungi contact person yang tertera di halaman kompetisi setiap lomba</p>
                </div>
            </div>";
            
    }
    ?>
</div>


<?php 
    require $dir."user-admin-partials/footer.php";
?>
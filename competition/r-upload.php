<?php
require "../connection.php";

$enter = '\n';

if(isset($_POST['mobile-legends'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_team= htmlspecialchars($_POST['team-name']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_mobilelegend`(`id`, `username`, `nama_team`, `status`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`, `userid`, `krs`, `validasi`) 
               VALUES ('','$username','$nama_team','official','','','','','','','','','0'),
                      ('','$username','$nama_team','member1','','','','','','','','','0'),
                      ('','$username','$nama_team','member2','','','','','','','','','0'),
                      ('','$username','$nama_team','member3','','','','','','','','','0'),
                      ('','$username','$nama_team','member4','','','','','','','','','0'),
                      ('','$username','$nama_team','member5','','','','','','','','','0'),
                      ('','$username','$nama_team','member6','','','','','','','','','0');";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}

if(isset($_POST['point-blank'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_team= htmlspecialchars($_POST['team-name']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_pointblank`(`id`, `username`, `nama_team`, `status`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`, `nickname`, `krs`, `validasi`) 
               VALUES ('','$username','$nama_team','official','','','','','','','','','0'),
                      ('','$username','$nama_team','member1','','','','','','','','','0'),
                      ('','$username','$nama_team','member2','','','','','','','','','0'),
                      ('','$username','$nama_team','member3','','','','','','','','','0'),
                      ('','$username','$nama_team','member4','','','','','','','','','0'),
                      ('','$username','$nama_team','member5','','','','','','','','','0'),
                      ('','$username','$nama_team','member6','','','','','','','','','0');";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}

if(isset($_POST['pubgm'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_team= htmlspecialchars($_POST['team-name']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_pubgm`(`id`, `username`, `nama_team`, `status`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`, `nickid`, `krs`, `validasi`) 
               VALUES ('','$username','$nama_team','official','','','','','','','','','0'),
                      ('','$username','$nama_team','member1','','','','','','','','','0'),
                      ('','$username','$nama_team','member2','','','','','','','','','0'),
                      ('','$username','$nama_team','member3','','','','','','','','','0'),
                      ('','$username','$nama_team','member4','','','','','','','','','0'),
                      ('','$username','$nama_team','member5','','','','','','','','','0'),
                      ('','$username','$nama_team','member6','','','','','','','','','0');";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}

if(isset($_POST['valorant'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_team= htmlspecialchars($_POST['team-name']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_valorant`(`id`, `username`, `nama_team`, `status`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`, `riotid_tag`, `krs`, `validasi`) 
               VALUES ('','$username','$nama_team','official','','','','','','','','','0'),
                      ('','$username','$nama_team','member1','','','','','','','','','0'),
                      ('','$username','$nama_team','member2','','','','','','','','','0'),
                      ('','$username','$nama_team','member3','','','','','','','','','0'),
                      ('','$username','$nama_team','member4','','','','','','','','','0'),
                      ('','$username','$nama_team','member5','','','','','','','','','0'),
                      ('','$username','$nama_team','member6','','','','','','','','','0');";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}


if(isset($_POST['photography'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_lengkap= htmlspecialchars($_POST['nama-lengkap']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_fotografi`(`id`, `username`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`) 
               VALUES ('','$username','$nama_lengkap','','','','','')";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}

if(isset($_POST['solo-vocal'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_lengkap= htmlspecialchars($_POST['nama-lengkap']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_solovocal`(`id`, `username`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`) 
               VALUES ('','$username','$nama_lengkap','','','','','')";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}

if(isset($_POST['poster'])){
    $jenis_lomba= htmlspecialchars($_POST['type-competition']);
    $nama_lengkap= htmlspecialchars($_POST['nama-lengkap']);
    $username= htmlspecialchars($_POST['username']);

    $sql= "UPDATE `fspace_account` SET `jenis_lomba`='$jenis_lomba' WHERE `username` = '$username'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $sql= "INSERT INTO `fspace_poster`(`id`, `username`, `nama_lengkap`, `instansi`, `kelas`, `email`, `nowa`, `idline`) 
               VALUES ('','$username','$nama_lengkap','','','','','')";

        $result= mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Registrasi berhasil ! ". $enter . $enter ."Silahkan Login kembali');
                    location.href = '../logout.php?href=sign-in';
                  </script>";
        }else{
            echo "<script>alert('Registrasi gagal!');</script>";
        }

    }else{
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}

?>
<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Mobile Legends | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Mobile Legends";
    $competition_type= "sport";
    $competition_slug= "mobile-legends";
    $bg_logo= "logo-ml.png";
    $display_text= "no";
    $bg_logoc= "bgc-ml";
    $option_class_logo= "";
    $bg_description= "Mobile Legends merupakan permainan game online yang dimainkan secara tim. Dalam satu tim akan
                      terdiri atas 5 orang. Pada games Mobile Legend, dua tim akan beradu untuk menyerang base lawan
                      dan mempertahankan base milik tim sendiri dalam durasi 15 menit untuk 1 ronde.";
    $comp_description= "Kompetisi ini terdiri dari 24 team dengan sistem knockout yang mana terdapat empat babak yaitu
                        Penyisihan,Quarter Final,Semi Final dan juga Final";
    $comp_rules= ["Mahasiswa Aktif FIKTI Universitas Gunadarma.",
                  "Wajib Memiliki KRS/Blanko Pembayaran Universitas Gunadarma.",
                  "Satu tim wajib terdiri dari 5 orang pemain dan 1 cadangan opsional."];
    $comp_date= "11, 12, 17, 18 June 2022";
    $comp_location= "Livestream Youtube / Zoom Cloud Meetings";
    $comp_fee= "IDR 50.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "erlanggaeditya (Erlang)"],
           ["whatsapp", "087812489921 (Rayi)"]];

    require $dir."partials/competition_pages.php"
    ?>



    <?php
        require $dir."partials/copy-footer.php";
    ?>
</div>


<!-- #page -->
<a id="back-to-top" href="" class="show"><i class="flaticon-up-arrow"></i></a>


    <!-- Footer -->
    <?php 
        require $dir."partials/footer.php";
    ?>

    <script>

    </script>
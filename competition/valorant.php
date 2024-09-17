<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Valorant | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Valorant";
    $competition_type= "sport";
    $competition_slug= "valorant";
    $bg_logo= "logo-valorant-red.png";
    $display_text= "no";
    $bg_logoc= "bgc-valorant";
    $option_class_logo= "comp-logo-pubg";
    $bg_description= "Game valorant adalah game FPS yang terdiri dari 24 ronde. Dengan masing-masing tim terbagi
                      menjadi attacker dan defender. Attacker adalah tim yang bertugas untuk memasangkan bom.
                      Sementara tim defender mempunyai tugas untuk mencegah hal tersebut terjadi";
    $comp_description= "Kompetisi ini terdiri dari 24 team dengan sistem knockout yang mana terdapat empat babak yaitu
                        Penyisihan, Quarter Final, Semi Final dan juga Final.";
    $comp_rules= ["Mahasiswa Aktif FIKTI Universitas Gunadarma.",
                  "Wajib Memiliki KRS/Blanko Pembayaran Universitas Gunadarma.",
                  "Satu tim wajib terdiri dari 5 orang pemain dan 1 cadangan opsional."];
    $comp_date= "11, 12, 17, 18 June 2022";
    $comp_location= "Livestream Youtube / Zoom Cloud Meetings";
    $comp_fee= "IDR 50.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "timganteng14 (Daud)"],
           ["whatsapp", "081584381138 (Erland)"]];

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
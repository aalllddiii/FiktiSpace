<!-- Header -->
<?php 
    $dir= "../";
    $data1= "PUBG Moblie | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "PUBG Mobile";
    $competition_type= "sport";
    $competition_slug= "pubgm";
    $bg_logo= "logo-pubg.png";
    $display_text= "no";
    $bg_logoc= "bgc-pubg";
    $option_class_logo= "comp-logo-pubg";
    $bg_description= "PlayerUnknown's Battlegrounds adalah sebuah permainan video dengan genre battle royale, di
                      mana 100 orang sekaligus dapat bermain secara daring. Pemenang dari permainan ini adalah
                      individu atau tim yang dapat bertahan hingga akhir";
    $comp_description= "Kompetisi ini terdiri 16 team dengan menggunakan sistem perolehan point.";
    $comp_rules= ["Mahasiswa Aktif Universitas Gunadarma.",
                  "Wajib Memiliki KRS/Blanko Pembayaran Universitas Gunadarma.",
                  "Satu tim wajib terdiri dari 4 orang pemain dan 1 cadangan opsional."];
    $comp_date= "11, 12, 17, 18 June 2022";
    $comp_location= "Livestream Youtube / Zoom Cloud Meetings";
    $comp_fee= "IDR 50.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "irgiwijaya12 (...)"],
           ["whatsapp", "085788488023 (Agnes Alexandria)"]];

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
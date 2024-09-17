<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Point Blank | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Point Blank";
    $competition_type= "sport";
    $competition_slug= "point-blank";
    $bg_logo= "logo-pb.png";
    $display_text= "no";
    $bg_logoc= "bgc-pb";
    $option_class_logo= "comp-logo-pb";
    $bg_description= "Point Blank adalah sebuah permainan komputer ber-genre FPS yang dimainkan secara
                      online/offline. Permainan ini dikembangkan oleh Zepetto dari Korea Selatan dan
                      dipublikasikan oleh Zepetto. Selain di Korea Selatan, permainan ini mempunyai server sendiri
                      di beberapa negara seperti Thailand, Rusia, Indonesia, Brasil, Turki, Amerika Serikat, dan
                      Peru. Di Indonesia, permainan ini sekarang telah dikelola oleh Zepetto";
    $comp_description= "Kompetisi ini terdiri dari 16 team dengan sistem knockout yang mana terdiri dari 3 babak yaitu
                        Penyisihan , Semi Final dan Final.";
    $comp_rules= ["Mahasiswa Aktif Universitas Gunadarma.",
                  "Wajib Memiliki KRS/Blanko Pembayaran Universitas Gunadarma.",
                  "Satu tim wajib terdiri dari 4 orang pemain dan 1 cadangan opsional."];
    $comp_date= "11, 12, 17, 18 June 2022";
    $comp_location= "Livestream Youtube / Zoom Cloud Meetings";
    $comp_fee= "IDR 50.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "arsyarivaldo (Rasya)"],
	       ["whatsapp", "082113089858 (Dany)"]];

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
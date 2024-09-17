<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Solo Vocal | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Solo Vocal";
    $competition_type= "art";
    $competition_slug= "solo-vocal";
    $bg_logo= "";
    $display_text= "yes";
    $text_headerc= "SOLO VOCAL";
    $bg_logoc= "bgc-solov";
    $option_class_logo= "comp-logo-solov";
    $bg_description= "Menyanyi solo (vokal solo) adalah bernyanyi tunggal dengan teknik vokal yang baik
                      dengan mengedepankan ekspresi, improvisasi, dan interpretasi sesuai karakteristik lagu";
    $comp_description= "Pada kompetisi ini peserta dapat menyesuaikan lagu yang akan dibawakan dengan genre yang telah
                        ditetapkan, yaitu genre pop. Panitia menyediakan 3 lima lagu pilihan, yaitu Takut (Idgitaf), Its Only
                        Me (Kaleb J), Blue Jeans (Gangga), Melawan Restu (Mahalini), dan W.H.U.T (Aisha Retno). Durasi
                        penampilan maksimal lima menit atau sama dengan satu lagu.";
    $comp_rules= ["Peserta lomba adalah siswa/i SMA/SMK/sederajat dan Mahasiswa.",
                  "Peserta adalah siswa/i terdaftar di sekolah tersebut atau mahasiswa/i aktif di institusi.",
                  "Peserta merupakan perorangan."];
    $comp_date= "11, 13, 14, 15, 16 June 2022";
    $comp_location= "Google drive / Zoom Cloud Meetings";
    $comp_fee= "IDR 35.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "khansamarshandaa (Marsha)"],
           ["whatsapp", "085780877367 (Rafa)"]];

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
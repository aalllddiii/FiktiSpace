<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Photography | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Photography";
    $competition_type= "art";
    $competition_slug= "photography";
    $bg_logo= "";
    $display_text= "yes";
    $text_headerc= "PHOTOGRAPHY";
    $bg_logoc= "bgc-photography";
    $option_class_logo= "comp-logo-solov";
    $bg_description= "Kompetisi dalam menyajikan sebuah karya visual berbentuk foto tentang suatu tema
                      tertentu yang informatif dan mengandung makna khusus. Kompetisi ini meliputi proses
                      pengambilan foto, editing minimal, hingga presentasi tentang makna foto yang diambil";
    $comp_description= "Pada kompetisi Fotografi ini, memiliki tema yaitu street fotografi pada ajang kompetisi ini
                        memiliki beberapa rangkaian tahapan yaitu pengumpulan karya,penjurian,posting karya
                        terbaik dan pengumuman pemenang.";
    $comp_rules= ["Peserta lomba adalah siswa/i SMA/SMK/sederajat dan Mahasiswa.",
                  "Peserta adalah siswa/i terdaftar di sekolah tersebut atau mahasiswa/i aktif di institusi.",
                  "Peserta merupakan perorangan."];
    $comp_date= "11, 13, 14, 15, 16 June 2022";
    $comp_location= "Google drive / Zoom Cloud Meetings";
    $comp_fee= "IDR 35.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "salsaintan (Bela)"],
           ["whatsapp", "089657712134 (Sheira)"]];

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
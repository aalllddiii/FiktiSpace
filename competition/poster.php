<!-- Header -->
<?php 
    $dir= "../";
    $data1= "Poster | Fikti Space 2022";
    require $dir."partials/header.php";
?>
<div id="page" class="site">

    <?php
        require $dir."partials/navbar.php";
    ?>



    <?php
    $competition_name= "Poster";
    $competition_type= "art";
    $competition_slug= "poster";
    $bg_logo= "";
    $display_text= "yes";
    $text_headerc= "POSTER";
    $bg_logoc= "bgc-poster";
    $option_class_logo= "comp-logo-solov";
    $bg_description= "Kompetisi poster digital adalah karya desain grafis berisi gambar dan huruf yang dibuat dengan
                      komputer, atau dibuat dengan manual lalu dipindai (scan) atau difoto agar berwujud digital";
    $comp_description= "Pada kompetisi Poster Digital ini memiliki tema yaitu “Kebudayaan Daerah Indonesia“ pada ajang
                        kompetisi ini memiliki beberapa rangkaian tahapan yaitu pengumpulan
                        karya,penjurian,posting karya terbaik dan pengumuman pemenang.";
    $comp_rules= ["Peserta lomba adalah siswa/i SMA/SMK/sederajat dan Mahasiswa.",
                  "Peserta adalah siswa/i terdaftar di sekolah tersebut atau mahasiswa/i aktif di institusi.",
                  "Peserta merupakan perorangan."];
    $comp_date= "11, 13, 14, 15, 16 June 2022";
    $comp_location= "Google drive / Zoom Cloud Meetings";
    $comp_fee= "IDR 35.000,00";
    $comp_note= "diskualifikasi diberlakukan jika ada kecurangan";
    $cp = [["line", "dalilaaaa. (Lila)"],
           ["whatsapp", "088293918826 (Syifa)"]];

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
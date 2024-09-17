<!-- Require partials(header) -->
<div id="content" class="site-content site-content-header">
        <div class="page-header flex-middle <?=$bg_logoc?>">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-7">
                        <img src="<?=$dir?>images/<?=$bg_logo?>" alt="" class="ml-5 <?=$option_class_logo?>">
                    </div>
                    <?php 
                    if ($display_text== "yes"){
                        echo "<div class='col-12'><h1 class='m-5 text-white tp-big-text'>$text_headerc</h1></div>";
                        }else{echo "";}?>
                </div>
                <div class="row my-5 text-white">
                <div class="col-12 col-lg-8 pl-5">
                        <p><?=$bg_description?></p>
                    </div>
                    <div class="col-12 col-lg-4 text-center mt-3 mb-5">
                        <form action="<?=$dir?>competition/<?=$competition_type?>-registration.php" method="post">
                            <input type="text" name="name-competition" value="<?=$competition_name?>" hidden>
                            <input type="text" name="type-competition" value="<?=$competition_slug?>" hidden>

                            <?php
                            if(isset($_SESSION['user-jenis-lomba'])){
                                $user_lomba = $_SESSION['user-jenis-lomba'];
                                $user_tipe = $_SESSION['user-type-account'];

                                if($user_lomba == ''){
                                    if($user_tipe == 'mg' && $competition_slug == 'mobile-legends'){
                                        //disabled
                                        echo "<div class='text-dark btn btn-large' style='border-radius: 0; background-color: #AAAAAA;'>Register</div>";
                                    }elseif($user_tipe == 'mg' && $competition_slug == 'valorant'){
                                        //disabled
                                        echo "<div class='text-dark btn btn-large' style='border-radius: 0; background-color: #AAAAAA;'>Register</div>";
                                    }elseif($user_tipe == 'u' && $competition_type == 'sport'){
                                        //disabled
                                        echo "<div class='text-dark btn btn-large' style='border-radius: 0; background-color: #AAAAAA;'>Register</div>";
                                    }else{
                                        // enabled
                                        echo "<button type='submit' name='register-competition' class='text-white btn btn-large btn-primary' style='border-radius: 0;'>Register</button>";
                                    }
                                }else{
                                    //disabled
                                    echo "<div class='text-dark btn btn-large' style='border-radius: 0; background-color: #AAAAAA;'>Register</div>";
                                }
                            }else{
                                // enabled
                                echo "<button type='submit' name='register-competition' class='text-white btn btn-large btn-primary' style='border-radius: 0;'>Register</button>";
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-dark-primary">
            <div class="container text-white">
            <div class="row">
                <div class="col-12 col-lg-10 col-md-10 order-lg-1 order-md-1 order-2 px-5">
                    <h3 class="text-primary">DESCRIPTION</h3>
                    <p><?=$comp_description?></p><br>
                    <h3 class="text-primary">RULES</h3>
                    
                    <?php 
                    $rule = 0; 
                    while($rule < count($comp_rules)){
                        echo "<div class='row'>
                              <div class='col-1 text-center text-white'>&bull;</div>
                              <div class='col-10 mb-3'>$comp_rules[$rule]</div>
                              </div>";
                        $rule++;
                    }?>
                    
                    <div class="row">
                        <div class="col-1"><h5 class="text-white"></h5></div>
                        <div class="col-11 mt-3"><a href="../guide-book/GD-<?=$competition_slug?>.pdf" target="__blank"><button class="btn btn-small btn-outline-success px-4 py-2">See more</button></a></div>
                    </div>
                    <br><br>
                

                    <h5 class="text-white py-0">Contact Person</h5>
                    <?php
                    $cp_on = 0;
                    while($cp_on < count($cp)){
                        echo "<i class='fa-brands fa-". $cp[$cp_on][0] ."'></i> ";
                        echo $cp[$cp_on][1];
                        echo "<br>";
                        $cp_on++;
                    }
                    ?>
                </div>
                <div class="col-10 col-lg-2 col-md-2 order-lg-2 order-md-2 order-1 px-2 mx-auto mb-5">
                    <div class="row p-2 desc-cp text-center">
                        <div class="col-6 col-lg-12 col-md-12 my-2">
                            <lord-icon
                                src="https://cdn.lordicon.com/drtetngs.json"
                                trigger="loop"
                                delay="700"
                                colors="primary:#e83a30"
                                style="width:40px;height:40px">
                            </lord-icon><br>

                            <b> <?=$comp_date?></b>
                        </div>
                        <div class="col-6 col-lg-12 col-md-12 my-2">
                            <lord-icon
                                src="https://cdn.lordicon.com/hfmdczge.json"
                                trigger="loop"
                                delay="700"
                                colors="primary:#e88c30"
                                style="width:40px;height:40px">
                            </lord-icon><br>

                            <b> <?=$comp_location?></b>
                        </div>
                        <div class="col-6 col-lg-12 col-md-12 my-2">
                            <lord-icon
                                src="https://cdn.lordicon.com/ucvsemjq.json"
                                trigger="loop"
                                delay="700"
                                colors="primary:#c7c116"
                                style="width:40px;height:40px">
                            </lord-icon><br>

                            <b> <?=$comp_fee?></b>
                        </div>
                        <div class="col-6 col-lg-12 col-md-12 my-2">
                            <lord-icon
                                src="https://cdn.lordicon.com/ndydpcaq.json"
                                trigger="loop"
                                delay="700"
                                colors="primary:#109121"
                                style="width:40px;height:40px">
                            </lord-icon><br>

                            <b> <?=$comp_note?></b>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


    </div>

    <div id="rules">
        <a href="#">
        <div class="rules-bg"></div>
        </a>

    </div>
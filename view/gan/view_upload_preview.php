<!-- Root Directory -->
<?php define('ROOT', realpath(__DIR__ . '/../..'));?>

<!DOCTYPE html>
<html lang="en">

    <?php include ROOT."/view/head.php"?>

    <body>
    
    <header class="header-bar d-flex d-lg-flex align-items-center" data-aos="fade-down">
        <div class="site-logo">
            <a href="<?php ROOT?>/">COX</a>
        </div>
      
        <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3" style="position: relative; top: 3px;">
            <?php 
                echo "
                    <a href='$ROOT/pages/gan/page_extract.php?{$_FILES['upload']['name']}'>
                        <span class='icon-arrow-right h3'></span>
                    </a>
                ";
            ?>
        </div>
    </header>
    
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <?php
              $uploadfile = './'. $_FILES['upload']['name'];
                if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)){
                    if($_FILES['upload']['type'] == 'image/jpeg' || $_FILES['upload']['type'] == 'image/png')
                        echo "
                            <div class='swiper-slide cover' style='background-image: url({$uploadfile});'>
                                <a href={$uploadfile} data-fancybox='gallery' class='zoom'><span class='fas fa-search'></span></a>
                            </div>
                        ";
                    else if($_FILES['upload']['type'] == 'video/mp4')
                        echo "<video width='100%' height='100%' controls><source src ={$uploadfile}></video>";
                    } else {
                    echo "File Upload Fail";
                }
            ?>
        </div>
    </div>

    <?php include ROOT."/view/footer.php"?>

    </body>
</html>
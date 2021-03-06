<!-- Root Directory -->
<?php define('ROOT', __DIR__);?>

<!doctype html>
<html lang="en">

   <?php include ROOT."/head.php"?>

   <body>
      <!--::menu part start::-->
      <?php include ROOT."/nav_home.php"?>
      <!--::menu part end::-->

      <!--::banner part start::-->
      <section class="banner_part">
         <div class="container">
            <div class="row align-content-center">
               <div class="col-lg-6">
                  <div class="banner_text aling-items-center">
                     <div class="banner_text_iner">
                        <h5>ABOUT US</h5>
                        <h2>Everyone can change their face easily</h2>
                        <p>
                           It's a platform where you can create new content with different content.<br>
                           If you were hesitant to create new content, now create your own with confidence!
                           We offer four themes, and you can create new content through the theme you want.
                        </p>
                        <a href="" class="btn_1 banner_btn ">How to use <i class="fas fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup"><span class="ti-control-play"></span></a>
      </section>
      <!--::banner part end::-->
      
      <!--::apartment_part end::-->
      <div class="apartment_part">
         <div class="container">
            <div class="row justify-content-between align-content-center">
               <div class="col-md-8 col-lg-7">
                  <div class="section_tittle">
                        <h1>Provide The <br>
                        Beautiful Services</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/spring.jpg" alt="">
                        <div class="single_appartment_text">
                           <h3>Zad</h3>
                           <p><i class="fas fa-apple-alt"></i> 정면 사진에 대한 변환인 3-D Faceswap 알고리즘을 적용하여 웹에서 실시간으로 사용자에게 얼굴을 합성한 결과를 보여줍니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="./zad.php" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>1 Image, 1 Video</p>
                        <a href="./zad.php"><h4 style="text-align: center;">Zad</h4></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/winter.jpg" alt="">
                        <div class="single_appartment_text">
                           <h3>Openpose</h3>
                           <p><i class="fas fa-apple-alt"></i> 3-D Faceswap 알고리즘으로 얼굴이 잘 검출되지 않는 동영상에 대해서도 Openpose를 활용하여 몸을 이용해 얼굴을 검출하여 결과를 보여줍니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="./openpose.php" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>1 Image, 1 Video</p>
                        <a href="./openpose.php"><h4 style="text-align: center;">Openpose</h4></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/autumn.jpg" alt="">
                        <div class="single_appartment_text">
                           <h3>Deepfake</h3>
                           <p><i class="fas fa-apple-alt"></i> Deepfake 알고리즘을 사용하여 얼굴을 바꿀 데이터를 직접 학습시켜 사용자에게 얼굴을 합성한 결과물을 자연스럽고 높은 퀄리티로 제공합니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="./deepfake.php" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>2 Videos</p>
                        <a href="./deepfake.php"><h4 style="text-align: center;">Deepfake</h4></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/summer.jpg" alt="">
                        <div class="single_appartment_text">
                           <h3>GAN</h3>
                           <p><i class="fas fa-apple-alt"></i> 생성적 적대 신경망을 활용하여 얼굴 변형 모델을 생성하고 얼굴을 합성하는 기술입니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="./gan.php" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>2 Videos</p>
                        <a href="./gan.php"><h4 style="text-align: center;">GAN</h4></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::apartment_part end::-->

      <!--::cta_part start::-->
      <div class="cta_part">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6">
                  <div class="cta_iner">
                     <h1>Contact</h1>
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::cta_part end::-->

      <!--::review_part end::-->
      <div class="review_part" id="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-lg-7">
                  <div class="section_tittle">
                     <h1>About us</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="review_part_text owl-carousel">
                     <div class="singler_eview_part">
                        <div class="client_info">
                           <img src="<?php ROOT?>/static/img/hyunkwan.png" alt="">
                           <h4>Hyunkwan Ko</h4>
                           <p>Department of IT Convergence and Application Engineering</p>
                        </div>
                        <p>
                           <i>
                              As a senior in the IT department of National Pukyong National University,
                              I am currently working on a face-to-face transformation project using deep learning.
                              I am very interested in web development and artificial intelligence.
                           </i>
                        </p>
                     </div>
                     <div class="singler_eview_part">
                        <div class="client_info">
                           <img src="<?php ROOT?>/static/img/hobeom.png" alt="">
                           <h4>Hobeom Joen</h4>
                           <p>Department of IT Convergence and Application Engineering</p>
                        </div>
                        <p>
                           <i>
                              As a senior in the IT department of National Pukyong National University,
                              I am currently working on a face-to-face transformation project using deep learning.
                              I am very interested in security and artificial intelligence.
                           </i>
                        </p>
                     </div>
                     <div class="singler_eview_part">
                        <div class="client_info">
                           <img src="<?php ROOT?>/static/img/seongyeong.png" alt="">
                           <h4>Seongyeong Lee</h4>
                           <p>Department of IT Convergence and Application Engineering</p>
                        </div>
                        <p>
                           <i>
                              As a senior in the IT department of National Pukyong National University,
                              I'm in video processing lab now. I mainly use Python and C programming language,
                              and speak English, Chinese, Korean.  
                           </i>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::review_part end::-->

      <!--::footer_part start::-->
      <?php include ROOT."/footer.php"?>
      <!--::footer_part end::-->

   </body>
</html>
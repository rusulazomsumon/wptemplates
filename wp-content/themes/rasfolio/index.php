<?php
        get_header();
    ?>


    <!--  Intro Area (Slide)  -->
    <section class="container-flued about-bg overflow-hidden">
      <div class="container about-info">
        <div class="row">
          <!-- About info content -->
          <div class="col-md-8 mt-5 about-info-con">
            <!-- heading text -->
            
            <h1 class="display-1 name ">
              <!-- <ruby>রউসুল আজম সুমন<rt>২.০</rt></ruby> -->
              রউসুল আজম সুমন
            </h1>
            <!-- subheading text -->
            <!-- <h3 class="des text-end">একজন  ফুলস্ট্যাক ডেভেলপার!</h3> -->
            <h3 class="des pb-3">আমি একজন ফুলস্ট্যাক ডেভেলপার!</h3>

            <p class="details ">
              ৩ বছর ধরে WordPress Customization নিয়ে কাজ করার পর, WordPress Theme and Plugin Development শুরু করেছি। র- পিএইচপি দিয়ে কিছু প্রজেক্ট করেছি, যেগুলিকে এখন লারাভেল এ কনভার্ট করছি। <br>
              PHP ফিল্ডে কাজ করতে চাই, লিটকোড এ  PHP ও JavaScript দিয়ে ২৩ সালের মধ্য ৫০০+ প্রব্লেম সল্ভ করার ইচ্ছে আছে। <br> mySQL, DevOps, Machine Learning, Compatative Programing, Networking, MIS, ও OOP এই বিসয়গুলিতে ভাল ধারনা আছে। 
              <br> ২০২৫ সালের মধ্যে নিজেকে ভালো মানের একজন রিমোট PHP ডেভেলপার হিসাবে প্রতিষ্ঠিত করতে চাই (ইনশাল্লাহ!) <br> 
            </p>
            <p><b><i><a style="color: green" href="#">WordPress ও PHP ফিল্ডে রিমোট জব বা চুক্তি ভিত্তিক কাজ খুজতেছি!</a></i></b></p>
            <div class="extr-info">
              <!-- bangla date -->
              <!-- <p class="text-end">আজ <span id="date-today"></span></p> -->
            </div>
            <div class="btn-area text-center mb-3">
              <div class="row">
                <div class="col-6">
                  <button class="btn">Resume</button>
                </div>
                <div class="col-6">
                  <button class="btn">Hire Me</button>
                </div>
              </div>
            </div>
            <!-- button end -->
          </div>
          <!-- about info right -->
          <div class="proPic col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assect/img/rasumonprothomalopng.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- intro area end -->

      <!-- #####################Notification Banner################### -->
        <div class="notification-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/assect/img/otw.png" height="50%" width="auto" alt="Notification banner">
          <div class="notification-banner-buttons">
            <a href="#" class="button close">Open CV</a>
            <a href="#" class="button close">Close</a>
          </div>
        </div>

      <script>
        document.addEventListener( 'DOMContentLoaded', function() {
          // get the close button
          var closeButton = document.querySelector( '.notification-banner .close' );
          
          // add a click event listener to the close button
          closeButton.addEventListener( 'click', function( event ) {
            // prevent the default action of the button
            event.preventDefault();
            
            // get the notification banner
            var banner = document.querySelector( '.notification-banner' );
            
            // hide the banner
            banner.style.display = 'none';
          });
        });
      </script>

    <!-- #################################Blog Area################################### -->
    <section class="container-flued blog-area">
      <div class="container blog-container">
        <div class="row">
            <!-- @@@@@@@@@@@@@@@@@@@@@@Blog Contents@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

          <div class="col-lg-12 blog-area">
              <div class="section-tittle pt-5 text-center">
                  <h1 class="heading">বিছিন্ন ভাবনাগুলি</h1>
              </div>
          </div>
          <!-- content sourcing -->
          <?php 
                $args = array(
                    'post_type'     =>  'post',
                    'order'         =>  'DSC',
                    'posts_per_page' =>  8
                 );
                $query = new WP_Query($args);
                while($query -> have_posts()){
                    $query -> the_post();
            ?>
          <!-- *********@@@@@ blog single item @@@@@*********-->
          <div class="col-lg-3 col-md-4 col-sm-6  col-xm-6 pt-5 blog-item">
            <!-- feture image -->
            <div class="blog-fImg p-2">
              <a href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="blog feture image" width="100%" height="100px">
              </a>
            </div>
            <!-- blog content -->
            <div class="blog-content">
              <div class="content-head">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div>  
              <!-- Horizental Line -->
              <hr>
              <!-- post excerpt  -->
              <div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_excerpt(); ?>
                </a>
              </div>
            </div>
          </div>
          <!-- end of loop -->
          <?php
              }
          ?>
          

          <!-- single items end -->
          <!-- #################Page Pagination################## -->
          <div class="pagination">
            <a href="#"><<</a>
            <div class="pages">
              <a class="page">১</a>
              <a class="page">২</a>
              <a class="page">...</a>
              <a class="page">৬</a>
              <a class="page">৭</a>
            </div>
            <a href="#">>></a>
            <!-- pagignation end -->
          </div>

        </div>
      </div>

    </section>
    <!-- blog area end -->

    <!-- ###########Service Area############# -->
    <section class="container-flued service-item pb-5">
      <div class="container Service-container mt-5 mb-5">
        <div class="row">
          <!-- *******Service area intro******** -->
          <div class="col-lg-12">
              <div class="section-tittle pt-5 text-center">
                  <h1>সেবাগুলি</h1>
                  <p>আপনার বিজনেস কে আধুনিকায়নে আমার সেবাসমুহ! </p>
              </div>
          </div>
           <!-- content sourcing -->
           <?php 
                $args = array(
                    'post_type'     =>  'service',
                    'order'         =>  'DSC',
                    'posts_per_page' =>  6
                 );
                $query = new WP_Query($args);
                while($query -> have_posts()){
                    $query -> the_post();
            ?>
          <!-- ********* Service single item -->
          <div class="col-xl-4 col-lg-4 col-md-6 pt-5 service-card ">
            <div class="service-content">
              <!-- Service Icon -->
            <div class="service-icon p-2">
              <img src="<?php the_post_thumbnail_url(); ?>" width="70px" height="70px" alt="icon">            
            </div>
            <!-- Service content -->
            <div class="service-text text-center">
              <h2><?php the_title(); ?></h2>              
              <?php the_content() ?>  
               <!-- dynamic button content content -->
               <?php 
                        $button_text = get_field('button_text', 'option');
                        $button_link = get_field('button_url', 'option');
                    ?>
              <a href="<?php echo $button_link ?>">
                <button class="btn"><?php echo $button_text; ?></button>
              </a>
            </div>
            </div>
          </div>
          <!-- end of loop -->
          <?php
              }
          ?>

        </div>
      </div>

    </section>

    <!-- ###########Projects############# -->
    <section class="container-flued project-area pb-5 ">
      <div class="container project-container">
        <div class="row">
          <!-- *******Projects area intro******** -->
          <div class="col-lg-12 project-ttl">
              <div class="section-tittle pt-5 text-center">
                  <h1 class="heading">প্রিয় প্রজেক্টগুলি</h1>
              </div>
          </div>

          <!-- ************Accordiation************ -->
          <!-- buttons -->
          <div class="tab">
            <button class="tablinks" onclick="openProject(event, 'All')" id="defaultOpen">All</button>
            <button class="tablinks" onclick="openProject(event, 'WordPress')">WordPress</button>
            <button class="tablinks" onclick="openProject(event, 'Laravel')">Laravel</button>
            <button class="tablinks" onclick="openProject(event, 'PHP')">Valina PHP</button>
          </div>

          <!-- Related Single content ((((((((All Projects))))))))))-->
          <div id="All" class="tabcontent">
            <div class="container">
              <div class="row">
                <!-- content sourcing -->
                <?php 
                      $args = array(
                          'post_type'     =>  'project',
                          'order'         =>  'ASC',
                          'posts_per_page' =>  6
                      );
                      $query = new WP_Query($args);
                      while($query -> have_posts()){
                          $query -> the_post();
                  ?>
                <!--@@@@@@@ item1 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php the_post_thumbnail_url(); ?>" width="100%" height="100px" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3><?php the_title() ?></h3>
                      <!-- contents -->
                      <?php the_content(); ?>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/link.svg" alt="">
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/github.svg" alt="" width="16" height="16">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end of loop -->
                  <?php
                      }
                  ?>
              </div>
            </div>
          </div>

  

          <!-- Related Single content: Wordpress -->
          <div id="WordPress" class="tabcontent">
            <div class="container">
              <div class="row">
                <!-- content sourcing -->
                <?php 
                      $args = array(
                          'post_type'     =>  'project',
                          'order'         =>  'ASC',
                          'posts_per_page' =>  6
                      );
                      $query = new WP_Query($args);
                      while($query -> have_posts()){
                          $query -> the_post();
                  ?>
                  <!--@@@@@@@ item1 @@@@@@@-->
                  <div class="col-md-3 pt-3 project-card">
                    <img src="<?php the_post_thumbnail_url(); ?>" width="100%" height="100px" alt="">
                    <div class="item-details">
                      <div class="project-info">
                        <h3><?php the_title() ?></h3>
                        <!-- contents -->
                        <?php the_content(); ?>
                      </div>
                      <!-- icon area -->
                      <div class="icon p-2 text-end">
                        <!-- link icon -->
                        <a href="#" class="p-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/link.svg" alt="">
                        </a>
                        <!-- git icon -->
                        <a href="#" class="p-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/github.svg" alt="" width="16" height="16">
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- end of loop -->
                    <?php
                        }
                    ?>
                
              </div>
            </div>
          </div>

           <!-- Related Single content:   -->
          <div id="Laravel" class="tabcontent">
            <div class="container">
              <div class="row">
                <!-- content sourcing -->
                <?php 
                      $args = array(
                          'post_type'     =>  'project',
                          'order'         =>  'ASC',
                          'posts_per_page' =>  6
                      );
                      $query = new WP_Query($args);
                      while($query -> have_posts()){
                          $query -> the_post();
                  ?>
                  <!--@@@@@@@ item1 @@@@@@@-->
                  <div class="col-md-3 pt-3 project-card">
                    <img src="<?php the_post_thumbnail_url(); ?>" width="100%" height="100px" alt="">
                    <div class="item-details">
                      <div class="project-info">
                        <h3><?php the_title() ?></h3>
                        <!-- contents -->
                        <?php the_content(); ?>
                      </div>
                      <!-- icon area -->
                      <div class="icon p-2 text-end">
                        <!-- link icon -->
                        <a href="#" class="p-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/link.svg" alt="">
                        </a>
                        <!-- git icon -->
                        <a href="#" class="p-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/github.svg" alt="" width="16" height="16">
                        </a>
                      </div>
                    </div>
                  </div>
                <!-- end of loop -->
                  <?php
                      }
                  ?>
                <!-- single project end -->

              </div>
            </div>
          </div>
           <!-- Related Single content: PHP -->         
          <div id="PHP" class="tabcontent">
            <h3>No Project Found</h3>
          </div>
          <!-- *****************Accordiation End****************** -->


          

        </div>
      </div>

    </section>
    <!-- Projects area end -->


    <!-- ###########Contact Area############# -->
    <section class="container-flued footer-area pb-5">
      <div class="container form-container mt-5 mb-5">
        <div class="row">    
          <!-- **** Contact Form***** -->
          <div class="col-xl-6 col-lg-6 col-md-12 pt-5 ">
            <form action="none">
              <div class="form-group">
                <input type="email" class="form-control" id="mail" aria-describedby="emailHelp"
                  placeholder="Your Mail">
              </div>
              <div class="form-group">
                <textarea class="form-control mt-1" id="msg" rows="2" placeholder="Your Massage"></textarea>
              </div>
              <button type="submit" class="btn mt-2 btn-lg btn-block">Send</button>
            </form>
          </div>

          <!-- ********* Contact Info -->
          <div class="col-xl-6 col-lg-6 col-md-12 pt-4 ">
            <!-- Contact Text  -->
            <div class="contac-info">
              <!-- loaction info -->
              <div class="contact-icon text-center p-2 ">
                <!--location icon  -->
                 <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-envolop-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <!-- mail tex -->
                <div class="icon-text">
                  <a href="#">Sector 10, Uttara Model Town, Dhaka-1230, Bangladesh</a>        
                </div>
              </div>

              <!-- mail info -->
              <div class="contact-icon text-center p-2">
                <!--mail icon  -->
                <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>
                <!-- mail tex -->
                <div class="icon-text">
                  <a href="mailto:rusulazomsumon@gmail.com">rusulazomsumon@gmail.com</a>        
                </div>
              </div>

              <!-- Contact Text Phone -->
              <div class="contact-icon text-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <div class="icon-text">
                  <a href="tel:+880182834071">+880 182 834 071</a>        
                </div>
              </div>

            </div>
          </div>
          <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Social Icon @@@@@@@@@@@@@@@@@@@@@@@-->
          <div class="col-md-12 pt-4 text-center social-icon">
            <p>Find Me</p>
            <!-- Leetcode -->
            <a href="https://leetcode.com/rusulazomsumon/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/leetcode.png" color="white" width="24" height="24"   alt="leetcode icon">
            </a>
            <!-- Linkedin -->
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
              </svg>
            </a>
            <!-- facebook -->
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
            <!-- github -->
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg>
            </a>
            <!-- whatapp -->
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>
            </a>
            <!-- Quora -->
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" color="white" width="24" height="24" fill="currentColor" class="bi bi-quora" viewBox="0 0 16 16">
                <path d="M8.73 12.476c-.554-1.091-1.204-2.193-2.473-2.193-.242 0-.484.04-.707.142l-.43-.863c.525-.45 1.373-.808 2.464-.808 1.697 0 2.568.818 3.26 1.86.41-.89.605-2.093.605-3.584 0-3.724-1.165-5.636-3.885-5.636-2.68 0-3.839 1.912-3.839 5.636 0 3.704 1.159 5.596 3.84 5.596.425 0 .811-.046 1.166-.15Zm.665 1.3a7.127 7.127 0 0 1-1.83.244C3.994 14.02.5 11.172.5 7.03.5 2.849 3.995 0 7.564 0c3.63 0 7.09 2.828 7.09 7.03 0 2.337-1.09 4.236-2.675 5.464.512.767 1.04 1.277 1.773 1.277.802 0 1.125-.62 1.179-1.105h1.043c.061.647-.262 3.334-3.178 3.334-1.767 0-2.7-1.024-3.4-2.224Z"/>
              </svg>
            </a>
            <!-- Icon area end -->
          </div>
        </div>
      </div>

    </section>
    <!-- Projects area end -->

    <?php
        get_footer();
    ?>
   
   
  <!-- Adding header -->
  <?php
    get_header();
  ?>
    
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@Blog Content Style@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

    <div class="container-flued">
      <div class="container"> 
        <div class="row mt-5">

          <!-- #############left sidebar Main Content##########-->
          <div class="col-md-8 col-12 single-post ">
            <div class="post-thumnil">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" height="50%" alt="">
            </div>

            <!--@@@@@@ Content Title @@@@@@-->
            <h3 class="p-3"><?php echo get_the_title(); ?></h3>

            <!-- @@@@@content head icon area @@@@@-->
            <div class="blog-content-info d-flex flex-row">
              <!-- Post author icon -->
              <div class="col-md-4 col-sm-12 d-flex">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/rusulazomsumonProthomalo.png" width="24px" height="24px" class="rounded-circle" alt="Rusul Azom Sumon">
                </a>
                <!-- author name linked -->
                <?php
                  $author_id = $post->post_author; 
                  $author_url = get_the_author_meta('user_url',$author_id);
                  $author_name =  get_the_author_meta('display_name', $author_id); 
                ?>
                <a href="<?php echo $author_url; ?>" class="pt-1">
                  <p><?php echo $author_name; ?></p>
                </a>
              </div>
              <!-- date @ category -->
              <div class="col-md-8 col-sm-12 d-flex">
                <div class="pub-date">
                  <!-- date icon -->
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/calender.svg" alt="">
                  </a>
                  <!-- date -->
                  <?php $post_date = get_the_date( 'D M j' ); ?>
                  <a href="#">
                    <p class="pt-1"><?php echo $post_date; ?></p>
                  </a>
                </div>
                <!-- Category -->
                <div class="category">
                  <!-- category icon -->
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/archive.svg" alt="">
                  </a>
                  <!-- category name -->
                  <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }
                  ?>
                </div>
              </div>
              
            </div>

            <!-- @@@@ Content body area -->
            <div class="blog-content-body">
            <hr class="vertical">
              <!-- Excerpt Area Feture quote -->
              <div class="excerpt">	
                <?php the_excerpt(); ?> 
              </div>
              <hr class="vertical">
              <!-- Blog main content -->
              <div class="blog-main-content pt-3">
                <?php the_content(); ?>
              </div>
            </div>
            <!-- blog content body content end -->

            <!-- @content bootoms area: @ -->
            <div class="con-ft-area "> 
              <!-- @@@@@@@@ Tags, icons area, social share, love @@@@@@@@-->
              <div class="tags d-flex">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/tags.svg" alt="">
                  </a>
                  <!-- post tags -->
                  <?php 
                    $post_tags = get_the_tags();
                    if ( ! empty( $post_tags ) ) {
                      echo '<ul>';
                      foreach( $post_tags as $post_tag ) {
                        echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                      }
                      echo '</ul>';
                    }
                  ?>
              </div>
              <div class="icon-area d-flex">
                <!-- $$$$psot views$$$$ -->
                <div class="view d-flex p-3">
                  <!-- view icon -->
                  <a class="icon"  href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                  </a>
                  <!-- icon text -->
                  <a href="#">
                    <p><span class="view-count">৫৫</span> বার পাঠিত</p>
                  </a>
                </div>

                <!-- $$$$psot LOVE$$$$ -->
                <div class="view d-flex p-3">
                  <!-- icon text -->
                  <a class="notification icon" href="#">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                      </svg>
                    </span>
                    <span class="badge view-count">১০</span>
                  </a>
                </div>

                <!-- $$$$Social Media Share$$$$ -->
                <div class="social-share d-flex">
                  <!-- social share icons -->
                  <div class="socil-icons">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/linkedin.svg" alt="">
                    </a>
                    <!-- facebook -->
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/facebook.svg" alt="">
                    </a>
                    <!-- github -->
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/github.svg" alt="">
                    </a>
                    <!-- whatapp -->
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/whatsapp.svg" alt="">
                    </a>
                    <!-- Quora -->
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/quora.svg" alt="">
                    </a>
                  </div>
                  <!-- Social icon text -->
                  <!-- <p>শেয়ার করে ছড়িয়ে দিন!</p> -->
                </div>
                <hr>
              </div>
              <!-- @@@@@@@@icon area end@@@@@@@@-->

              <!-- @@@@@@@@Author area Strat@@@@@@@@-->
              <div class="blog-author-info-area mt-5">
                <div class="row">
                  <!-- profile pic area -->
                  <div class="pro-pic col-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assect/img/rusulazomsumondarkldkf.png" width="100%" height="100px" alt="">
                  </div>
                  <!-- Author info area -->
                  <div class="blog-author-info col-9">
                    <a href="#"><h4>মোঃ রউসুল আজম</h4></a>
                    <p>ভালবাশি লিখতে! বাংলা ভাষায় প্রোগ্রামিং ও প্রযুক্তি  বিদ্যা ছড়িয়ে দিতে এই খুদ্র প্রচেষ্টা। 
                      <a href="#"></a>
                    <!-- social share icons -->

                    <div class="socil-icons">
                      <!-- Leetcode -->
                      <a href="https://leetcode.com/rusulazomsumon/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/leetcode.png" width="16" height="16"  alt="leetcode icon">
                      </a>
                      <!-- linkedin -->
                      <a href="https://www.linkedin.com/in/rusulazomsumon/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/linkedin.svg" alt="">
                      </a>
                      <!-- facebook -->
                      <a href="https://www.facebook.com/rousulazom.sumon/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/facebook.svg" alt="">
                      </a>
                      <!-- github -->
                      <a href="https://github.com/rusulazomsumon/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/github.svg" alt="">
                      </a>
        
                    </div>
                  </div>
                </div>
              </div>
              <!-- @@@@@@@@Author area end@@@@@@@@-->


              <!-- @@@@@@@@Related post area start@@@@@@@@@@@ -->
              <div class="related-post">
                <div class="row d-flex mt-3">
                  <h5>এই জাতীয় আরও লেখাঃ-</h5>
                  <hr>
                  <!-- content sourcing -->
                  <?php 
                      $args = array(
                          'post_type'     =>  'post',
                          'order'         =>  'ASC',
                          'posts_per_page' =>  3
                      );
                      $query = new WP_Query($args);
                      while($query -> have_posts()){
                          $query -> the_post();
                  ?>
                  <!-- Related post content -->
                  <div class="col-md-4  col-sm-12 post">
                    <a href="<?php the_permalink(); ?>">
                        <!-- post thumbnails -->
                        <img src="<?php the_post_thumbnail_url(); ?>" width="100%" height="100px" alt="">
                                              
                        <!-- post tile -->
                        <h5><?php the_title(); ?></h5>
                    </a>
                  </div>
                  <!-- releted post markup end -->
                  <!-- end of loop -->
                  <?php
                      }
                  ?>
                </div>
              </div>
              <!-- @@@@@@@@Related post area End@@@@@@@@@ -->

            </div>
            <!-- @@@Content bottom area end@@ -->
          </div>
          <!-- xxxxxxxxx main content Area end Left area end xxxxxxxxxx-->
          

          <!-- ***************Right Sideber**************** -->
          <div class="col-md-4 col-12 p-5 r-sidebar con-box">
            <!-- Author profile -->
            <h3>আমার সম্পর্কে!</h3>
            <div class="profile text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assect/img/rusulazomsumonProthomalo.png" class="img-thumbnail rounded-circle" alt="RusulAzomSumon">
              <h5 style="color: black;">Md. Rusul Azom Sumon</h5>
              <p>আমি একজন ফুলস্ট্যাক ডেভেলপার!</p>
              <p> ৩ বছর ধরে WordPress Customization নিয়ে কাজ করার পর, WordPress Theme and Plugin Development শুরু করেছি। র- পিএইচপি দিয়ে কিছু প্রজেক্ট করেছি, যেগুলিকে এখন লারাভেল এ কনভার্ট করছি।
PHP ফিল্ডে কাজ করতে চাই, লিটকোড এ PHP ও JavaScript দিয়ে ২৩ সালের মধ্য ৫০০+ প্রব্লেম সল্ভ করার ইচ্ছে আছে।
mySQL, DevOps, Machine Learning, Compatative Programing, Networking, MIS, ও OOP এই বিসয়গুলিতে ভাল ধারনা আছে।
২০২৫ সালের মধ্যে নিজেকে ভালো মানের একজন রিমোট PHP ডেভেলপার হিসাবে প্রতিষ্ঠিত করতে চাই (ইনশাল্লাহ!)

WordPress ও PHP ফিল্ডে রিমোট জব বা চুক্তি ভিত্তিক কাজ খুজতেছি! <span><a href="#">সম্পূর্ণ প্রফাইল</a></span></p>
            </div>

            <!-- Leatest Post -->
            <h3>নতুন লেখাগুলিঃ</h3>
            <div class="content">
              <ul>
                <?php 
                    $args = array(
                        'post_type'     =>  'post',
                        'order'         =>  'ASC',
                        'posts_per_page' =>  5
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                        $query -> the_post();
                ?>
                    <!-- repatative titles -->
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <!-- end of loop -->
                <?php
                      }
                  ?>      
              </ul>
            </div>
            <!-- All Category --> 
            <h3>বিষয় ভিত্তিক লেখাগুলিঃ</h3>
            <div class="category">
              <ul>
                <li><a href="#">যাবতীয়</a></li>
                <li><a href="#">ডেভেলপমেন্ট</a></li>
                  <ul>
                    <li>ওয়েবসাইট</li>
                    <li>এপ্লিকেশন</li>
                  </ul>
                <li><a href="#">ডাটা স্ট্রাকচার </a></li>
                <li><a href="#">এলগরিদম</a></li>
                <li><a href="#">সফটওয়্যার ইঞ্জিনিয়ারিং</a></li>
              </ul>
            </div>
            

            <!-- Tags -->
            <h3>হ-জ-ব-র-ল</h3>
            <div class="tags">
              <ul>
                <li><a href="#">প্রসেসর</a></li>
                <li><a href="#">কম্পাইলার</a></li>
                <li><a href="#">কোডিং</a></li>
                <li><a href="#">লিটকোড সল্যুশন</a></li>
                <li><a href="#">টুলস</a></li>
                <li><a href="#">এজাইল</a></li>
                <li><a href="#">প্রোজেক্ট</a></li>
                <li><a href="#">বই রিভিউ</a></li>
                <li><a href="#">ঘোরাঘুরি</a></li>
                <li><a href="#">ফিকশন</a></li>
              </ul>
            </div>
            <!-- Newsletter -->
            <div class="newsltr pt-5">
              <h3>মেইলে যুক্ত হন</h3>
              <form action="none" class="d-flex p-3">
                <div class="form-group">
                  <input type="email" class="form-control" id="mail" aria-describedby="emailHelp"
                    placeholder="Your Mail">
                </div>
                <button type="submit" class="btn btn-m btn-block">Subcribe</button>
              </form>
              <p>নিয়মিত নতুন পোস্ট মেইলে পেতে, যুক্ত হন!</p>
            </div>

            <!-- sdfldfs -->
            


          </div>
        </div>
      </div>
    </div>

    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@Blog Content Style End@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

<!-- ###########Footer############# -->
  <!-- Adding header -->
  <?php
    get_footer();
  ?>
    
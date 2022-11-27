<!doctype html>
<html class="no-js" lang="zxx">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- title will show dynamically -->
    <!-- <title>Consulting HTML-5 Template </title> -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

    <!-- for showing wp admint ber in the top -->
    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>
    <header>
      <!-- top header -->
    <section class="container-flued top-ber">
      <div class="container-xl">  
          <div class="row p-1">
            <!-- Social Icons -->
              <div id="sIcon"  class="col-10 social-icon ">
                <!-- Linkedin -->
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                  </svg>
                </a>
                <!-- facebook -->
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
                </a>
                <!-- github -->
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                  </svg>
                </a>
                <!-- whatapp -->
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                  </svg>
                </a>
                <!-- Quora -->
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-quora" viewBox="0 0 16 16">
                    <path d="M8.73 12.476c-.554-1.091-1.204-2.193-2.473-2.193-.242 0-.484.04-.707.142l-.43-.863c.525-.45 1.373-.808 2.464-.808 1.697 0 2.568.818 3.26 1.86.41-.89.605-2.093.605-3.584 0-3.724-1.165-5.636-3.885-5.636-2.68 0-3.839 1.912-3.839 5.636 0 3.704 1.159 5.596 3.84 5.596.425 0 .811-.046 1.166-.15Zm.665 1.3a7.127 7.127 0 0 1-1.83.244C3.994 14.02.5 11.172.5 7.03.5 2.849 3.995 0 7.564 0c3.63 0 7.09 2.828 7.09 7.03 0 2.337-1.09 4.236-2.675 5.464.512.767 1.04 1.277 1.773 1.277.802 0 1.125-.62 1.179-1.105h1.043c.061.647-.262 3.334-3.178 3.334-1.767 0-2.7-1.024-3.4-2.224Z"/>
                  </svg>
                </a>
                <!-- Icon area end -->
              </div>
              <!-- icon holder end -->
              <!-- @@@@@@@@@@@login user@@@@@@@@@@@@ -->
              <div class="col-2 ">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                </a>
                <!-- <i class="bi bi-toggle-on">বাংলা</i> -->
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" color="#C6C5B9" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                </a>
              </div>
          </div>
      </div>
    </section>
    <!-- navbar area -->
    <section class="container-flued">
      <nav class="navbar navbar-expand-md bg-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- @@@@@@@Logo@@@@@@@@@@ -->
          <div class="ras ">
            <a href="#">
              <h3 class="animate-text "> RAS</h3>
            </a>
          </div>
          <!-- blog menus -->
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">হোম</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ব্লগ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">আমার সম্পর্কে</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">বই রিভিউ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">যোগাযোগ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ডাউনলোড</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </section>
    <!-- header end -->
    </header>
    

    <!--  Intro Area (Slide)  -->
    <section class="container-flued about-bg overflow-hidden">
      <div class="container about-info">
        <div class="row">
          <!-- About info content -->
          <div class="col-md-8 mt-5 about-info-con">
            <!-- heading text -->
            <h1 class="display-1 name text-end">
              রউসুল আজম সুমন
            </h1>
            <!-- subheading text -->
            <h3 class="des text-end">একজন আগুন্তুক!</h3>
            <p class="details text-end">
              ভালবাসি এই বোকা বাক্সটি! প্রতিনিয়তই শিখছি। যা জানি , যেটুকু জানি লিখতে ভালো লাগে। 
              তাই এই খুদ্র প্রয়াস।
            </p>
            <div class="extr-info">
              <!-- bangla date -->
              <p class="text-end">আজ <span id="date-today"></span></p>
            </div>
            <!-- buttons -->
            <div class="btn-area text-end">
              <div class="row">
                <div class="col-6">
                  <button class="btn">Resume</button>
                </div>
                <div class="col-6">
                  <button class="btn">Hire Me</button>
                </div>
              </div>
            </div>
            
          </div>
          <!-- about info right -->
          <div class="proPic col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/rasumonprothomalopng.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- intro area end -->

    <!-- #################################Blog Area################################### -->
    <section class="container-flued blog-area">
      <div class="container blog-container">
        <div class="row">
          <!-- *******Blog area intro******** -->
          <div class="col-lg-12 blog-area">
              <div class="section-tittle pt-5 text-center">
                  <h1 class="heading">বিছিন্ন ভাবনাগুলি</h1>
              </div>
          </div>
          <!-- *********@@@@@ blog single item @@@@@*********-->
          <div class="col-lg-3 col-md-4 col-sm-6  col-xm-6 pt-5 blog-item">
            <!-- feture image -->
            <div class="blog-fImg p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" alt="blog feture image">
            </div>
            <!-- blog content -->
            <div class="blog-content">
              <div class="content-head">
                <h2><a href="#">বাংলাদেশ জিন্দাবাদ</a></h2>
                <div class="iocn-box mb-2 opacity-50">
                  <!-- date -->
                  <a href="#"><i class="bi bi-calendar p-1"></i> <span>22 November, 2022</span></a>
                  <!-- reding time -->
                  <a href="#"><i class="bi bi-clock-history p-1"></i> <span>3 Min Read</span></a>

                </div>
              </div>              
              <p>দেশে ডেঙ্গুতে আক্রান্ত ও মৃতের তালিকা বাড়ছে। সব বয়সী মানুষ এই রোগে আক্রান্ত হচ্ছে। ডেঙ্গু পরিস্থিতি নিয়ে কথা <span><a href="#"> ... সম্পূর্ণ লেখাটি>></a></span> </p>
            </div>
          </div>

          <!-- *********@@@@@ blog single item @@@@@*********-->
          <div class="col-lg-3 col-md-4 col-sm-6  col-xm-6 pt-5 blog-item">
            <!-- feture image -->
            <div class="blog-fImg p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" alt="blog feture image">
            </div>
            <!-- blog content -->
            <div class="blog-content">
              <div class="content-head">
                <h2><a href="#">বাংলাদেশ জিন্দাবাদ</a></h2>
                <div class="iocn-box mb-2 opacity-50">
                  <!-- date -->
                  <a href="#"><i class="bi bi-calendar p-1"></i> <span>22 November, 2022</span></a>
                  <!-- reding time -->
                  <a href="#"><i class="bi bi-clock-history p-1"></i> <span>3 Min Read</span></a>

                </div>
              </div>              
              <p>দেশে ডেঙ্গুতে আক্রান্ত ও মৃতের তালিকা বাড়ছে। সব বয়সী মানুষ এই রোগে আক্রান্ত হচ্ছে। ডেঙ্গু পরিস্থিতি নিয়ে কথা <span><a href="#"> ... সম্পূর্ণ লেখাটি>></a></span> </p>
            </div>
          </div>
          <!-- *********@@@@@ blog single item @@@@@*********-->
          <div class="col-lg-3 col-md-4 col-sm-6  col-xm-6 pt-5 blog-item">
            <!-- feture image -->
            <div class="blog-fImg p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" alt="blog feture image">
            </div>
            <!-- blog content -->
            <div class="blog-content">
              <div class="content-head">
                <h2><a href="#">বাংলাদেশ জিন্দাবাদ</a></h2>
                <div class="iocn-box mb-2 opacity-50">
                  <!-- date -->
                  <a href="#"><i class="bi bi-calendar p-1"></i> <span>22 November, 2022</span></a>
                  <!-- reding time -->
                  <a href="#"><i class="bi bi-clock-history p-1"></i> <span>3 Min Read</span></a>

                </div>
              </div>              
              <p>দেশে ডেঙ্গুতে আক্রান্ত ও মৃতের তালিকা বাড়ছে। সব বয়সী মানুষ এই রোগে আক্রান্ত হচ্ছে। ডেঙ্গু পরিস্থিতি নিয়ে কথা <span><a href="#"> ... সম্পূর্ণ লেখাটি>></a></span> </p>
            </div>
          </div>
          <!-- *********@@@@@ blog single item @@@@@*********-->
          <div class="col-lg-3 col-md-4 col-sm-6  col-xm-6 pt-5 blog-item">
            <!-- feture image -->
            <div class="blog-fImg p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" alt="blog feture image">
            </div>
            <!-- blog content -->
            <div class="blog-content">
              <div class="content-head">
                <h2><a href="#">বাংলাদেশ জিন্দাবাদ</a></h2>
                <div class="iocn-box mb-2 opacity-50">
                  <!-- date -->
                  <div>
                    <a href="#"><i class="bi bi-calendar p-1"></i> 
                    </a>
                    <a href="#">22 November, 2022</a>
                  </div>
                  <!-- reding time -->
                  <a href="#"><i class="bi bi-clock-history p-1"></i> <span>3 Min Read</span></a>

                </div>
              </div>              
              <p>দেশে ডেঙ্গুতে আক্রান্ত ও মৃতের তালিকা বাড়ছে। সব বয়সী মানুষ এই রোগে আক্রান্ত হচ্ছে। ডেঙ্গু পরিস্থিতি নিয়ে কথা <span><a href="#"> ... সম্পূর্ণ লেখাটি>></a></span> </p>
            </div>
          </div>

          <!-- single items end -->
          <!-- #################Page Pagination################## -->
          <div class="pagination">
            <a href="#"><<</a>
            <div class="pages">
              <a class="page">১</a>
              <a class="page">৩</a>
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
          <!-- ********* Service single item -->
          <div class="col-xl-4 col-lg-4 col-md-6 pt-5 service-card ">
            <div class="service-content">
              <!-- Service Icon -->
            <div class="service-icon p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/web.png" width="70px" alt="icon">            
            </div>
            <!-- Service content -->
            <div class="service-text text-center">
              <h2>বিজনেস ওয়েবসাট</h2>              
              <p>আপনার সংগঠন, এনজিও, কোম্পানি, স্কুল কলেজ, ও বিজনেস এর অনলাইন প্রফাইল। সহজে ব্যাবহারযোগ্য বাজেট ওয়েবসাইট পেতে যোগাযোগ করুন।  </p>
              <button class="btn">অর্ডার করুন</button>
            </div>
            </div>
          </div>

          <!-- ********* Service single item -->
          <div class="col-xl-4 col-lg-4 col-md-6 pt-5 service-card ">
            <div class="service-content">
              <!-- Service Icon -->
            <div class="service-icon p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/web.png" width="70px" alt="icon">            
            </div>
            <!-- Service content -->
            <div class="service-text text-center">
              <h2>বিজনেস ওয়েবসাট</h2>              
              <p>আপনার সংগঠন, এনজিও, কোম্পানি, স্কুল কলেজ, ও বিজনেস এর অনলাইন প্রফাইল। সহজে ব্যাবহারযোগ্য বাজেট ওয়েবসাইট পেতে যোগাযোগ করুন।  </p>
              <button class="btn">অর্ডার করুন</button>
            </div>
            </div>
          </div>

          <!-- ********* Service single item -->
          <div class="col-xl-4 col-lg-4 col-md-6 pt-5 service-card ">
            <div class="service-content">
              <!-- Service Icon -->
            <div class="service-icon p-2">
              <img src="<?php echo get_template_directory_uri(); ?>./assect/img/web.png" width="70px" alt="icon">            
            </div>
            <!-- Service content -->
            <div class="service-text text-center">
              <h2>বিজনেস ওয়েবসাট</h2>              
              <p>আপনার সংগঠন, এনজিও, কোম্পানি, স্কুল কলেজ, ও বিজনেস এর অনলাইন প্রফাইল। সহজে ব্যাবহারযোগ্য বাজেট ওয়েবসাইট পেতে যোগাযোগ করুন।  </p>
              <button class="btn">অর্ডার করুন</button>
            </div>
            </div>
          </div>

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
                <!--@@@@@@@ item1 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                
                <!--@@@@@@@ item2 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <!--@@@@@@@ item3 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <!--@@@@@@@ item4 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <!--@@@@@@@ item5 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                
                <!--@@@@@@@ item6 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <!--@@@@@@@ item7 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                <!--@@@@@@@ item8 @@@@@@@-->
                <div class="col-md-3 pt-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Related Single content: Wordpress -->
          <div id="WordPress" class="tabcontent">
            <div class="container">
              <div class="row">
                <!--@@@@@@@ item1 @@@@@@@-->
                <div class="col-md-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                
                <!--@@@@@@@ item2 @@@@@@@-->
                <div class="col-md-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

                

              </div>
            </div>
          </div>

           <!-- Related Single content: Laravel -->
          <div id="Laravel" class="tabcontent">
            <div class="container">
              <div class="row">
                <!--@@@@@@@ item1 @@@@@@@-->
                <div class="col-md-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!--@@@@@@@ item1 @@@@@@@-->
                <div class="col-md-3 project-card">
                  <img src="<?php echo get_template_directory_uri(); ?>./assect/img/WebCoverRusulAzom.jpg" width="100%" alt="">
                  <div class="item-details">
                    <div class="project-info">
                      <h3>পার্সোনাল ব্লগ</h3>
                      <p>আমার বেসিক লার্নিং এর প্রায় সব কিছুর সমষ্টি এটি - প্রথমে photoshop দিয়ে 
                        ডিজাইন করে সেটাকে fingma তে রুপারন্তর করেছি। তারপর, HTML, CSS, Javascript
                        ও Bootstrap দিয়ে Template এ রুপান্তর করে, WordPress দিয়ে Dynamic  করেছি। 
                        প্রজেক্টটিতে WordPress এর custome post type, Hoock, ACM, Contact form 7, 
                        Rest API ব্যাবহার করা হয়েছে।
                      </p>
                    </div>
                    <!-- icon area -->
                    <div class="icon p-2 text-end">
                      <!-- link icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                      </a>
                      <!-- git icon -->
                      <a href="#" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>

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
                  <a href="mailto:rusulazomsumon@gmail.com">rusulazomsumon@gmail.com</a>        
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


  <!-- ###########Footer############# -->
  <!-- Footer Section -->
  <footer>
    <div class="container mt-3"> 
        <div class="footer-item-container">
            <div class="copyright p-1">
                <p>Copyright &copy;</p> &nbsp;
                <p class="year"></p> &nbsp;
                <a href="https://www.rusulazom.xyz" target="_blank">Rusul Azom Sumon</a> &nbsp; 
                <p>All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Back To Top -->
<a class="back-to-top" href="#">
  <i class="bi bi-arrow-up-circle-fill"></i>
</a>
  
  <!-- for showing wp admint ber in the top -->
  <?php wp_footer(); ?>
  </body>
</html>

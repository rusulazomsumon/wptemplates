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
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assect/img/favicon.ico">

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
                <!-- Leetcode -->
                <a href="https://leetcode.com/rusulazomsumon/">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/leetcode.png" width="16" height="16"  alt="leetcode icon">
                </a>
                
                <!-- Linkedin -->
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/linkedin.svg" width="16" height="16" alt="">
                </a>
                
                <!-- facebook -->
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/facebook.svg" width="16" height="16" alt="">
                </a>
                <!-- github -->
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/github.svg" width="16" height="16" alt="">
                </a>
                <!-- whatapp -->
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/whatsapp.svg" width="16" height="16" alt="">                 
                </a>
                <!-- Quora -->
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/icon/quora.svg" width="16" height="16" alt="">                 
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
            <?php $url = home_url( '/' );?>
            <a href="<?php echo $url; ?>">  
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
            <!-- wp search form -->
            <?php get_search_form();?>
          </div>
        </div>
      </nav>
    </section>
    <!-- header end -->
    </header>

    <div class="notification-banner">
  <img src="<?php echo get_template_directory_uri(); ?>/assect/img/ra sumon old pfofd.jpg" alt="Notification banner">
  <div class="notification-banner-buttons">
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

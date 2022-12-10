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
                  <!-- icon -->
                </a>
                
                <!-- facebook -->
                <a href="#">
                  
                </a>
                <!-- github -->
                <a href="#">
                  
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
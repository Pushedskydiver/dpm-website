<!--******************** HEADER : Start ********************-->
<header class="header">
  <!-- BEGIN : NAVIGATION -->
  <div class="transparent-dark " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark" id="nav">
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : LEFT CONTENT -->
        <div class="logo-container pull-left col">
          <!-- BEGIN : HEADER INNER-->
          <div class="header-inner">
            <!-- BEGIN : LOGO -->
            <div class="logo">
              <a href="/dpm-website/index.php"><img src="/dpm-website/images/logo.png" width="50" alt=""> Manchester</a>
            </div>
            <!-- END : LOGO -->
          </div>
          <!-- END : HEADER INNER-->
        </div>
        <!-- BEGIN : HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right col">
          <div class="header-inner">
            <div class="menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>
          </div>
        </div>
        <!-- END : HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- BEGIN : RIGHT CONTENT -->
        <div class="menu-content mobile-dark pull-right clearfix" data-pages-direction="slideRight" id="header">
          <!-- BEGIN : HEADER CLOSE TOGGLE FOR MOBILE -->
          <div class="pull-right">
            <a href="#" class="pull-right close-nav" data-pages="header-toggle" data-pages-element="#header">
              <i class="pg-close_line"></i>
            </a>
          </div>
          <!-- END : HEADER CLOSE TOGGLE FOR MOBILE -->
          <!-- BEGIN : MENU ITEMS -->
          <div class="header-inner">
            <!-- BEGIN : MAIN MENU -->
            <ul class="menu">
              <li <?php if($current == 'home') {echo 'class="active home"';} ?> ><a href="/dpm-website/index.php">Home</a></li>

              <li <?php if($current == 'food') {echo 'class="classic active food"';} ?> class="classic"><a href="#">Food <i class="pg-arrow_minimize m-l-5"></i></a>
                <!-- BEGIN : SUB MENU -->
                <nav class="classic">
                  <span class="arrow"></span>
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </nav>
                <!-- END : SUB MENU -->
              </li>

              <li <?php if($current == 'transport') {echo 'class="classic active transport"';} ?> class="classic"><a href="#">Transport <i class="pg-arrow_minimize m-l-5"></i></a>
                <!-- BEGIN : SUB MENU -->
                <nav class="classic">
                  <span class="arrow"></span>
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </nav>
                <!-- END : SUB MENU -->
              </li>

              <li <?php if($current == 'shopping') {echo 'class="classic active shopping"';} ?> class="classic"><a href="#">Shopping <i class="pg-arrow_minimize m-l-5"></i></a>
                <!-- BEGIN : SUB MENU -->
                <nav class="classic">
                  <span class="arrow"></span>
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </nav>
                <!-- END : SUB MENU -->
              </li>

              <li <?php if($current == 'museum') {echo 'class="classic active museums"';} ?> class="classic"><a href="#">Museums &amp; Galleries <i class="pg-arrow_minimize m-l-5"></i></a>
                <!-- BEGIN : SUB MENU -->
                <nav class="classic">
                  <span class="arrow"></span>
                  <ul>
                    <li><a href="/dpm-website/museums/manchester-art-gallery.php">Manchester Art Gallery</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </nav>
                <!-- END : SUB MENU -->
              </li>

              <li <?php if($current == 'nightlife') {echo 'class="classic active nightlife"';} ?> class="classic"><a href="#">Nightlife <i class="pg-arrow_minimize m-l-5"></i></a>
                <!-- BEGIN : SUB MENU -->
                <nav class="classic">
                  <span class="arrow"></span>
                  <ul>
                    <li><a href="/dpm-website/nightlife/gorilla-bar.php">Gorilla Bar</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </nav>
                <!-- END : SUB MENU -->
              </li>
            </ul>
            <!-- END : MAIN MENU -->
            <!-- BEGIN : COPYRIGHT FOR MOBILE -->
            <div class="mobile-copyright">
              <p class="copyright-info">MMU Digital Project Management, Group Work.</p>
              <p class="copyright">&copy; Manchester Metropolitan University <script type="text/javascript">document.write(new Date().getFullYear());</script>.</p>
            </div>
            <!-- END : COPYRIGHT FOR MOBILE -->
            <!-- BEGIN : MOBILE SOCIAL -->
            <div class="mobile-social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
            <!-- END : MOBILE SOCIAL -->
          </div>
          <!-- END : MENU ITEMS -->
        </div>
        <!-- END : RIGHT CONTENT -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </div>
  <!-- END : NAVIGATION -->
</header>
<!--******************** HEADER : End ********************-->

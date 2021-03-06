<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'home';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- PAGE TITLE -->
  <?php $page_title = 'International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>


  <!--******************** MAIN CONTENT : Start ********************-->
  <section class="home-slider" data-pages="parallax">
    <div class="inner full-height">
      <!-- BEGIN : SLIDER -->
      <div class="swiper-container" id="hero">
        <div class="swiper-wrapper">
          <!-- BEGIN : SLIDE -->
          <div class="swiper-slide fit">
            <!-- BEGIN : IMAGE PARRALAX -->
            <div class="slider-wrapper">
              <div class="background-wrapper" data-swiper-parallax="30%">
                <div class="background" data-pages-bg-image="dist/images/slider/manchester-city-centre.jpg"></div>
              </div>
            </div>
            <!-- END : IMAGE PARRALAX -->
            <!-- BEGIN : CONTENT -->
            <div class="content-layer">
              <div class="inner full-height">
                <div class="container-xs-height full-height">
                  <div class="slider-content">
                    <div class="container">
                      <div class="col col100">
                        <h1 class="sm-text-center" data-swiper-parallax="-15%">Love Manchester - The city of industry</h1>
                        <h5 class="sm-text-center">An International Student Guide on Manchester.</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END : CONTENT -->
          </div>
          <!-- END : SLIDE -->
          <!-- BEGIN : SLIDE -->
          <div class="swiper-slide fit">
            <!-- BEGIN : IMAGE PARRALAX -->
            <div class="slider-wrapper">
              <div class="background-wrapper" data-swiper-parallax="30%">
                <!-- YOUR BACKGROUND IMAGE HERE, YOU CAN ALSO USE IMG with the same classes -->
                <div class="background" data-pages-bg-image="dist/images/slider/metrolink.jpg"></div>
              </div>
            </div>
            <!-- END : IMAGE PARRALAX -->
            <!-- BEGIN : CONTENT -->
            <div class="content-layer">
              <div class="inner full-height">
                <div class="container-xs-height full-height">
                  <div class="slider-content">
                    <div class="container">
                      <div class="col col100 no-padding">
                        <h1 class="sm-text-center" data-swiper-parallax="-15%">Transport in Manchester</h1>
                        <h5 class="sm-text-center">Find out what types of transport to use around Manchester.</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END : CONTENT -->
          </div>
          <!-- END : SLIDE -->
          <!-- BEGIN : SLIDE -->
          <div class="swiper-slide fit">
            <!-- BEGIN : IMAGE PARRALAX -->
            <div class="slider-wrapper">
              <div class="background-wrapper" data-swiper-parallax="30%">
                <div class="background" data-pages-bg-image="dist/images/slider/manchester-art-gallery.jpg"></div>
              </div>
            </div>
            <!-- END : IMAGE PARRALAX -->
            <!-- BEGIN : CONTENT -->
            <div class="content-layer">
              <div class="inner full-height">
                <div class="container-xs-height full-height">
                  <div class="slider-content">
                    <div class="container">
                      <div class="col col100 no-padding">
                        <h1 class="sm-text-center" data-swiper-parallax="-15%">Museums and Galleries</h1>
                        <h5 class="sm-text-center">Showcasing the top museums and galleries in Manchester.</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END : CONTENT -->
          </div>
          <!-- END : SLIDE -->
        </div>
        <!-- Add Navigation -->
        <div class="swiper-navigation swiper-dark-solid swiper-button-prev auto-reveal"></div>
        <div class="swiper-navigation swiper-dark-solid swiper-button-next auto-reveal"></div>
      </div>
    </div>
    <!-- END : SLIDER -->
  </section>
  <!--******************** MAIN CONTENT : End ********************-->


  <!--******************** JUMPS SECTION : Start ********************-->
  <section class="jumps-section">
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : JUMP OVERLAP -->
        <div class="jump-overlap">
          <!-- BEGIN : JUMP TITLE -->
          <div class="main-jump-title col">
            <h2>Featured Restaurants</h2>
            <!-- <a href="#">Find More <i class="fa fa-angle-right"></i></a> -->
          </div>
          <!-- END : JUMP TITLE -->
          <!-- BEGIN : FLEX CONTAINER -->
          <div class="flex-container">
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="/dpm-website/food/bar-burrito.php"><div class="jump-overlay"></div><img src="/dpm-website/dist/images/jumps/bar-burrito.jpg" alt="Wide shot of Bar Burrito building" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="/dpm-website/food/bar-burrito.php">Bar Burrito</a></h3>
                <p>Mexican restaurant known for their Mexican wrap as they have a whole range of flavours such as meat filling or vegetarian filling.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITEM -->
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="/dpm-website/food/wagamama.php"><div class="jump-overlay"></div><img src="/dpm-website/dist/images/jumps/wagamama.jpg" alt="Wide shot of wagamama building" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="/dpm-website/food/wagamama.php">Wagamama</a></h3>
                <p>Chinese restaurant with their most popular dish known as the prawn firecracker. The seating is excellent with an atmosphere that makes people feel like they are seated abroad.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITEM -->
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="/dpm-website/food/archies.php"><div class="jump-overlay"></div><img src="/dpm-website/dist/images/jumps/archies.jpg" alt="Wide shot of Archie's building" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="/dpm-website/food/archies.php">Archie's</a></h3>
                <p>American fast food takeaway and diner. They have a variety of different fast foods, milkshakes and desserts. The service is fast and it is popular around students from universities.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITMWM -->
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="/dpm-website/food/bella-italia.php"><div class="jump-overlay"></div><img src="/dpm-website/dist/images/jumps/bella-italia.jpg" alt="Wide shot of Bella Italia building" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="/dpm-website/food/bella-italia.php">Bella Italia</a></h3>
                <p>Italian restaurant that serves a variety of cuisines not just pasta or pizza. It also serves vegetarian dishes.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITEM -->
          </div>
          <!-- END : FLEX CONTAINER -->
        </div>
        <!-- END : JUMP OVERLAP -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </section>
  <!--******************** JUMPS SECTION : End ********************-->


  <!--******************** CATEGORY : Start ********************-->
  <section class="category">
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : CATEGORY TITLE -->
        <div class="category-title col">
          <h2>Choose a category</h2>
        </div>
        <!-- END : CATEGORY TITLE -->
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container">
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <div class="category-item-container">
              <a href="#">
                <i class="fa fa-cutlery"></i>
                <h3>Food</h3>
              </a>
              <div class="cat-item-links">
                <ul>
                  <li><a href="/dpm-website/food/bar-burrito.php">Bar Burrito</a></li>
                  <li><a href="/dpm-website/food/wagamama.php">Wagamama</a></li>
                  <li><a href="/dpm-website/food/archies.php">Archie's</a></li>
                  <li><a href="/dpm-website/food/bella-italia.php">Bella italia</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <div class="category-item-container">
              <a href="#">
                <i class="fa fa-bus"></i>
                <h3>Transport</h3>
              </a>
              <div class="cat-item-links">
                <ul>
                  <li><a href="/dpm-website/transport/bus.php">Bus</a></li>
                  <li><a href="/dpm-website/transport/taxi.php">Taxi</a></li>
                  <li><a href="/dpm-website/transport/tram.php">Tram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <div class="category-item-container">
              <a href="#">
                <i class="fa fa-shopping-basket"></i>
                <h3>Shopping</h3>
              </a>
              <div class="cat-item-links">
                <ul>
                  <li><a href="/dpm-website/shopping/arndale.php">Arndale Shopping Centre</a></li>
                  <li><a href="/dpm-website/shopping/intu-trafford-centre.php">Intu Trafford Centre</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <div class="category-item-container">
              <a href="#">
                <i class="fa fa-institution"></i>
                <h3>Museums / Galleries</h3>
              </a>
              <div class="cat-item-links">
                <ul>
                  <li><a href="/dpm-website/museums/manchester-art-gallery.php">Manchester Art Gallery</a></li>
                  <li><a href="/dpm-website/museums/museum-of-science-and-industry.php">Museum of Science &amp; Indsutry</a></li>
                  <li><a href="/dpm-website/museums/museum-of-transport.php">Museum of Transport</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <div class="category-item-container">
              <a href="#">
                <i class="fa fa-beer"></i>
                <h3>Nightlife</h3>
              </a>
              <div class="cat-item-links">
                <ul>
                  <li><a href="/dpm-website/nightlife/gorilla-bar.php">Gorilla Bar</a></li>
                  <li><a href="/dpm-website/nightlife/sankeys.php">Sankeys</a></li>
                  <li><a href="/dpm-website/nightlife/cloud23.php">Cloud 23</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END : CATEGORY ITEM -->
        </div>
        <!-- END : FLEX CONTAINER -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </section>
  <!--******************** CATEGORY : End ********************-->


  <!--******************** ACCORDION JUMPS : Start ********************-->
  <section class="accordion-jumps">
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : ACCORDION -->
        <div class="accordion">
          <!-- BEGIN : ACCORDION CONTAINER -->
          <div class="accordion-container">
            <!-- BEGIN : ACCORDION HEADER -->
            <div class="accordion-header">
              <h3>Transport</h3>
              <p>Different ways of travelling around Manchetser.</p>
            </div>
            <!-- END : ACCORDION HEADER -->
            <!-- BEGIN : JUMP PANEL -->
            <div class="jump-panel">
              <!-- BEGIN : PANEL1 -->
							<div class="m-active panel1 bus">
                <!-- BEGIN : PANEL CONTENT -->
								<div class="panel-content">
									<a href="/dpm-website/transport/bus.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Bus</h3>
                  <p>Learn about Bus travel in Manchester.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL1 -->
              <!-- BEGIN : PANEL2 -->
							<div class="panel2 taxi">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="/dpm-website/transport/taxi.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Taxi</h3>
                  <p>Learn about Taxi transportation in Manchester.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL2 -->
              <!-- BEGIN : PANEL3 -->
							<div class="panel3 tram">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="/dpm-website/transport/tram.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Tram</h3>
                  <p>Learn about the Metrolink Trams in Manchester.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL3 -->
            </div>
            <!-- END : JUMP PANEL -->
          </div>
          <!-- END : ACCORDION CONTAINER -->
        </div>
        <!-- END : ACCORDION -->

        <!-- BEGIN : ACCORDION -->
        <div class="accordion">
          <!-- BEGIN : ACCORDION CONTAINER -->
          <div class="accordion-container">
            <!-- BEGIN : ACCORDION HEADER -->
            <div class="accordion-header">
              <h3>Museums &amp; Galleries</h3>
              <p>Our top picks of museums and galleries.</p>
            </div>
            <!-- END : ACCORDION HEADER -->
            <!-- BEGIN : JUMP PANEL -->
            <div class="jump-panel">
              <!-- BEGIN : PANEL1 -->
							<div class="m-active panel1 mag">
                <!-- BEGIN : PANEL CONTENT -->
								<div class="panel-content">
									<a href="/dpm-website/museums/manchester-art-gallery.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Manchester Art Gallery</h3>
                  <p>Thousands of amazing artifacts and art collections.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL1 -->
              <!-- BEGIN : PANEL2 -->
							<div class="panel2 mosi">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="/dpm-website/museums/museum-of-science-and-industry.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Museum of Science &amp; Industry</h3>
                  <p>Check out the Manchester Baby.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL2 -->
              <!-- BEGIN : PANEL3 -->
							<div class="panel3 mot">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="/dpm-website/museums/museum-of-transport.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Museum of Transport</h3>
                  <p>The history of British transport.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL3 -->
            </div>
            <!-- END : JUMP PANEL -->
          </div>
          <!-- END : ACCORDION CONTAINER -->
        </div>
        <!-- END : ACCORDION -->

        <!-- BEGIN : ACCORDION -->
        <div class="accordion">
          <!-- BEGIN : ACCORDION CONTAINER -->
          <div class="accordion-container">
            <!-- BEGIN : ACCORDION HEADER -->
            <div class="accordion-header">
              <h3>Nightlife</h3>
              <p>Discover what Manchester is like after dark</p>
            </div>
            <!-- END : ACCORDION HEADER -->
            <!-- BEGIN : JUMP PANEL -->
            <div class="jump-panel">
              <!-- BEGIN : PANEL1 -->
							<div class="m-active panel1 gorilla">
                <!-- BEGIN : PANEL CONTENT -->
								<div class="panel-content">
									<a href="/dpm-website/nightlife/gorilla-bar.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Gorilla Bar</h3>
                  <p>Unleasj your inner animal.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL1 -->
              <!-- BEGIN : PANEL2 -->
							<div class="panel2 sankeys">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="/dpm-website/nightlife/sankeys.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Sankeys</h3>
                  <p>Great place for those mad about music and dancing.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL2 -->
              <!-- BEGIN : PANEL3 -->
							<div class="panel3 cloud">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="/dpm-website/nightlife/cloud23.php">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cloud23</h3>
                  <p>Located in the tallest building in Manchester.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL3 -->
            </div>
            <!-- END : JUMP PANEL -->
          </div>
          <!-- END : ACCORDION CONTAINER -->
        </div>
        <!-- END : ACCORDION -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </section>
  <!--******************** ACCORDION JUMPS : End ********************-->


  <!--========================================== - FOOTER - ==========================================-->
  <?php include_once($path."footer.php"); ?>

  </body>
</html>

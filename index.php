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
                <div class="background" data-pages-bg-image="images/slider/bg.jpg"></div>
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
                        <h1 class="sm-text-center" data-swiper-parallax="-15%">Lorem ipsum dolor sit amet consectetur</h1>
                        <h5 class="sm-text-center">Excepteur sint occaecat cupidatat non proident sunt in culpa.</h5>
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
                <div class="background" data-pages-bg-image="images/slider/bg.jpg"></div>
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
                        <h1 class="sm-text-center" data-swiper-parallax="-15%">Lorem ipsum dolor sit amet.</h1>
                        <h5 class="sm-text-center">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
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
                <div class="background" data-pages-bg-image="images/slider/bg.jpg"></div>
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
                        <h1 class="sm-text-center" data-swiper-parallax="-15%">Duis aute irure dolor in reprehenderit</h1>
                        <h5 class="sm-text-center">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</h5>
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
            <a href="#">Find More <i class="fa fa-angle-right"></i></a>
          </div>
          <!-- END : JUMP TITLE -->
          <!-- BEGIN : FLEX CONTAINER -->
          <div class="flex-container">
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="#"><div class="jump-overlay"></div><img src="images/jumps/jump-1.jpg" alt="" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="#">Lorem Ipsum</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITEM -->
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="#"><div class="jump-overlay"></div><img src="images/jumps/jump-1.jpg" alt="" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="#">Lorem Ipsum</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITEM -->
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="#"><div class="jump-overlay"></div><img src="images/jumps/jump-1.jpg" alt="" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="#">Lorem Ipsum</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <!-- END : JUMP CONTENT -->
            </div>
            <!-- END : JUMP FLEX ITMWM -->
            <!-- BEGIN : JUMP FLEX ITEM -->
            <div class="jump-flex-item">
              <a href="#"><div class="jump-overlay"></div><img src="images/jumps/jump-1.jpg" alt="" /></a>
              <!-- BEGIN : JUMP CONTENT -->
              <div class="jump-content">
                <h3 class="jump-title"><a href="#">Lorem Ipsum</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
            <a href="#">
              <i class="fa fa-cutlery"></i>
              <h3>Food</h3>
            </a>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <a href="#">
              <i class="fa fa-bus"></i>
              <h3>Transport</h3>
            </a>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <a href="#">
              <i class="fa fa-shopping-basket"></i>
              <h3>Shopping</h3>
            </a>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <a href="#">
              <i class="fa fa-institution"></i>
              <h3>Museums / Galleries</h3>
            </a>
          </div>
          <!-- END : CATEGORY ITEM -->
          <!-- BEGIN : CATEGORY ITEM -->
          <div class="category-item">
            <a href="#">
              <i class="fa fa-beer"></i>
              <h3>Nightlife</h3>
            </a>
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
              <h3>Lorem Ipsum</h3>
              <p>With endless hiking trails, these destinations will satisfy the wildest explorers!</p>
            </div>
            <!-- END : ACCORDION HEADER -->
            <!-- BEGIN : JUMP PANEL -->
            <div class="jump-panel">
              <!-- BEGIN : PANEL1 -->
							<div class="m-active panel1">
                <!-- BEGIN : PANEL CONTENT -->
								<div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL1 -->
              <!-- BEGIN : PANEL2 -->
							<div class="panel2">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL2 -->
              <!-- BEGIN : PANEL3 -->
							<div class="panel3">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
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
              <h3>Lorem Ipsum</h3>
              <p>With endless hiking trails, these destinations will satisfy the wildest explorers!</p>
            </div>
            <!-- END : ACCORDION HEADER -->
            <!-- BEGIN : JUMP PANEL -->
            <div class="jump-panel">
              <!-- BEGIN : PANEL1 -->
							<div class="m-active panel1">
                <!-- BEGIN : PANEL CONTENT -->
								<div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL1 -->
              <!-- BEGIN : PANEL2 -->
							<div class="panel2">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL2 -->
              <!-- BEGIN : PANEL3 -->
							<div class="panel3">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
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
              <h3>Lorem Ipsum</h3>
              <p>With endless hiking trails, these destinations will satisfy the wildest explorers!</p>
            </div>
            <!-- END : ACCORDION HEADER -->
            <!-- BEGIN : JUMP PANEL -->
            <div class="jump-panel">
              <!-- BEGIN : PANEL1 -->
							<div class="m-active panel1">
                <!-- BEGIN : PANEL CONTENT -->
								<div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL1 -->
              <!-- BEGIN : PANEL2 -->
							<div class="panel2">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                <!-- END : PANEL TITLE -->
							</div>
              <!-- END : PANEL2 -->
              <!-- BEGIN : PANEL3 -->
							<div class="panel3">
                <!-- BEGIN : PANEL CONTENT -->
                <div class="panel-content">
									<a href="#">Details</a>
                  <div class="spacer"></div>
								</div>
                <!-- END : PANEL CONTENT -->
                <!-- BEGIN : PANEL TITLE -->
                <div class="panel-title">
                  <h3>Cervical spondylosis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
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

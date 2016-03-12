<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'museum';
   $page = 'mosi';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!-- PAGE TITLE -->
  <?php $page_title = 'Museum of Science and Industry | Museums | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'mosi') {echo 'class="banner-section mosi-banner"';} ?> >
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Museum of Science and Industry</h1>
          <p><i class="fa fa-map-marker"></i>  Liverpool Road, Manchester, M3 4FP</p>
          <div class="breadcrumbs">
            <a href="/dpm-website/index.php">Home</a>
            <span>Museums</span>
            <span>Museum of Science and Industry</span>
          </div>
        </div>
        <!-- END : FLEX CONTAINER -->
        <!-- BEGIN : DOWN ARROW -->
        <div class="down-arrow">
          <a href="#content" class="animated infinite bounce scroll-to" data-offset-top="50"><i class="fa fa-angle-down"></i></a>
        </div>
        <!-- END : DOWN ARROW -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </section>
  <!--******************** BANNER SECTION : End ********************-->



  <!--******************** MAIN CONTENT : Start ********************-->
  <main id="content" class="main-content">
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container">
          <!-- BEGIN : ARTICLE -->
          <article class="col">
            <h1>The Museum of Science and Industry is devoted to the development of science, technology and industry.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/images/manchester-baby.jpg" alt="Left side wide shot of the Manchester Baby computer" />
              <p>Manchester Baby: The world's first stored program computer.</p>
            </div>
            <!-- END : ARTICLE IMAGE -->

            <p>The Museum of Science and Industry (MSI or MOSI) in Manchester, is a large museum devoted to the development of science, technology and industry with emphasis on the city's achievements in these fields. The museum is part of the Science Museum Group, a non-departmental public body of the Department for Culture, Media and Sport, having merged with the National Science Museum in 2012.</p>

            <p>There are extensive displays on the theme of transport (cars, aircraft, railway locomotives and rolling stock), power (water, electricity, steam and gas engines), Manchester's sewerage and sanitation, textiles, communications and computing.</p>

            <p>The museum is an Anchor Point of the European Route of Industrial Heritage; and is situated on the site of the world's first railway station – Manchester Liverpool Road – which opened as part of the Liverpool and Manchester Railway in September 1830. The railway station frontage and 1830 warehouse are both Grade I listed. The museum also offers steam train rides at weekends and on bank holidays.</p>

            <div id="map-mosi" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Charlotte Callaghan <span>In the last week</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>I've been here for evening events and daytime exhibitions. It's fascinating and the staff are lovely! Great day or evening out!</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Bob Sparticus <span>3 weeks ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star star-gray"></i>
              </div>
              <p>Best place to take the kids in a school holiday. one small gripe: ordered a tea in the restaurant and would have liked whole milk in it. They had none. This is a busy restaurant (and not cheap) they must serve thousands a day. Would it hurt to have a bottle or two of whole milk - I can't be the only person in the world that thinks tea tastes better with!</p>
            </div>
            <!-- END : REVIEW BOX -->
          </article>
          <!-- END : ARTICLE -->
          <!--========================================== - ASIDE - ==========================================-->
          <?php include_once($path."aside.php"); ?>
        </div>
        <!-- END : FLEX CONTAINER -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </main>
  <!--******************** MAIN CONTENT : End ********************-->



  <!--******************** LOCATION DETAILS : Start ********************-->
  <section <?php if($page == 'mosi') {echo 'class="location-details mosi-banner"';} ?> class="location-details">
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <!-- BEGIN : DETAIL BODY -->
          <div class="detail-body">
            <!-- BEGIN : DETAIL ITEM -->
            <div class="detail-item">
              <i class="pe-7s-map-marker"></i>
              <h4>Address</h4>
              <p>Museum of Science &amp; Industry, Liverpool Road, Manchester, M3 4FP</p>
            </div>
            <!-- END : DETAIL ITEM -->
          </div>
          <!-- END : DETAIL BODY -->
          <!-- BEGIN : DETAIL BODY -->
          <div class="detail-body">
            <!-- BEGIN : DETAIL ITEM -->
            <div class="detail-item">
              <i class="pe-7s-call"></i>
              <h4>Phone</h4>
              <p>0161 832 2244</p>
            </div>
            <!-- END : DETAIL ITEM -->
          </div>
          <!-- END : DETAIL BODY -->
          <!-- BEGIN : DETAIL BODY -->
          <div class="detail-body">
            <!-- BEGIN : DETAIL ITEM -->
            <div class="detail-item">
              <i class="pe-7s-browser"></i>
              <h4>Website</h4>
              <p><a href="http://www.msimanchester.org.uk">www.msimanchester.org.uk</a></p>
            </div>
            <!-- END : DETAIL ITEM -->
          </div>
          <!-- END : DETAIL BODY -->
        </div>
        <!-- END : FLEX CONTAINER -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </section>
  <!--******************** LOCATION DETAILS : End ********************-->



  <!--========================================== - FOOTER - ==========================================-->
  <?php include_once($path."footer.php"); ?>

  </body>
</html>

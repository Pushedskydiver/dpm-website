<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'nightlife';
   $page = 'sankeys';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- PAGE TITLE -->
  <?php $page_title = 'Sankeys | Nightlife | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'sankeys') {echo 'class="banner-section sankeys-banner"';} ?>>
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Sankeys</h1>
          <p><i class="fa fa-map-marker"></i> Beehive Mill, Jersey St, Manchester, M4 6JG</p>
          <div class="breadcrumbs">
            <a href="/website/index.php">Home</a>
            <span>Nightlife</span>
            <span>Sankeys</span>
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
            <h1>Sankeys is a nightclub franchise with its first nightclub in Ancoats, Manchester, England.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/images/sankeys.jpg" alt="Wide shot of people queuing outside Sankeys" />
              <p>People queuing outside Sankeys.</p>
            </div>
            <!-- END : ARTICLE IMAGE -->
            <p>Manchester is world famous for its clubbing scene, after all one of the most influential clubs was born here the Sankeys. A stalwart of the Manchester clubbing scene, the space has seen some of the biggest names in global dance music take to its decks.</p>

            <p>Sankeys, Manchester, has long been one of the main focal points of the northern clubbing landscape. From its raw industrial home in the heart of Ancoats, the club has continually stayed ahead of the curve with in the know bookings, unrivalled atmospheres and many legendary parties. All this has made Sankeys renowned around the world as an uncompromising club that books underground acts and has a great attention to detail when it comes to light, sound and production. Head to Sankeys and you know you will get an authentic rave experience that comes with over 20 years of experience.</p>

            <div id="map-sankeys" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Lucas Saurin <span>3 weeks ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star star-gray"></i>
              </div>
              <p>What a great club! Went there on a Thursday, it was not very crowded but it had the perfect balance of enough people to make it enjoyable and enough space to dance and walk around. The music was great, with the DJs not slowing at any moment. Had a great  time there!</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Rob Bunting <span>2 months ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>icon. (please don't wear jeffrey west shoes they will get trashed)</p>
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
  <section <?php if($page == 'sankeys') {echo 'class="location-details sankeys-banner"';} ?> class="location-details">
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
              <p>Sankeys, Beehive Mill, Jersey St, Manchester, M4 6JG</p>
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
              <p>0161 236 5444</p>
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
              <p><a href="http://sankeys.info">sankeys.info</a></p>
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

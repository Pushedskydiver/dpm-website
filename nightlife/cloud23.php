<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'nightlife';
   $page = 'cloud';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- PAGE TITLE -->
  <?php $page_title = 'Cloud 23 | Nightlife | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'cloud') {echo 'class="banner-section cloud-banner"';} ?>>
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Cloud 23</h1>
          <p><i class="fa fa-map-marker"></i> Beetham Tower, 303 Deansgate, Manchester, M3 4LQ</p>
          <div class="breadcrumbs">
            <a href="/website/index.php">Home</a>
            <span>Nightlife</span>
            <span>Cloud 23</span>
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
            <h1>Cloud 23 id the Hilton hotel's smart cocktail and champagne bar on the 23rd floor of the landmark Beetham Tower.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/images/beetham-tower.jpg" alt="Wide shot looking up at Beetham Tower" />
              <p>Beetham Tower: Home to the Cloud 23 bar.</p>
            </div>
            <!-- END : ARTICLE IMAGE -->
            <p>'Cloud 23 is more than just a bar it's a unique venue located at the highest point in Manchester'. Overlooking the entire cityscape Cloud 23 is certainly a place to go if you need to impress. With its floor to ceiling windows, this bar certainly isn't for the light hearted, 23 stories up in Beetham Tower. With a huge range of different, high quality drinks, poured by professionally trained bar staff, expect the prices to be a bit above the budget of a normal student. A strict dress code is also in place, and to go to the bar you have to book in advance, adding to the establishment's upper class ethos</p>

            <p>From the cavernous Manchester Arena to the dark, intimate vibes of the  Night and day cafe, Manchester is overflowing with live music venues to suit all tastes and get everybody’s body moving. The information above is a clear indication of what the nightlife has to offer in Manchester fun. Excitement, relaxation and getting away from the stress of university work.</p>

            <div id="map-cloud" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Oskar Bretes <span>3 weeks ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Great bar, amazing cocktails. The wait can be quite long so a reservation is highly recommended even during periods that should seem calmer. Cloud 23 offers very nice views of the city</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>James Nixon Steel <span>A month ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>FGreat cocktails and a huge selection of spirits to choose from. The view at night is gorgeous. Situated right on the "chin" of beetham tower, you can actually stand on a glass area and see the drop below. Really good experience. Extremely expensive.</p>
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
  <section <?php if($page == 'cloud') {echo 'class="location-details cloud-banner"';} ?> class="location-details">
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
              <p>Cloud 23, Beetham Tower, 303 Deansgate, Manchester, M3 4LQ</p>
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
              <p>0161 870 1670</p>
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
              <p><a href="http://www.cloud23bar.com">www.cloud23bar.com</a></p>
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

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'museum';
   $page = 'mot';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!-- PAGE TITLE -->
  <?php $page_title = 'Museum of Transport | Museums | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'mot') {echo 'class="banner-section mot-banner"';} ?> >
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Museum of Transport</h1>
          <p><i class="fa fa-map-marker"></i> Boyle Street, Cheetham, Manchester, M8 8UW</p>
          <div class="breadcrumbs">
            <a href="/dpm-website/index.php">Home</a>
            <span>Museums</span>
            <span>Museum of Transport</span>
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
            <h1>The Museum of Transport showcases the British histroy of transportation.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/images/mot.jpg" alt="Wide shot of Museum of Transport entrance." />
              <p>Joana Vasconcelos: Time Machine</p>
            </div>
            <!-- END : ARTICLE IMAGE -->

            <p>The Museum of Transport, Greater Manchester is a museum that aims to preserve and promote the public transport heritage of Greater Manchester, a metropolitan county in North West England. Owned by Transport for Greater Manchester, the museum is located in the Cheetham Hill area of Manchester.</p>

            <p>The museum holds a sizeable collection, one of the largest of its kind in the UK. Due to the size of the building, some vehicles have to be kept off-site, with exhibits changed around every so often. In addition, vehicles often attend events around the country during the summer months.</p>

            <p>The museum itself is owned by Transport for Greater Manchester, having been established at the Boyle Street site, Cheetham Hill, since 1977. The museum, which was opened to the public in a blaze of publicity two years later on 27 May 1979, was set up to actively promote interest in the history and heritage of Greater Manchester's local passenger transport system. The day-to-day running of the museum is carried out by volunteers from the Greater Manchester Transport Society (initially the SELNEC Transport Society).</p>

            <p>The museum collection is constantly developing and restoration work can be often be seen by visitors giving the display a lively, working atmosphere. In the future, the collection of vehicles and other artefacts relating to the roads of Greater Manchester will continue to grow, with the Museum further developing its facilities as well as restoring items which have already been received but which remain in derelict condition. With Transport for Greater Manchester's continuing assistance, it is hoped the museum will continue to be a focal point and a major attraction of its type.</p>

            <div id="map-mot" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Robert Jump <span>2 weeks ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Excellent range of buses from a 19th Century Horse Bus to recent additions that look as if they just came in off duty. The Cafe was basic but well managed.</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Chris Northwood <span>A year ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star star-gray"></i>
                <i class="fa fa-star star-gray"></i>
              </div>
              <p>Extensive collection of Greater Manchester buses from over the years, as well as the mock-up Metrolink tram. Sadly the collection isn't curated brilliantly and is more for looking at than interacting with, but if you're interested in transport, it's still worth checking out.</p>
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
  <section <?php if($page == 'mot') {echo 'class="location-details mot-banner"';} ?> class="location-details">
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
              <p>Museum of Transport, Boyle Street, Cheetham, Manchester, M8 8UW</p>
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
              <p>0161 205 2122</p>
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
              <p><a href="http://www.gmts.co.uk">www.gmts.co.uk</a></p>
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

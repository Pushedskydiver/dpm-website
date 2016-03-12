<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'transport';
   $page = 'taxi';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!-- PAGE TITLE -->
  <?php $page_title = 'Taxi | Transport | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'taxi') {echo 'class="banner-section taxi-banner"';} ?> >
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Taxi Travel</h1>
          <div class="breadcrumbs">
            <a href="/dpm-website/index.php">Home</a>
            <span>Transport</span>
            <span>Taxi</span>
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
            <h1>There are a wide variety of taxi services that surround Manchester.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/dist/images/taxi.jpg" alt="Wide shot of a line of taxis outside Manchester city Footbll Club store." />
              <p>Manchester City Football club store.</p>
            </div>
            <!-- END : ARTICLE IMAGE -->

            <p>Another way of getting around in Manchester is by Taxi's. This can sometimes be the most direct way of getting to your destination. <b>Uber</b> do their own taxi service. By using their <a href="https://www.uber.com" title="External link to Uber website.">website</a> or mobile app on your smartphone you can choose your ride and set your location. You then can see your driver's picture and vehicle details, and can track their arrival on the map. This makes it a quick and easy service to use, you can also link your account to your debt, credit card so that there is no need for cash. With this being a cashless paying system it can be really handy. The app is free to download from the iOS, Google Play and Windows app store below.</p>

            <div class="flex-container app-badges-container">
              <div class="app-store-badge">
                <a href="https://200585.measurementapi.com/serve?action=click&amp;publisher_id=200585&amp;site_id=17688&amp;site_publisher=uber-com&amp;_ga=1.4258995.1207944611.1457124087" title="External link to Uber app on iOS app store"><img src="/website/dist/images/app-store-badges/ios-app-store.svg" alt="Official iOS app store badge"></a>
              </div>

              <div class="app-store-badge">
                <a href="https://200585.measurementapi.com/serve?action=click&amp;publisher_id=200585&amp;site_id=26744&amp;site_publisher=uber-com&amp;_ga=1.46729767.1207944611.1457124087" title="External link to Uber app on Google Play app store"><img src="/website/dist/images/app-store-badges/google-play-store.svg" alt="Official Google Play app store badge"></a>
              </div>

              <div class="app-store-badge">
                <a href="https://microsoft.com/en-us/store/apps/uber/9wzdncrfhxrd?source=uber-com&amp;_ga=1.46729767.1207944611.1457124087" title="External link to Uber app on Windows app store"><img src="/website/dist/images/app-store-badges/windows-app-store.svg" alt="Official Windows app store badge"></a>
              </div>
            </div>

            <p>There are also many other taxi companies that are around in Manchester such as Street Cars, Manchester Taxi's and Manchester Cars. There are also many taxi's that sit outside all the of train stations within Manchester (Victoria, Piccadilly and Oxford Road).</p>
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
  <section <?php if($page == 'taxi') {echo 'class="location-details taxi-banner"';} ?> class="location-details">
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
              <p>Manchester Art Gallery, Mosley Street, Manchester, M2 3JL</p>
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
              <p>0161 235 8888</p>
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
              <p><a href="http://manchesterartgallery.org">manchesterartgallery.org</a></p>
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

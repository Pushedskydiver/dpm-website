<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'transport';
   $page = 'tram';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!-- PAGE TITLE -->
  <?php $page_title = 'Tram | Transport | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'tram') {echo 'class="banner-section tram-banner"';} ?> >
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Tram Travel</h1>
          <div class="breadcrumbs">
            <a href="/dpm-website/index.php">Home</a>
            <span>Transport</span>
            <span>Tram</span>
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
            <h1>Manchester Metrolink is a tram rail system in Greater Manchester.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/images/tram.jpg" alt="Wide shot of Tram at Piccadilly Tram stop" />
              <p>Piccadilly Tram station.</p>
            </div>
            <!-- END : ARTICLE IMAGE -->

            <p>The trams within Manchester are easy to find, they offer a quick service with many destination's available. The main tram stops within Manchester are Deansgate, Piccadilly, Piccadilly Garderns, Market Street and Victoria. From the map you can plan out which route you wish to take depending on your destination. The main places easily reached are Media City, Etihad Stadium, and Manchester Airport.</p>

            <a href="http://www.metrolink.co.uk/stationinfo/Documents/Route_Map.pdf" title="External link to PDF file of Metrolnik travel map" class="document-download">Download travel map</a>

            <p>The travel fees for the trams vary between peak and off-peak times and there are a variety of tickets you can purchase. The single journey ticket allows you to only travel once to your required destination and if you want to go back, you will be required to purchase another single ticket. The return journey ticket allows you to travel to your required destination and then travel back to the destination in which you purchased the ticket. The first 2 ticket options only last on the day you purchased them, whereas the weekly journey ticket allows you to travel to your destination and back for the entire week, saving you money and the hassle of buying a ticket every day. For more information on the ticket options and the ticket prices, feel free to visit the <a href="http://www.metrolink.co.uk/" title="External link to Metrolink website">Metrolink website</a>.</p>

            <p>If you happen to own a smartphone then you can download a fancy new app known as <b>'Get me there'</b>, which was created to help make travelling around Greater Manchester a lot simpler and easier. The aim of the app is to make printed tickets a thing of the past with a range of smarter ways to buy and use public transport, starting with a new get me there smart phone app and a new get me there smart card. This application can be used on both Tram and Bus services with Train services to be introduced at a later stage. To find out more information, visit the <a href="http://www.getmethere.co.uk/" title="External link to Get me there website">Get me there website</a>. The Get me there app is free to donwload on the iOS and Google Play app store below.</p>

            <div class="flex-container app-badges-container">
              <div class="app-store-badge">
                <a href="https://itunes.apple.com/us/app/get-me-there-travelcards-for/id1049913060?ls=1&amp;mt=8" title="External link to Get me there app on iOS app store"><img src="/website/dist/images/app-store-badges/ios-app-store.svg" alt="Official iOS app store badge"></a>
              </div>

              <div class="app-store-badge">
                <a href="https://play.google.com/store/apps/details?id=com.tfgm.getmethere" title="External link to Get me there app on Google Play app store"><img src="/website/dist/images/app-store-badges/google-play-store.svg" alt="Official Google Play app store badge"></a>
              </div>
            </div>
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
  <section <?php if($page == 'tram') {echo 'class="location-details tram-banner"';} ?> class="location-details">
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
              <p>Metrolink RATP Dev UK, Trafford Depot, Warwick Road South, Manchester, M16 0GZ</p>
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
              <p>0161 205 2000</p>
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
              <p><a href="http://www.metrolink.co.uk/">metrolink.co.uk</a></p>
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

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'shopping';
   $page = 'arndale';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!-- PAGE TITLE -->
  <?php $page_title = 'Arndale | Shopping | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'arndale') {echo 'class="banner-section arndale-banner"';} ?> >
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Arndale Shopping Centre</h1>
          <div class="breadcrumbs">
            <a href="/dpm-website/index.php">Home</a>
            <span>Shopping</span>
            <span>Arndale</span>
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
            <h1>The Arndale is a large shopping centre in Manchester.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/dist/images/arndale-shopping-centre.jpg" alt="Wide shot of inside the Arndale on the first floor." />
              <p>Arndale Shopping Centre</p>
            </div>
            <!-- END : ARTICLE IMAGE -->

            <p>Manchester's very own shopping centre, the <b>Arndale</b>, conveniently placed close to Victoria Station and Piccadilly Gardens, is packed full of shops for all your needs. There's plenty of high street shops to buy great clothes and shoes like Topshop/Topman, New Look, Footasylum, H&amp;M, Office and much more. These are all placed either on the ground floor or the first floor but are easy to find. You can also use <a href="https://www.myunidays.com" title="External link to UNIdays webiste">UNIdays</a>, a discount website and app, to get student discounts in the majority of these shops. You can download the app from the iOS and Google Play store for free below.</p>

            <div class="flex-container app-badges-container">
              <div class="app-store-badge">
                <a href="https://itunes.apple.com/gb/app/unidays/id599608562?mt=8&amp;uo=4" title="External link to UNIdays app on iOS app store."><img src="/dpm-website/dist/images/app-store-badges/ios-app-store.svg" alt="Official iOS app store badge"></a>
              </div>

              <div class="app-store-badge">
                <a href="https://play.google.com/store/apps/details?id=com.myunidays" title="External link to UNIdays app on Google Play app store."><img src="/dpm-website/dist/images/app-store-badges/google-play-store.svg" alt="Official Google Play app store badge"></a>
              </div>
            </div>

            <p>For all your technological needs, there's the Apple store; a stand out store which has iPhones, iPads, Macbooks and every other Apple related product along with a genius bar to aid in fixing any Apple products you might have if they become faulty. Arndale also has a Currys, another store with tons of tech from DSLR cameras to laptops and desktops. Also situated in Arndale is Waterstones where you can buy books, both educational and non educational at affordable prices.</p>

            <p>When you are done shopping, you can head up to the food court and enjoy some light bites to eat like a Subway or go to Taco Bell, the first Taco Bell ever opened in the UK. Just outside of the Arndale are more shops such as Urban Outfitters, All Saints, Footlocker and lots more, along with 1 of only 4 Selfridges in the UK. One of the most exclusive department stores in the UK outside of London, alongside Harvey Nichols, it has multi-storeys and plenty of luxury brands along with more affordable brands; it is definitely a go to store for the more fashion conscious individual.</p>

            <p>To find out more about what the Arndale has to offer, check out their <a href="https://www.manchesterarndale.com" title="External link to Manchester Arndale website.">official website</a>.</p>

            <div id="map-arn" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Neil Dymond-Green <span>In the last week</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Manchester Arndale provides covered souping on those infrequent (!) days in the city when it rains. A huge selection of stores in a fresh setting. Good food court, food market and other eateries as well as shopping.</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Sid Bagas <span>A month ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Really enjoyable experience to shop in Manchester with good shops and coffee places. Has been done up really nice as the old Armadale was poor but now I would recommend shopping there anytime. All other major stores and excellent restaurants a few minutes away - Perfect!</p>
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
  <section <?php if($page == 'arndale') {echo 'class="location-details arndale-banner"';} ?> class="location-details">
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
              <p>Arndale Shopping Centre, Market Street, Manchester, M4 3AQ</p>
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
              <p>0161 833 9851</p>
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
              <p><a href="https://www.manchesterarndale.com">manchesterarndale.com</a></p>
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

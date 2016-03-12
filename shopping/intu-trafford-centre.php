<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'shopping';
   $page = 'intu';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!-- PAGE TITLE -->
  <?php $page_title = 'Intu Trafford Centre | Shopping | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'intu') {echo 'class="banner-section intu-banner"';} ?> >
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Intu Trafford Centre</h1>
          <div class="breadcrumbs">
            <a href="/dpm-website/index.php">Home</a>
            <span>Shopping</span>
            <span>Intu Trafford Centre</span>
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
            <h1>Intu Trafford Centre is a 3-storey mall for fashion and homeware shops, department store, restaurants and multi-screen cinema.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/dist/images/intu-trafford-centre.jpg" alt="Wide shot of Joana Vasconcelos Time Machine" />
              <p>Intu Trafford Centre</p>
            </div>
            <!-- END : ARTICLE IMAGE -->

            <p>Just outside of Manchester city centre is Trafford park, home to <b>Intu Trafford Centre</b>. In the Trafford centre there are even more stores and with a charming interior and exterior it is a great shopping experience. All the high street and clothing stores are featured in the Trafford centre, Topshop/Topman, River Island, New Look, all those featured in the Arndale, alongside some not featured such as Tessuti and Gap. Alongside these, there are a few department stores like John Lewis, Debenhams, and the second Selfridges in Manchester. Here you can buy perfumes, clothes, and technology; in other words, all your needs in one convenient store.</p>

            <p>You can also use <a href="https://www.myunidays.com" title="External link to UNIdays webiste">UNIdays</a>, a discount website and app, to get student discounts in the majority of these shops. You can download the app from the iOS and Google Play store for free below.</p>

            <div class="flex-container app-badges-container">
              <div class="app-store-badge">
                <a href="https://itunes.apple.com/gb/app/unidays/id599608562?mt=8&amp;uo=4" title="External link to UNIdays app on iOS app store."><img src="/dpm-website/dist/images/app-store-badges/ios-app-store.svg" alt="Official iOS app store badge"></a>
              </div>

              <div class="app-store-badge">
                <a href="https://play.google.com/store/apps/details?id=com.myunidays" title="External link to UNIdays app on Google Play app store."><img src="/dpm-website/dist/images/app-store-badges/google-play-store.svg" alt="Official Google Play app store badge"></a>
              </div>
            </div>

            <p>When you are finished shopping, there's a large food court with a large variety of places to eat, from Las Iguanas to Nandos. If entertainment is what you're looking for, there are the arcades, 18-pin bowling lanes and a children's playzone along with a bar and lounge area. On the top floor of the Trafford centre is a 20 screen Odeon cinema with a large selection of movies to watch and plenty of snacks to enjoy.</p>

            <p>To find out more about what Intu Trafford Centre has to offer, check out their <a href="http://intu.co.uk/traffordcentre" title="External link to Intu Trafford Centre website">official website</a>.</p>

            <div id="map-intu" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Ade <span>2 weeks ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>A visit to the Trafford Centre is always a good idea if you're bored on the weekend, there's a lot to do there. The problem is that the majority of these things involve spending money, so if you're on a budget it's probably best to avoid the place as it's a money sink. It is a mall afterall so this is not a bad thing at all, just something to be aware of.</p>

              <p>The other thing is it's size, it's deceptively big. If you've got all day to spend there you might see everything, or maybe if you flit about the place but as above, it's also a time sink simply because of the sheer size of the place and the amount of shops to go to.</p>

              <p>There is a food court where you can rest up and get something to eat, and a large Odeon Cinema in the premises as well so you can take a break from all the walking about and relax for a bit.</p>

              <p>There really is far too much to cover, but as far as the north-west goes there aren't many places like it. It's a mall, but it's also quite a bit more than that.</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Joe Hopkins <span>3 weeks ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Great place for shopping. Visited many times, always plenty of space to park and a big variety of shops. The place is huge like an airport also. :) Note it opens late on a sunday though - went there early and been caught out before.</p>
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
  <section <?php if($page == 'intu') {echo 'class="location-details intu-banner"';} ?> class="location-details">
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
              <p>intu Trafford Centre, Stretford, Manchester, M17 8AA</p>
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
              <p>0161 749 1717</p>
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
              <p><a href="http://intu.co.uk/traffordcentre">intu.co.uk/traffordcentre</a></p>
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

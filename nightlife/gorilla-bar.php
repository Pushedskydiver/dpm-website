<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'nightlife';
   $page = 'gorilla';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- PAGE TITLE -->
  <?php $page_title = 'Gorilla Bar | Nightlife | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <?php $meta_description = '';?>
  <?php $meta_keywords = 'Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student';?>

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>



  <!--******************** BANNER SECTION : Start ********************-->
  <section <?php if($page == 'gorilla') {echo 'class="banner-section gorilla-banner"';} ?>>
    <!-- BEGIN : CONTAINER -->
    <div class="container">
      <!-- BEGIN : ROW -->
      <div class="row">
        <!-- BEGIN : FLEX CONTAINER -->
        <div class="flex-container col">
          <h1>Gorilla Bar</h1>
          <p><i class="fa fa-map-marker"></i> 54-56 Whitworth Street, Manchester, M1 5WW</p>
          <div class="breadcrumbs">
            <a href="/website/index.php">Home</a>
            <a href="#">Nightlife</a>
            <span>Gorilla Bar</span>
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
            <h1>Gorilla is a popular bar which is located in the city centre.</h1>
            <!-- BEGIN : ARTICLE IMAGE -->
            <div class="article-img">
              <img src="/dpm-website/images/joana-vasconcelos-time-machine.jpg" alt="Wide shot of Joana Vasconcelos Time Machine" />
              <p>Joana Vasconcelos: Time Machine</p>
            </div>
            <!-- END : ARTICLE IMAGE -->
            <p>The Manchester Art Gallery, formerly Manchester City Art Gallery, is a publicly owned art museum on Mosley Street in Manchester city centre that has a collection of more than 25,000 objects. The gallery is easy to get to, by getting off at either Market Street or St. Peter's Square Tram station, or by getting of at Picadilly bus stop and walking through Mosley Street.</p>

            <p>You can explore their collections of fine art, spanning six centuries and including many major modern and contemporary pieces. The museum is most famous for its 19th century British paintings, particularly the collection of Pre-Raphaelite works.</p>

            <p>Manchester Art Gallery is free to enter and open seven days a week. It houses many works of local and international significance, ranging from Joana Vasconcelos: Time Machine (image above), to the recently added Imitation Game which is an exhibition by eight international contemporary artists who explore the theme of machines and the imitation of life. More than half a million people visited the museum in the period of a year, according to figures released in April 2014.</p>

            <div id="map-gorilla" class="map"></div>

            <!-- BEGIN : REVIEW TITLE -->
            <div class="review-title">
              <h2>Recent Reviews</h2>
            </div>
            <!-- END : REVIEW TITLE -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>David Stansbury <span>A month ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star star-gray"></i>
              </div>
              <p>It's a belting night, be there 20th Feb to see the legend stu allen.</p>
            </div>
            <!-- END : REVIEW BOX -->
            <!-- BEGIN : REVIEW BOX -->
            <div class="review-box">
              <h3>Richard Gregory <span>A month ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star star-gray"></i>
              </div>
              <p>Friendly bar near Oxford Road station, with a great selection of food and warm atmosphere. The beer choice is slightly limited but plenty of cocktails on offer. Can be a little noisy downstairs, but there's some extra seating upstairs.</p>
            </div>
            <!-- END : REVIEW BOX -->
          </article>
          <!-- END : ARTICLE -->
          <!-- BEGIN : ASIDE -->
          <aside class="aside-content col">
            <!-- BEGIN : WIDGET TITLE -->
            <div class="widget-title">
              <h3><i class="icon-list"><span></span></i> Categories</h3>
            </div>
            <!-- END : WIDGET TITLE -->
            <!-- BEGIN : CATEGORIES -->
            <ul class="categories">
              <!-- CATEGORY ITEM -->
              <li <?php if($current == 'food') {echo 'class="m-active"';} ?>>
                <a href="#" class="category-title">Food <i class="fa fa-cutlery"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <!-- CATEGORY ITEM -->
              <li <?php if($current == 'transport') {echo 'class="m-active"';} ?>>
                <a href="#" class="category-title">Transport <i class="fa fa-bus"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <!-- CATEGORY ITEM -->
              <li <?php if($current == 'shopping') {echo 'class="m-active"';} ?>>
                <a href="#" class="category-title">Shopping <i class="fa fa-shopping-basket"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <!-- CATEGORY ITEM -->
              <li <?php if($current == 'museum') {echo 'class="m-active"';} ?> >
                <a href="#" class="category-title">Museusms &amp; Galleries <i class="fa fa-institution"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="/dpm-website/museums/manchester-art-gallery.php">Manchester Art Gallery</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <!-- CATEGORY ITEM -->
              <li <?php if($current == 'nightlife') {echo 'class="m-active"';} ?>>
                <a href="#" class="category-title">Nightlife <i class="fa fa-beer"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="/dpm-website/nightlife/gorilla-bar.php">Gorilla Bar</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>
            </ul>
            <!-- END : CATEGORIES -->
            <!-- BEGIN : WIDGET TITLE -->
            <div class="widget-title">
              <h3><i class="pe-7s-link"></i> Related Pages</h3>
            </div>
            <!-- END : WIDGET TITLE -->
            <!-- BEGIN : RELATED PAGES -->
            <div class="related-pages">
              <img src="/dpm-website/images/manchester-mosi.jpg" alt="Wide shot of the Museuem of Science and Industry" />
              <h4>Museum Of Science &amp; Industry</h4>
              <a href="#">Details</a>
            </div>
            <!-- END : RELATED PAGES -->
            <!-- BEGIN : RELATED PAGES -->
            <div class="related-pages">
              <img src="/dpm-website/images/manchester-museum-of-transport.jpg" alt="Wide shot of line of histroic buses in manchester" />
              <h4>Museum of Transport</h4>
              <a href="#">Details</a>
            </div>
            <!-- END : RELATED PAGES -->
          </aside>
          <!-- END : ASIDE -->
        </div>
        <!-- END : FLEX CONTAINER -->
      </div>
      <!-- END : ROW -->
    </div>
    <!-- END : CONTAINER -->
  </main>
  <!--******************** MAIN CONTENT : End ********************-->



  <!--******************** LOCATION DETAILS : Start ********************-->
  <section class="location-details">
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
              <p>Gorilla, 54-56 Whitworth Street, Manchester, M1 5WW</p>
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
              <p>0161 407 0301</p>
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
              <p><a href="http://www.thisisgorilla.com">thisisgorilla.com</a></p>
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

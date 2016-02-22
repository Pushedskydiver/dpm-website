<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/dpm-website/includes/";
   $current = 'museum';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- PAGE TITLE -->
  <?php $page_title = 'Manchester Art Gallery | International Student Guide On Manchester | Manchester Metropolitan University';?>

  <!-- META TAGS  -->
  <meta name="description" content="">
  <meta name="keywords" content="Manchester Metropolitan University, student, Manchester, Man Met, MMU, Info Comms, Department of Journalism, Informantion and Communications, Web Development, Web Dev, Information and Communications, Info Comms, Digital Media and Communications, Multimedia Journalusm, Course Info, current student">

  <!--========================================== - HEAD - ==========================================-->
  <?php include_once($path."head.php"); ?>

  <body id="top">

  <!--========================================== - NAV - ==========================================-->
  <?php include_once($path."nav.php"); ?>


  <section class="banner-section">
    <div class="container">
      <div class="row">
        <div class="flex-container col">
          <h1>Manchester Art Gallery</h1>
          <p><i class="fa fa-map-marker"></i> Mosley St, Manchester M2 3JL</p>
        </div>

        <div class="down-arrow">
          <a href="#content" class="animated infinite bounce scroll-to" data-offset-top="50"><i class="fa fa-angle-down"></i></a>
        </div>
      </div>
    </div>
  </section>


  <!--******************** MAIN CONTENT : Start ********************-->
  <main id="content" class="main-content">
    <div class="container">
      <div class="row">
        <div class="flex-container">
          <article class="col">
            <h1>Manchester Art Gallery is a publicly owned art museum in Manchester city centre.</h1>

            <div class="article-img">
              <img src="images/joana-vasconcelos-time-machine.jpg" alt="Wide shot of Joana Vasconcelos Time Machine" />
              <p>Joana Vasconcelos: Time Machine</p>
            </div>

            <p>The Manchester Art Gallery, formerly Manchester City Art Gallery, is a publicly owned art museum on Mosley Street in Manchester city centre that has a collection of more than 25,000 objects. The gallery is easy to get to, by getting off at either Market Street or St. Peter's Square Tram station, or by getting of at Picadilly bus stop and walking through Mosley Street.</p>

            <p>You can explore their collections of fine art, spanning six centuries and including many major modern and contemporary pieces. The museum is most famous for its 19th century British paintings, particularly the collection of Pre-Raphaelite works.</p>

            <p>Manchester Art Gallery is free to enter and open seven days a week. It houses many works of local and international significance, ranging from Joana Vasconcelos: Time Machine (image above), to the recently added Imitation Game which is an exhibition by eight international contemporary artists who explore the theme of machines and the imitation of life. More than half a million people visited the museum in the period of a year, according to figures released in April 2014.</p>

            <div id="map-mac" class="map"></div>

            <div class="review-title">
              <h2>Recent Reviews</h2>
              <a href="https://plus.google.com/+manchesterartgallery/about">More Reviews</a>
            </div>

            <div class="review-box">
              <h3>Neil Dymond-Green <span>A months ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Fantastic range of artworks, particularly the stunning Pre-Raphaelite collection.</p>
            </div>

            <div class="review-box">
              <h3>Mark Scullion <span>2 months ago</span> <i class="fa fa-google-plus"></i></h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Used to come here all the time during dinner time. The gallery offers a wide range pieces of art. I'm hardly into art, but its great to go in and take some time to look about. On the 3rd floor they usually have this 'touch the experiments' I think its labeled. Where kids can dress up, or build colourful towers!</p>
            </div>
          </article>

          <aside class="aside-content col">
            <div class="widget-title">
              <h3><i class="icon-list"><span></span></i> Categories</h3>
            </div>

            <ul class="categories">
              <li>
                <a href="#" class="category-title">Food <i class="fa fa-cutlery"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <li>
                <a href="#" class="category-title">Transport <i class="fa fa-bus"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <li>
                <a href="#" class="category-title">Shopping <i class="fa fa-shopping-basket"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <li class="m-active">
                <a href="#" class="category-title">Museusms &amp; Galleries <i class="fa fa-institution"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>

              <li>
                <a href="#" class="category-title">Nightlife <i class="fa fa-beer"></i></a>
                <div class="category-list">
                  <ul>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </div>
              </li>
            </ul>

            <div class="widget-title">
              <h3><i class="pe-7s-link"></i> Related Pages</h3>
            </div>
            <div class="related-pages">
              <img src="images/manchester-mosi.jpg" alt="Wide shot of the Museuem of Science and Industry" />
              <h4>Museum Of Science &amp; Industry</h4>
              <a href="#">Details</a>
            </div>

            <div class="related-pages">
              <img src="images/manchester-museum-of-transport.jpg" alt="Wide shot of line of histroic buses in manchester" />
              <h4>Museum of Transport</h4>
              <a href="#">Details</a>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>
  <!--******************** MAIN CONTENT : End ********************-->


  <section class="location-details">
    <div class="container">
      <div class="row">
        <div class="flex-container col">
          <div class="detail-body">
            <div class="detail-item">
              <i class="pe-7s-map-marker"></i>
              <h4>Address</h4>
              <p>Manchester Art Gallery, Mosley Street, Manchester, M2 3JL</p>
            </div>
          </div>

          <div class="detail-body">
            <div class="detail-item">
              <i class="pe-7s-call"></i>
              <h4>Phone</h4>
              <p>0161 235 8888</p>
            </div>
          </div>

          <div class="detail-body">
            <div class="detail-item">
              <i class="pe-7s-browser"></i>
              <h4>Website</h4>
              <p><a href="http://manchesterartgallery.org">manchesterartgallery.org</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--========================================== - FOOTER - ==========================================-->
  <?php include_once($path."footer.php"); ?>

  </body>
</html>

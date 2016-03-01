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
          <li><a href="/dpm-website/food/mexican.php">Mexican</a></li>
          <li><a href="/dpm-website/food/chinese.php">Chinese</a></li>
          <li><a href="/dpm-website/food/american.php">American</a></li>
          <li><a href="/dpm-website/food/italian.php">Italian</a></li>
        </ul>
      </div>
    </li>

    <!-- CATEGORY ITEM -->
    <li <?php if($current == 'transport') {echo 'class="m-active"';} ?>>
      <a href="#" class="category-title">Transport <i class="fa fa-bus"></i></a>
      <div class="category-list">
        <ul>
          <li><a href="/dpm-website/transport/bus.php">Bus</a></li>
          <li><a href="/dpm-website/transport/taxi.php">Taxi</a></li>
          <li><a href="/dpm-website/transport/tram.php">Tram</a></li>
        </ul>
      </div>
    </li>

    <!-- CATEGORY ITEM -->
    <li <?php if($current == 'shopping') {echo 'class="m-active"';} ?>>
      <a href="#" class="category-title">Shopping <i class="fa fa-shopping-basket"></i></a>
      <div class="category-list">
        <ul>
          <li><a href="/dpm-website/shopping/arndale.php">Arndale</a></li>
          <li><a href="/dpm-website/shopping/intu-trafford-centre.php">Intu Trafford Centre</a></li>
        </ul>
      </div>
    </li>

    <!-- CATEGORY ITEM -->
    <li <?php if($current == 'museum') {echo 'class="m-active"';} ?> >
      <a href="#" class="category-title">Museusms &amp; Galleries <i class="fa fa-institution"></i></a>
      <div class="category-list">
        <ul>
          <li><a href="/dpm-website/museums/manchester-art-gallery.php">Manchester Art Gallery</a></li>
          <li><a href="/dpm-website/museums/museum-of-science-and-industry.php">Museum Of Science &amp; Industry</a></li>
          <li><a href="/dpm-website/museums/museum-of-transport.php">Museum Of Transport</a></li>
        </ul>
      </div>
    </li>

    <!-- CATEGORY ITEM -->
    <li <?php if($current == 'nightlife') {echo 'class="m-active"';} ?>>
      <a href="#" class="category-title">Nightlife <i class="fa fa-beer"></i></a>
      <div class="category-list">
        <ul>
          <li><a href="/dpm-website/nightlife/gorilla-bar.php">Gorilla Bar</a></li>
          <li><a href="/dpm-website/nightlife/sankeys.php">Sankeys</a></li>
          <li><a href="/dpm-website/nightlife/cloud23.php">Cloud23</a></li>
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

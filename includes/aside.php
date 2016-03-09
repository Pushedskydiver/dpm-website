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
          <li><a href="/dpm-website/food/bar-burrito.php">Bar Burrito</a></li>
          <li><a href="/dpm-website/food/wagamama.php">Wagamama</a></li>
          <li><a href="/dpm-website/food/archies.php">Archie's</a></li>
          <li><a href="/dpm-website/food/bella-italia.php">Bella italia</a></li>
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
    <li <?php if($current == 'museum') {echo 'class="m-active"';} ?>>
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
  <div <?php if($current == 'food' && $page !== 'burrito') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/bar-burrito.jpg" alt="Wide shot of Bar Burrito building" />
    <h4>Bar Burrito</h4>
    <a href="/dpm-website/food/bar-burrito.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'food' && $page !== 'wagamama') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/wagamama.jpg" alt="Wide shot of Wagamama building" />
    <h4>Wagamama</h4>
    <a href="/dpm-website/food/wagamama.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'food' && $page !== 'archies') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/archies.jpg" alt="Wide shot of archies building" />
    <h4>Archie's</h4>
    <a href="/dpm-website/food/archies.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'food' && $page !== 'bella') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/bella-italia.jpg" alt="Wide shot of Bella Italia banner" />
    <h4>Bella Italia</h4>
    <a href="/dpm-website/food/bella-italia.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'transport' && $page !== 'bus') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/bus-banner.jpg" alt="Wide shot of a double decker bus in Manchester" />
    <h4>Bus</h4>
    <a href="/dpm-website/transport/bus.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'transport' && $page !== 'taxi') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/taxi-banner.jpg" alt="Wide shot of a black taxi in Manchester" />
    <h4>Taxi</h4>
    <a href="/dpm-website/transport/taxi.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'transport' && $page !== 'tram') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/tram-banner.jpg" alt="Wide shot of a tram in Manchester" />
    <h4>Tram</h4>
    <a href="/dpm-website/transport/tram.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'shopping' && $page !== 'arndale') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/manchester-arndale.jpg" alt="Wide shot of the Manchester Arndale building" />
    <h4>Arndale Shopping Centre</h4>
    <a href="/dpm-website/shopping/arndale.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'shopping' && $page !== 'intu') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/banners/intu-trafford-centre.jpg" alt="Wide shot of Intu Trafford Centre building" />
    <h4>Intu Trafford Centre</h4>
    <a href="/dpm-website/shopping/intu-trafford-centre.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'museum' && $page !== 'mag') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/manchester-art-gallery.jpg" alt="Wide shot of the Manchester Art Gallery building" />
    <h4>Manchester Art Gallery</h4>
    <a href="/dpm-website/museums/manchester-art-gallery.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'museum' && $page !== 'mosi') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/manchester-mosi.jpg" alt="Wide shot of the Museuem of Science and Industry" />
    <h4>Museum Of Science &amp; Industry</h4>
    <a href="/dpm-website/museums/museum-of-science-and-industry.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
  <!-- BEGIN : RELATED PAGES -->
  <div <?php if($current == 'museum' && $page !== 'mot') {echo 'class="related-pages show-tab"';} ?> class="related-pages">
    <img src="/dpm-website/images/manchester-museum-of-transport.jpg" alt="Wide shot of line of histroic buses in manchester" />
    <h4>Museum of Transport</h4>
    <a href="/dpm-website/museums/museum-of-transport.php">Details</a>
  </div>
  <!-- END : RELATED PAGES -->
</aside>
<!-- END : ASIDE -->

<header class="banner navbar navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://codeforamerica.org/wp-content/uploads/2013/03/flag_tag_inverse.png"></a>
    </div>

    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
<section class="landing-header" style="background-image: url(<?php header_image(); ?>);">
    <div class="landing-text-wrapper">
      <h1>We play with data <span>&amp;</span> deploy civic apps</h1>
      <div class="container">
        <p>Code for Sacramento is a Code for America Brigade. As a Brigade, we are part of a national network of civic-minded volunteers who contribute their skills toward using the web as a platform for local government and community service.</p>
      </div>
      <button class="btn btn-outline btn-lg show-video">What is Civic Hacking?<div class="glyphicon glyphicon-film"></div></button>
      <a href="/how-you-can-help"><button class="btn btn-primary btn-lg how-to-help">How You Can Help<div class="glyphicon glyphicon-user"></div></button></a>
    </div>
</section>
<section class="landing-actions">
    <div class="container">
      <section class="col-lg-6">
        <h3>Code for America</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat, orci ac laoreet cursus, dolor sem luctus lorem, eget consequat magna felis a magna. Aliquam scelerisque condimentum ante, eget facilisis tortor lobortis in. In interdum venenatis justo eget consequat. Morbi commodo rhoncus mi nec pharetra. Aliquam erat volutpat. Mauris non lorem eu dolor hendrerit dapibus</p>
      </section>
        <section class="col-lg-6">
        <h3>Our Projects</h3>
      </section>
    </div>
    <hr>
</section>
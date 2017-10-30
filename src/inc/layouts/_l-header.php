<header class="header">

  <div class="header__top">
    <?php
    if (isset($demo) && $demo) {
      require '../inc/components/_c-site-logo.php';
    } else {
      require 'inc/components/_c-site-logo.php';
    }
    ?>
  </div><!-- /.site-header__top -->

  <div class="header__bottom">
    <?php
    if (isset($demo) && $demo) {
      require '../inc/modules/_m-main-navigation.php';
    } else {
      require 'inc/modules/_m-main-navigation.php';
    }
    ?>
  </div><!-- /.site-header__bottom -->
</header><!-- /.site-header -->

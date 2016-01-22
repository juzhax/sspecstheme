<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<nav class="tab-bar">
  <section class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-small">
    <a class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-toggle menu-icon" href="#"><span></span></a>
  </section>
  <section class="middle tab-bar-section">

    <h1 class="title">
      <?php bloginfo( 'name' ); ?>
    </h1>

  </section>
</nav>

<aside class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-menu" aria-hidden="true">
    <?php foundationpress_mobile_off_canvas( apply_filters('filter_mobile_nav_position', 'mobile_nav_position') ); ?>
</aside>

<!--
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">

      <section class="middle tab-bar-section">
        <h1 class="title">Secret Specs</h1>
      </section>

      <section class="left-small">
        <a class="top-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

    </nav>

    <aside class="top-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Secret Specs</label></li>
        <li><a href="/brand/">Brand</a></li>
        <li><a href="/model/">Model</a></li>
      </ul>
    </aside>

  <a class="exit-off-canvas"></a>

  </div>
</div>
-->
<!--
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">

    <a class="left-off-canvas-toggle" href="#" >Menu</a>


    <aside class="left-off-canvas-menu">

        <ul>
          <li><a href="#">Item 1</a></li>
        ...
        </ul>
    </aside>


    <p>Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>


  <a class="exit-off-canvas"></a>

  </div>
</div>
-->
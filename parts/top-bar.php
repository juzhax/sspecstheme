<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>

<!-- breadcrumbs -->
<?php
$urlArr = parse_url(filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRIPPED));
$path = explode('/', $urlArr['path']);
$crumbString1 = "/".$path[1]."/";
if ($path[2] != "") {
	if ($path[1] == 'model') {
		$crumbString2 = "/brand/".$path[2]."/";	// Redirect /model/<brand name>/ to /brand/<brand name>
	} else {
		$crumbString2 = "/".$path[1]."/".$path[2]."/";
	}
}
if ($path[3] != "") {
	$crumbString3 = "/".$path[1]."/".$path[2]."/".$path[3]."/";
}
if ($path[1]) {
	echo '<div class="row">';
		echo '<div class="small-12 columns">';
				echo '<ul class="breadcrumbs">';
				if ($path[3] != "") {
					echo '<li><a href="/">Home</a></li>';
					echo "<li><a href=$crumbString1>$path[1]</a></li>";
					echo "<li><a href=$crumbString2>$path[2]</a></li>";
					echo "<li class='current'><a href=$crumbString3>$path[3]</a></li>";
				}
				elseif ($path[2] != "") {
					echo '<li><a href="/">Home</a></li>';
					echo "<li><a href=$crumbString1>$path[1]</a></li>";
					echo "<li class='current'><a href=$crumbString2>$path[2]</a></li>";
				}
				else {
					echo '<li><a href="/">Home</a></li>';
					echo "<li class='current'><a href=$crumbString1>$path[1]</a></li>";
				}
				echo '</ul>';
		echo '</div>';
	echo '</div>';
}
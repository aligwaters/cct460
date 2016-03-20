<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Fluffy
 */
?>

<!--This creates a sidebar in the widget area of the WordPress site-->
<div id="secondary" class="widget-area" role="complementary">

<!--This sets the active sidebar-->
<div id="sidebar" class="widget-area side-widget-area" role="complementary">
<?php if( is_active_sidebar('the_sidebar')): ?>
<div class="sidebar1-widgets">
<?php dynamic_sidebar('the_sidebar');?>
</div>
<?php endif; ?>
</div>



<div id="sidebar" class="widget-area side-widget-area" role="complementary">
<?php if( is_active_sidebar('the_sidebar2')): ?>
<div class="sidebar2-widgets">
<?php dynamic_sidebar('the_sidebar2');?>
</div>
<?php endif; ?>
</div>

</div>
</div><!-- #secondary -->
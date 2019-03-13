<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anton_Agency
 */


 $sidebar_value = get_field('sidebar_selector_anton');
 $column_value = '';

 





	if(is_single()){
		echo '<aside class="col-md-3">';
			echo	'<div id="secondary" class="widget-area">';
				 dynamic_sidebar( 'sidebar-1' ); 
			echo	'</div>';
		echo '</aside>';
	}elseif(is_category()){
		echo '<aside class="col-md-3">';
			echo	'<div id="secondary" class="widget-area">';
				dynamic_sidebar( 'sidebar-1' ); 
			echo	'</div>';
		echo '</aside>';
	}else{
		if($sidebar_value != 'no-sidebar'){
			echo '<aside class="col-md-3">';
				echo	'<div id="secondary" class="widget-area">';
					dynamic_sidebar( $sidebar_value ); 
				echo	'</div>';
			echo '</aside>';
		}
	}






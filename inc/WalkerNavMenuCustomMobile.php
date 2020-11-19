<?php
class WalkerNavMenuCustomMobile extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = null ) {


    	$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' );
        $display_depth = ( $depth + 2);
        $classes = array(
            'mob-level-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

	    $output .= "\n" . $indent . '<div class="'. $class_names .'"><ul class="menu-mobile__list">' . "\n";
    }

	function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}

		$output_add_arrow = '';
		$output_add_arrow .= '<div class="back__mobile__list mr-auto ml-auto">
                            <img src="'. get_template_directory_uri() .'/restyle/img/return-back--1.png" width="50px" alt="">
                   </div>';

		$indent  = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$output_add_arrow}{$n}";
	}
	
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );
	    $display_depth = ( $depth + 2);

        $depth_classes = array(
            'menu-mobile__item',
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        if ($args->walker->has_children == '1'){
            $item->classes[] = 'has-submenu';
        }

        //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$output_fill_li =  $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . '">';
	    $output .= $output_fill_li;

	    $link_classes = 'menu-mobile__link';

	    //Оформляем ссылку на меню
        $url = $item->url ? $item->url : $item->guid;

        $attributes  = ! empty( $item->attr_title ) ? ' title="'    . esc_attr( $item->attr_title ) .'"' : '';

	    if ($args->walker->has_children <> '1' ) {
	        $attributes .= ! empty( $item->target )     ? ' target="'   . esc_attr( $item->target     ) .'"' : '';
	        $attributes .= ! empty( $item->xfn )        ? ' rel="'      . esc_attr( $item->xfn        ) .'"' : '';
		    $attributes .= ! empty( $url )              ? ' href="'           . esc_attr( $url        ) .'"' : '';
        }

	    $link_classes_arr = array(
		    $link_classes,
	    );
	    $link_classes_string = esc_attr( implode( ' ', $link_classes_arr ) );

		$sHasChildrenLink = '%1$s<div%2$s class="'.$link_classes_string.'">%3$s%4$s%5$s<img src="'. get_template_directory_uri() .'/restyle/img/arrow-grey.png" height="13px" alt=""></div>%6$s';
        $sHasNotChildrenLink = '%1$s<a%2$s class="'.$link_classes_string.'">%3$s%4$s%5$s </a>%6$s';

        $sLinkString = $args->walker->has_children == '1' ? $sHasChildrenLink : $sHasNotChildrenLink;
        
        $item_output = sprintf( $sLinkString,
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
	        $args->after

        );


	    $item_ = apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        $output .= $item_;
    }
}
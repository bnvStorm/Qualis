<?php
class WalkerNavMenuCustom extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = null ) {


    	$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' );
        $display_depth = ( $depth + 2);
        $classes = array(
            //'sub-menu',
            //( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            //( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'level-' . $display_depth
            //,($display_depth == 1 ? 'pl-0 fs-14 pt-3 pb-5' : '')
            //,($display_depth == 2 ? 'pl-0 fs-14 pt-3 pb-5' : '')
            //,($display_depth == 3 ? 'nav flex-column d-inline-block py-3 ff-Avenir-Next-Cyr fs-14' : '')
            //,($display_depth == 2 ? 'nav flex-column d-inline-block py-3 ff-Avenir-Next-Cyr fs-14' : '')

        );
        $class_names = implode( ' ', $classes );

        if ($display_depth < 3) {
	        $output .= "\n" . $indent . '<div class="'. $class_names .'"><ul class="container">' . "\n";
        }
	    if ($display_depth == 3) {

		    $output .= "\n" . $indent . '<div class="'. $class_names .'"><ul class="wrapper-list container">' . "\n";
        }


    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );
	    $display_depth = ( $depth + 2);

        $depth_classes = array(
            'list-inline-item',
        	//( $depth == 0 ? 'list-inline-item pb-2' : '' ),
        	//( $depth == 1 ? 'list-inline-item' : '' ),
        	//( $depth == 2 ? 'nav-item' : '' ),
            //( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            //( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            //( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            //'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        if ($args->walker->has_children == '1'){
            $item->classes[] = 'has-submenu';
        }

        //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$output_fill_li =  $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . '">';

	    $link_classes = '';
	    if ($depth == 2) {

		    $link_classes = 'wrapper-list__link';

	    }
	    $output .= $output_fill_li;

	    //Оформляем ссылку на меню
        $url = $item->url ? $item->url : $item->guid;

        $attributes  = ! empty( $item->attr_title ) ? ' title="'    . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="'   . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'      . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $url )              ? ' href="'           . esc_attr( $url        ) .'"' : '';
        //$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';



	    $link_classes_arr = array(
		    $link_classes,
		    //'depth-' . $depth,
        	//'args_count-' . ($args->count ? 'x' : $args->count),
        	//'order_menu-' . $item->menu_order,
		    //( $depth == 0 ? 'list-inline-item pb-2' : '' ),
		    //( $depth == 1 ? 'list-inline-item' : '' ),
		    //( $depth == 2 ? 'nav-item' : '' ),
		    //( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
		    //( $depth >=2 ? 'sub-sub-menu-item' : '' ),
		    //( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
		    //'menu-item-depth-' . $depth
	    );
	    $link_classes_string = esc_attr( implode( ' ', $link_classes_arr ) );

	    //$sHasChildrenLink = '%1$s<a%2$s class="'.$link_classes_string.'">%3$s%4$s%5$s</a>%6$s';
	    //$sHasNotChildrenLink = '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s';
	    //$sLinkString = ($depth == 2) ? $sHasNotChildrenLink : $sHasChildrenLink;

	    $sLinkString = '%1$s<a%2$s class="'.$link_classes_string.'">%3$s%4$s%5$s</a>%6$s';
        
        $item_output = sprintf( $sLinkString,
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
	        $args->after
	        //($depth == 2 ? "</a>" : $args->after)

        );


	    $item_ = apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        $output .= $item_;
    }
}
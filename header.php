<?php
/**
 * The header for our theme
*/
class Nav_Walker extends Walker_Nav_Menu {

    /**
     * Unique id for dropdowns
     */
    public $submenu_unique_id = '';

    /**
     * Starts the list before the elements are added.
     * @see Walker::start_lvl()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        if($depth==0){
            $output .= "<ul id=\"$this->submenu_unique_id\" class=\"menu-sub menu-drop\">";
        }
        else{
            $output .= "<ul id=\"$this->submenu_unique_id\" class=\"menu-sub menu-drop\">";
        }

    }

    /**
     * Ends the list of after the elements are added.
     * @see Walker::end_lvl()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        if($depth==0){
            $output .= "$indent</ul>";
        }
        else{
            $output .= "$indent</ul>";
        }

    }

    /**
     * @see Walker::start_el()
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // set active class for current nav menu item
        if( $item->current == 1 ) {
            $classes[] = 'active';
        }

        // set active class for current nav menu item parent
        if( in_array( 'current-menu-parent' ,  $classes ) ) {
            $classes[] = 'active';
        }

        /**
         * Filters the arguments for a single nav menu item.
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        // add a divider in dropdown menus
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li class="divider">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li class="divider">';
        } else {
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );

            //adding col-md-3 class to column
            if( in_array('menu-item-has-children', $classes ) ) {
                if( $depth === 1 ) {                    
                    $class_names = $class_names ? ' class="col-md-3 mega-menucolumn '.esc_attr( $class_names ) . '"' : '';
                } else {
                    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
                }
            }else{
                $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
            }

            $id = apply_filters( 'nav_menu_item_id', 'nav-item-'. $item->ID, $item, $args, $depth );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $class_names .'>';

            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

            if( in_array('menu-item-has-children', $classes ) ) {
                $atts['href']   = ' ';
                $this->submenu_unique_id = 'dropdown-'.$item->ID;
            } else {
                $atts['href']   = ! empty( $item->url ) ? $item->url  : '';
                $atts['class'] = '';
            }

            $atts['class'] .= 'nav-link';

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            if( ! in_array( 'icon-only' , $classes ) ) {

                $title = apply_filters( 'the_title', $item->title, $item->ID );

                $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
            }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';

            // set icon on left side
            if( !empty( $classes ) ) {
                foreach ($classes as $class_name) {
                    if( strpos( $class_name , 'fa' ) !== FALSE ) {
                        $icon_name = explode( '-' , $class_name );
                        if( isset( $icon_name[1] ) && !empty( $icon_name[1] ) ) {
                            $item_output .= '<i class="fa fa-'.$icon_name[1].'" aria-hidden="true"></i> ';
                        }
                    }
                }
            }

            $item_output .= $args->link_before . $title . $args->link_after;

            // if( in_array('menu-item-has-children', $classes) ){
            //     if( $depth == 0 ) {
            //         $item_output .= ' <i class="fa fa-arrow-down" aria-hidden="true"></i>';
            //     }
            // }

            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
     * Ends the element output, if needed.
     *
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
    }

}
$header_section_logo = Kirki::get_option( 'header_section_logo' );
$header_section_phone = Kirki::get_option( 'header_section_phone' );
$header_section_email = Kirki::get_option( 'header_section_email' );
$header_section_login_url = Kirki::get_option( 'header_section_login_url' );
$header_section_app_url = Kirki::get_option( 'header_section_app_url' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!-- HeaderTop -->
	<section class="headerTop bg-gray py-1 border">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 pe-5">
					<div class="contact-info d-flex justify-content-between">
						<div class="phone d-flex align-items-center	">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.6466 12.2207C14.6466 12.4607 14.5933 12.7073 14.4799 12.9473C14.3666 13.1873 14.2199 13.414 14.0266 13.6273C13.6999 13.9873 13.3399 14.2473 12.9333 14.414C12.5333 14.5807 12.0999 14.6673 11.6333 14.6673C10.9533 14.6673 10.2266 14.5073 9.45992 14.1807C8.69325 13.854 7.92659 13.414 7.16659 12.8607C6.39992 12.3007 5.67325 11.6807 4.97992 10.994C4.29325 10.3007 3.67325 9.57398 3.11992 8.81398C2.57325 8.05398 2.13325 7.29398 1.81325 6.54065C1.49325 5.78065 1.33325 5.05398 1.33325 4.36065C1.33325 3.90732 1.41325 3.47398 1.57325 3.07398C1.73325 2.66732 1.98659 2.29398 2.33992 1.96065C2.76659 1.54065 3.23325 1.33398 3.72659 1.33398C3.91325 1.33398 4.09992 1.37398 4.26659 1.45398C4.43992 1.53398 4.59325 1.65398 4.71325 1.82732L6.25992 4.00732C6.37992 4.17398 6.46659 4.32732 6.52659 4.47398C6.58659 4.61398 6.61992 4.75398 6.61992 4.88065C6.61992 5.04065 6.57325 5.20065 6.47992 5.35398C6.39325 5.50732 6.26659 5.66732 6.10659 5.82732L5.59992 6.35398C5.52659 6.42732 5.49325 6.51398 5.49325 6.62065C5.49325 6.67398 5.49992 6.72065 5.51325 6.77398C5.53325 6.82732 5.55325 6.86732 5.56659 6.90732C5.68659 7.12732 5.89325 7.41398 6.18659 7.76065C6.48659 8.10732 6.80659 8.46065 7.15325 8.81398C7.51325 9.16732 7.85992 9.49398 8.21325 9.79398C8.55992 10.0873 8.84659 10.2873 9.07325 10.4073C9.10659 10.4207 9.14659 10.4407 9.19325 10.4607C9.24659 10.4807 9.29992 10.4873 9.35992 10.4873C9.47325 10.4873 9.55992 10.4473 9.63325 10.374L10.1399 9.87398C10.3066 9.70732 10.4666 9.58065 10.6199 9.50065C10.7733 9.40732 10.9266 9.36065 11.0933 9.36065C11.2199 9.36065 11.3533 9.38732 11.4999 9.44732C11.6466 9.50732 11.7999 9.59398 11.9666 9.70732L14.1733 11.274C14.3466 11.394 14.4666 11.534 14.5399 11.7007C14.6066 11.8673 14.6466 12.034 14.6466 12.2207Z" stroke="#D1001F" stroke-width="1.2" stroke-miterlimit="10"/>
								</svg>
							<span class="ms-2 header-top">
								<b>Chiamaci</b> <a class=" fw-normal text-dark" href="tel:<?php echo $header_section_phone; ?>"><?php echo $header_section_phone; ?></a> 
							</span>								
						</div>
						<div class="border"></div>
						<div class="phone d-flex align-items-center	">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.3333 13.6673H4.66659C2.66659 13.6673 1.33325 12.6673 1.33325 10.334V5.66732C1.33325 3.33398 2.66659 2.33398 4.66659 2.33398H11.3333C13.3333 2.33398 14.6666 3.33398 14.6666 5.66732V10.334C14.6666 12.6673 13.3333 13.6673 11.3333 13.6673Z" stroke="#D1001F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.3334 6L9.24674 7.66667C8.56008 8.21333 7.43341 8.21333 6.74674 7.66667L4.66675 6" stroke="#D1001F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								
							<span class="ms-2 header-top">
								<b>Scrivici</b> <a class="fw-normal text-dark" href="<?php echo $header_section_email; ?>"><?php echo $header_section_email; ?></a>
							</span>								
						</div>
					</div>
				</div>
				<div class="col-xl-4 offset-3">
					<div class="contact-info d-flex justify-content-between">
						<div class="phone d-flex align-items-center	">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.6466 12.2207C14.6466 12.4607 14.5933 12.7073 14.4799 12.9473C14.3666 13.1873 14.2199 13.414 14.0266 13.6273C13.6999 13.9873 13.3399 14.2473 12.9333 14.414C12.5333 14.5807 12.0999 14.6673 11.6333 14.6673C10.9533 14.6673 10.2266 14.5073 9.45992 14.1807C8.69325 13.854 7.92659 13.414 7.16659 12.8607C6.39992 12.3007 5.67325 11.6807 4.97992 10.994C4.29325 10.3007 3.67325 9.57398 3.11992 8.81398C2.57325 8.05398 2.13325 7.29398 1.81325 6.54065C1.49325 5.78065 1.33325 5.05398 1.33325 4.36065C1.33325 3.90732 1.41325 3.47398 1.57325 3.07398C1.73325 2.66732 1.98659 2.29398 2.33992 1.96065C2.76659 1.54065 3.23325 1.33398 3.72659 1.33398C3.91325 1.33398 4.09992 1.37398 4.26659 1.45398C4.43992 1.53398 4.59325 1.65398 4.71325 1.82732L6.25992 4.00732C6.37992 4.17398 6.46659 4.32732 6.52659 4.47398C6.58659 4.61398 6.61992 4.75398 6.61992 4.88065C6.61992 5.04065 6.57325 5.20065 6.47992 5.35398C6.39325 5.50732 6.26659 5.66732 6.10659 5.82732L5.59992 6.35398C5.52659 6.42732 5.49325 6.51398 5.49325 6.62065C5.49325 6.67398 5.49992 6.72065 5.51325 6.77398C5.53325 6.82732 5.55325 6.86732 5.56659 6.90732C5.68659 7.12732 5.89325 7.41398 6.18659 7.76065C6.48659 8.10732 6.80659 8.46065 7.15325 8.81398C7.51325 9.16732 7.85992 9.49398 8.21325 9.79398C8.55992 10.0873 8.84659 10.2873 9.07325 10.4073C9.10659 10.4207 9.14659 10.4407 9.19325 10.4607C9.24659 10.4807 9.29992 10.4873 9.35992 10.4873C9.47325 10.4873 9.55992 10.4473 9.63325 10.374L10.1399 9.87398C10.3066 9.70732 10.4666 9.58065 10.6199 9.50065C10.7733 9.40732 10.9266 9.36065 11.0933 9.36065C11.2199 9.36065 11.3533 9.38732 11.4999 9.44732C11.6466 9.50732 11.7999 9.59398 11.9666 9.70732L14.1733 11.274C14.3466 11.394 14.4666 11.534 14.5399 11.7007C14.6066 11.8673 14.6466 12.034 14.6466 12.2207Z" stroke="#D1001F" stroke-width="1.2" stroke-miterlimit="10"/>
								</svg>
							<span class="ms-2 header-top">
								<b><a href="<?php echo $header_section_login_url; ?>">Login</a></b> 
							</span>								
						</div>
						<div class="border"></div>
						<div class="phone d-flex align-items-center	">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.3333 13.6673H4.66659C2.66659 13.6673 1.33325 12.6673 1.33325 10.334V5.66732C1.33325 3.33398 2.66659 2.33398 4.66659 2.33398H11.3333C13.3333 2.33398 14.6666 3.33398 14.6666 5.66732V10.334C14.6666 12.6673 13.3333 13.6673 11.3333 13.6673Z" stroke="#D1001F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.3334 6L9.24674 7.66667C8.56008 8.21333 7.43341 8.21333 6.74674 7.66667L4.66675 6" stroke="#D1001F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								
							<span class="ms-2 header-top">
								<a href="<?php echo $header_section_app_url; ?>"><b>Download </b><span class="fw-normal text-dark">our APP</span></a>
							</span>								
						</div>
						<div class="border"></div>
						<div class="headerTop-select">
							<select class="form-select bg-transparent border-0 fs-6 fw-bold text-gray-dark is-radius-8  py-0" >
									<option selected="0"> ITA </option>
									<option value="1">USA</option>
									<option value="2">US</option>
								</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- HeaderTop -->

	<!-- Header -->
	<header class="header-s1 is-sticky is-shrink">
		<div class="header-main">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<!-- Logo  -->
					<div class="col-md-2 col-6">
						<div class="header-logo">
							<a href="<?php home_url()?>">
							<?php if(!empty($header_section_logo)){ ?>
								<img src="<?php echo $header_section_logo; ?>" alt="Mappix">
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(  ) .'/assets/images/logo.png' ?>" alt="Mappix">
							<?php } ?>
							</a>
						</div>
					</div>
					<div class="col-md-10 col-6">
						<!-- Menu Toogle -->
						<div class="header-nav-toggle text-end">
							<a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
								<div class="toggle-line">
									<span></span>
								</div>
							</a>
						</div>
						<!-- Menu Toogle -->
						<div class="header-navbar">
							<nav class="header-menu d-flex align-items-center" id="header-menu">
								<?php
									$args = array(
										'theme_location' => 'primary-menu',
										'container' => 'ul',
										'menu_class' => 'menu',
										'walker' => new Nav_Walker()
									);
									wp_nav_menu( $args );
								?>
								<div class="search-wrapper">
									<button class="search-icon">
										<i class="fas fa-search"></i>
									</button>
									<div class="search-field">
										<?php get_search_form( ); ?>
									</div>
								</div>
							</nav>
						</div>
						<!-- .header-navbar -->
					</div>
					<!-- ./col -->
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
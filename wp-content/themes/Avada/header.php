<!DOCTYPE html>
<html xmlns="http<?php echo (is_ssl())? 's' : ''; ?>://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>
	<?php
	if ( defined('WPSEO_VERSION') ) {
		wp_title('');
	} else {
		bloginfo('name'); ?> <?php wp_title(' - ', true, 'left');
	}
	?>
	</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
	<?php global $smof_data, $woocommerce; ?>

	<!--[if lte IE 8]>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
	<![endif]-->

	<?php
	if(is_page('header-2')) {
		$smof_data['header_right_content'] = 'Social Links';
		if($smof_data['scheme_type'] == 'Dark') {
			$smof_data['header_top_bg_color'] = '#29292a';
			$smof_data['snav_color'] = '#ffffff';
			$smof_data['header_top_first_border_color'] = '#3e3e3e';
		} else {
			$smof_data['header_top_bg_color'] = '#ffffff';
			$smof_data['snav_color'] = '#747474';
			$smof_data['header_top_first_border_color'] = '#efefef';
		}
	} elseif(is_page('header-3')) {
		$smof_data['header_right_content'] = 'Social Links';
		if($smof_data['scheme_type'] == 'Dark') {
			$smof_data['snav_color'] = '#747474';
			$smof_data['snav_color'] = '#bebdbd';
		} else {
			$smof_data['snav_color'] = '#ffffff';
			$smof_data['header_social_links_icon_color'] = '#ffffff';
		}
	} elseif(is_page('header-4')) {
		$smof_data['header_left_content'] = 'Social Links';
		if($smof_data['scheme_type'] == 'Dark') {
			$smof_data['snav_color'] = '#747474';
			$smof_data['snav_color'] = '#bebdbd';
		} else {
			$smof_data['snav_color'] = '#ffffff';
			$smof_data['header_social_links_icon_color'] = '#ffffff';
		}
		$smof_data['header_right_content'] = 'Navigation';
	} elseif(is_page('header-5')) {
		$smof_data['header_right_content'] = 'Social Links';
		if($smof_data['scheme_type'] == 'Dark') {
			$smof_data['snav_color'] = '#747474';
			$smof_data['snav_color'] = '#bebdbd';
		} else {
			$smof_data['snav_color'] = '#ffffff';
			$smof_data['header_social_links_icon_color'] = '#ffffff';
		}		
	}
	?>

	<?php $isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	if($smof_data['responsive']):
	if(!$isiPad || !$smof_data['ipad_potrait']):
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<?php endif; endif; ?>

	<?php if($smof_data['favicon']): ?>
	<link rel="shortcut icon" href="<?php echo $smof_data['favicon']; ?>" type="image/x-icon" />
	<?php endif; ?>

	<?php if($smof_data['iphone_icon']): ?>
	<!-- For iPhone -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo $smof_data['iphone_icon']; ?>">
	<?php endif; ?>

	<?php if($smof_data['iphone_icon_retina']): ?>
	<!-- For iPhone 4 Retina display -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $smof_data['iphone_icon_retina']; ?>">
	<?php endif; ?>

	<?php if($smof_data['ipad_icon']): ?>
	<!-- For iPad -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $smof_data['ipad_icon']; ?>">
	<?php endif; ?>

	<?php if($smof_data['ipad_icon_retina']): ?>
	<!-- For iPad Retina display -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $smof_data['ipad_icon_retina']; ?>">
	<?php endif; ?>

	<?php wp_head(); ?>

	<?php
	$object_id = get_queried_object_id();
	if((get_option('show_on_front') && get_option('page_for_posts') && is_home()) ||
	    (get_option('page_for_posts') && is_archive() && !is_post_type_archive()) && !(is_tax('product_cat') || is_tax('product_tag')) || (get_option('page_for_posts') && is_search())) {
		$c_pageID = get_option('page_for_posts');
	} else {
		if(isset($object_id)) {
			$c_pageID = $object_id;
		}

		if(class_exists('Woocommerce')) {
			if(is_shop() || is_tax('product_cat') || is_tax('product_tag')) {
				$c_pageID = get_option('woocommerce_shop_page_id');
			}
		}
	}
	?>

	<!--[if lte IE 8]>
	<script type="text/javascript">
	jQuery(document).ready(function() {
	var imgs, i, w;
	var imgs = document.getElementsByTagName( 'img' );
	for( i = 0; i < imgs.length; i++ ) {
	    w = imgs[i].getAttribute( 'width' );
	    imgs[i].removeAttribute( 'width' );
	    imgs[i].removeAttribute( 'height' );
	}
	});
	</script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/excanvas.js"></script>
	
	<![endif]-->
	
	<!--[if lte IE 9]>
	<script type="text/javascript">
	jQuery(document).ready(function() {
	
	// Combine inline styles for body tag
	jQuery('body').each( function() {	
		var combined_styles = '<style>';

		jQuery( this ).find( 'style' ).each( function() {
			combined_styles += jQuery(this).html();
			jQuery(this).remove();
		});

		combined_styles += '</style>';

		jQuery( this ).prepend( combined_styles );
	});
	});
	</script>
	<![endif]-->
	
	<script type="text/javascript">
	/*@cc_on
		@if (@_jscript_version == 10)
	    	document.write('<style type="text/css">.search input,#searchform input {padding-left:10px;} .avada-select-parent .avada-select-arrow,.select-arrow{height:33px;<?php if($smof_data['form_bg_color']): ?>background-color:<?php echo $smof_data['form_bg_color']; ?>;<?php endif; ?>}.search input{padding-left:5px;}header .tagline{margin-top:3px;}.star-rating span:before {letter-spacing: 0;}.avada-select-parent .avada-select-arrow,.gravity-select-parent .select-arrow,.wpcf7-select-parent .select-arrow,.select-arrow{background: #fff;}.star-rating{width: 5.2em;}.star-rating span:before {letter-spacing: 0.1em;}</style>');
		@end
	@*/

	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
	</script>

	

	<?php if($smof_data['google_body'] && $smof_data['google_body'] != 'Select Font'): ?>
	<?php $gfont[urlencode($smof_data['google_body'])] = '"' . urlencode($smof_data['google_body']) . ':400,400italic,700,700italic:latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese"'; ?>
	<?php endif; ?>

	<?php if($smof_data['google_nav'] && $smof_data['google_nav'] != 'Select Font' && $smof_data['google_nav'] != $smof_data['google_body']): ?>
	<?php $gfont[urlencode($smof_data['google_nav'])] = '"' . urlencode($smof_data['google_nav']) . ':400,400italic,700,700italic:latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese"'; ?>
	<?php endif; ?>

	<?php if($smof_data['google_headings'] && $smof_data['google_headings'] != 'Select Font' && $smof_data['google_headings'] != $smof_data['google_body'] && $smof_data['google_headings'] != $smof_data['google_nav']): ?>
	<?php $gfont[urlencode($smof_data['google_headings'])] = '"' . urlencode($smof_data['google_headings']) . ':400,400italic,700,700italic:latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese"'; ?>
	<?php endif; ?>

	<?php if($smof_data['google_footer_headings'] && $smof_data['google_footer_headings'] != 'Select Font' && $smof_data['google_footer_headings'] != $smof_data['google_body'] && $smof_data['google_footer_headings'] != $smof_data['google_nav'] && $smof_data['google_footer_headings'] != $smof_data['google_headings']): ?>
	<?php $gfont[urlencode($smof_data['google_footer_headings'])] = '"' . urlencode($smof_data['google_footer_headings']) . ':400,400italic,700,700italic:latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese"'; ?>
	<?php endif; ?>

	<?php if(isset( $gfont ) && $gfont): ?>
	<?php
	if(is_array($gfont) && !empty($gfont)) {
		$gfonts = implode($gfont, ', ');
	}
	?>
	<?php endif; ?>
	<script type="text/javascript">
	WebFontConfig = {
		<?php if(!empty($gfonts)): ?>google: { families: [ <?php echo $gfonts; ?> ] },<?php endif; ?>
		<?php if( ! $smof_data['status_fontawesome'] ): ?>custom: { families: ['FontAwesome'],
				  urls: 	['<?php bloginfo('template_directory'); ?>/fonts/fontawesome/font-awesome.css']
				}<?php endif; ?>
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();
	</script>
	
	<?php echo $smof_data['google_analytics']; ?>

	<?php echo $smof_data['space_head']; ?>
</head>
<?php
$body_classes = array();
$wrapper_class = '';
if( is_page_template('blank.php') ) {
	$body_classes[] = 'body_blank';
	$wrapper_class = 'wrapper_blank';
}
if( ! $smof_data['header_sticky_tablet'] ) {
	$body_classes[] = 'no-tablet-sticky-header';
}
if( ! $smof_data['header_sticky_mobile'] ) {
	$body_classes[] = 'no-mobile-sticky-header';
}
if( $smof_data['mobile_slidingbar_widgets'] ) {
	$body_classes[] = 'no-mobile-slidingbar';
}
if( $smof_data['status_totop'] ) {
	$body_classes[] = 'no-totop';
}
if( ! $smof_data['status_totop_mobile'] ) {
	$body_classes[] = 'no-mobile-totop';
}
if( $smof_data['layout'] == 'Boxed' || get_post_meta($c_pageID, 'pyre_page_bg_layout', true) == 'boxed' ) {
	$body_classes[] = 'layout-boxed-mode';
}
?>
<body <?php body_class( $body_classes ); ?> data-spy="scroll">
	<div id="wrapper" class="<?php echo $wrapper_class; ?>">
	<?php if( $smof_data['slidingbar_widgets'] && ! is_page_template( 'blank.php' ) ): ?>
	<?php get_template_part( 'slidingbar' ); ?>
	<?php endif; ?>
	<?php
	get_template_part( 'framework/templates/header' );
	avada_header_template( 'Below' );
	?>
	<div id="sliders-container">
	<?php
	if( is_search() ) {
		$slider_page_id = '';
	}
	if( ! is_search() ) {
		// Layer Slider
		$slider_page_id = '';
		if ( ! is_home() && ! is_front_page() && ! is_archive() && isset( $object_id ) ) {
			$slider_page_id = $object_id;
		}
		if ( ! is_home() && is_front_page() && isset( $object_id ) ) {
			$slider_page_id = $object_id;
		}
		if ( is_home() && ! is_front_page() ) {
			$slider_page_id = get_option( 'page_for_posts' );
		}
		if ( class_exists( 'Woocommerce' ) ) {
			if ( is_shop() ) {
				$slider_page_id = get_option( 'woocommerce_shop_page_id' );
			}
		}
		avada_slider( $slider_page_id );
	}
	?>
	</div>
	<?php if(get_post_meta($slider_page_id, 'pyre_fallback', true)): ?>
		<div id="fallback-slide">
			<img src="<?php echo get_post_meta($slider_page_id, 'pyre_fallback', true); ?>" alt="" />
		</div>
	<?php endif; ?>
	<?php
	if( !is_page_template('Homepage.php') ):
		avada_header_template( 'Above' );	
		avada_current_page_title_bar( $c_pageID );
	endif;
	?>
	<?php if(is_page_template('contact.php') && $smof_data['recaptcha_public'] && $smof_data['recaptcha_private']): ?>
	<script type="text/javascript">
	 var RecaptchaOptions = {
	    theme : '<?php echo $smof_data['recaptcha_color_scheme']; ?>'
	 };
 	</script>
 	<?php endif; ?>
	<?php if(is_page_template('contact.php') && $smof_data['gmap_address'] && !$smof_data['status_gmap']): ?>
	<?php
	if( ! $smof_data['map_popup'] ) {
		$map_popup = 'yes';
	} else {
		$map_popup = 'no';
	}
	if( ! $smof_data['map_scrollwheel'] ) {
		$map_scrollwheel = 'yes';
	} else {
		$map_scrollwheel = 'no';
	}
	if( ! $smof_data['map_scale'] ) {
		$map_scale = 'yes';
	} else {
		$map_scale = 'no';
	}
	if( ! $smof_data['map_zoomcontrol'] ) {
		$map_zoomcontrol = 'yes';
	} else {
		$map_zoomcontrol = 'no';
	}
	if( ! $smof_data['map_pin'] ) {
		$address_pin = 'yes';
	} else {
		$address_pin = 'no';
	}
	echo do_shortcode('[avada_map address="' . $smof_data['gmap_address'] . '" type="' . $smof_data['gmap_type'] . '" address_pin="' . $address_pin . '" map_style="' . $smof_data['map_styling'] . '" overlay_color="' . $smof_data['map_overlay_color'] . '" infobox="' . $smof_data['map_infobox_styling'] . '" infobox_background_color="' . $smof_data['map_infobox_bg_color'] . '" infobox_text_color="' . $smof_data['map_infobox_text_color'] . '" infobox_content="' . $smof_data['map_infobox_content'] . '" icon="' . $smof_data['map_custom_marker_icon'] . '" width="' . $smof_data['gmap_width'] . '" height="' . $smof_data['gmap_height'] . '" zoom="' . $smof_data['map_zoom_level'] . '" scrollwheel="' . $map_scrollwheel . '" scale="' . $map_scale . '" zoom_pancontrol="' . $map_zoomcontrol . '" popup="' . $map_popup . '"][/avada_map]');
	?>
	<?php endif; ?>
	<?php if(is_page_template('contact-2.php') && $smof_data['gmap_address'] && !$smof_data['status_gmap']): ?>
	<?php
	if( $smof_data['map_popup'] ) {
		$map_popup = 'yes';
	} else {
		$map_popup = 'no';
	}
	if( ! $smof_data['map_scrollwheel'] ) {
		$map_scrollwheel = 'yes';
	} else {
		$map_scrollwheel = 'no';
	}
	if( ! $smof_data['map_scale'] ) {
		$map_scale = 'yes';
	} else {
		$map_scale = 'no';
	}
	if( ! $smof_data['map_zoomcontrol'] ) {
		$map_zoomcontrol = 'yes';
	} else {
		$map_zoomcontrol = 'no';
	}
	echo do_shortcode('[avada_map address="' . $smof_data['gmap_address'] . '" type="' . $smof_data['gmap_type'] . '" map_style="' . $smof_data['map_styling'] . '" overlay_color="' . $smof_data['map_overlay_color'] . '" infobox="' . $smof_data['map_infobox_styling'] . '" infobox_background_color="' . $smof_data['map_infobox_bg_color'] . '" infobox_text_color="' . $smof_data['map_infobox_text_color'] . '" infobox_content="' . $smof_data['map_infobox_content'] . '" icon="' . $smof_data['map_custom_marker_icon'] . '" width="' . $smof_data['gmap_width'] . '" height="' . $smof_data['gmap_height'] . '" zoom="' . $smof_data['map_zoom_level'] . '" scrollwheel="' . $map_scrollwheel . '" scale="' . $map_scale . '" zoom_pancontrol="' . $map_zoomcontrol . '" popup="' . $map_popup . '"][/avada_map]');
	?>
	<?php endif; ?>
	<?php
	$main_css = '';
	$row_css = '';
	$main_class = '';
	$page_template = '';

	if (is_woocommerce()) {
		$custom_fields = get_post_custom_values('_wp_page_template', $c_pageID);
		if(is_array($custom_fields) && !empty($custom_fields)) {
			$page_template = $custom_fields[0];
		} else {
			$page_template = '';
		}
	}

	if(is_page_template('100-width.php') || is_page_template('blank.php') ||get_post_meta($slider_page_id, 'pyre_portfolio_width_100', true) == 'yes' || $page_template == '100-width.php') {
		$main_css = 'padding-left:0px;padding-right:0px;';
		if($smof_data['hundredp_padding'] && !get_post_meta($c_pageID, 'pyre_hundredp_padding', true)) {
			$main_css = 'padding-left:'.$smof_data['hundredp_padding'].';padding-right:'.$smof_data['hundredp_padding'];
		}
		if(get_post_meta($c_pageID, 'pyre_hundredp_padding', true)) {
			$main_css = 'padding-left:'.get_post_meta($c_pageID, 'pyre_hundredp_padding', true).';padding-right:'.get_post_meta($c_pageID, 'pyre_hundredp_padding', true);
		}
		$row_css = 'max-width:100%;';
		$main_class = 'width-100';
	}
	?>
	<?php
	if( is_page_template('Homepage.php') ):
	?>
	<!--
	<div class="avada-row">
		
		<div class="box-custom  fusion-reading-box-container reading-box-container-1 fusion-animated fadeInUp" data-animationtype="fadeInUp" data-animationduration="1" style="visibility: visible; -webkit-animation-duration: 1s; animation-duration: 1s;">
			<div class="reading-box" >
				<a class="button red fusion-button button-default button-round fusion-button-xlarge button-xlarge button-flat continue continue-right" 
				style="-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;" href="<?php echo get_permalink(35); ?>" target="_blank">
					<span>Contact Us</span>
				</a>
				<h2 data-fontsize="18" data-lineheight="27">Need help deciding on your idea?</h2>
				<div class="reading-box-description">Contact us righ now.</div>
			</div>
		</div>					
	</div>
	-->
	<div class="avada-row" >
		<h2 class="box-header" style="  padding: 55px 10px 45px;">OUR PRODUCTION</h2>
		<div style="  padding: 0 10%;text-align:center;font-size: 16px;">
			With Swedish management and with our strong engineering team we develop products to meet your quality and price requirements
		</div>
		<div class="fusion-clearfix"></div>
		<div class="fusion-column col col-lg-5 col-md-5 col-sm-5 " style="margin: 50px 0;">
			<div class="img_box_circle">
				<img width="480" height="480" src="/fine-interior/wp-content/uploads/2015/06/cooperate.jpg" class="vc_single_image-img attachment-large-thumb" alt="image_10" style="display: block;">
			</div>	
		</div>
		<div class="fusion-column col col-lg-7 col-md-7 col-sm-7 " style="margin: 50px 0;  padding-left: 50px;">
			<div class="wpb_wrapper home-feature" >
				<div class="feature-item sl-small-helmet">
					<h3>We produce to your specification</h3>
					
				</div>
				<div class="feature-item sl-small-roller page-margin-top">
					<h3>We get seriously involved in your design and product development</h3>
					
				</div>
				<div class="feature-item sl-small-driller page-margin-top">
					<h3>We develop product to meet your quality and price requirements</h3>
					
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div id="main" class="clearfix <?php echo $main_class; ?>" style="<?php echo $main_css; ?>">
		<div class="avada-row" style="<?php echo $row_css; ?>">
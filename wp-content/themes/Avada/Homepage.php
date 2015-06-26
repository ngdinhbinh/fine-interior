<?php
// Template Name: Home Page
get_header(); ?>

	<h2 class="box-header">WE SPECIALIZE IN…</h2>
	<p style="  padding: 0 10%;text-align:center;"><?php 
		$term = get_term_by('slug', 'we-specialize-in', 'category' );
		echo $term->description;
		$args = array(
			'posts_per_page'   => -1,
			'offset'           => 0,
			'category_name'    => 'we-specialize-in',
			'orderby'          => 'title',
			'order'            => 'ASC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		); 
		$posts = get_posts( $args);
		$specialize_in = array();
		foreach($posts as $post){
			$specialize_in[] = $post->post_title  ;
			
		}
		//echo implode(", ", $specialize_in).".";
	?></p>
	<div class="fusion-columns row fusion-columns-3 columns columns-3 home_service" style="margin: 60px 0;">
		<?php 
			$i = 1;
			foreach($posts as $post){
				if($i > 3) break;
				setup_postdata( $post ); 
				
				$thumbnail = get_post_meta($post->ID, '_thumbnail_id', false );
				?>
				<div class="fusion-one-third one_third fusion-layout-column fusion-spacing-yes <?php echo $i == 3 ? "fusion-column-last " :""; ?>" style="margin-top:0px;margin-bottom:20px;">
					<div class="fusion-column-wrapper">
						<div class="imageframe-align-center">
							<span class="fusion-imageframe imageframe-none imageframe-1 fusion-animated fadeInUp" data-animationtype="fadeInUp" data-animationduration="1" style="visibility: visible; -webkit-animation-duration: 1s; animation-duration: 1s;">
								<a href="<?php echo the_permalink(); ?>" class="fusion-lightbox" data-rel="iLightbox[558c327bd250f]" data-title="feature3"> 
									<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
								</a>
							</span>
						</div>
						<div class="fusion-sep-clear"></div>
						<div class="fusion-separator fusion-full-width-sep sep-none" style="border-color:#e0dede;margin-left: auto;margin-right: auto;margin-top:18px;"></div>
						<h3 data-fontsize="18" data-lineheight="27" class="box-header"><?php the_title(); ?></h3>
						<div style="text-align:center;  padding: 0 15px; "><?php echo the_content(''); ?></div>
					</div>
				</div>
				<?php
				$i = $i + 1;
			}
			wp_reset_postdata();
		?>
	</div>
	<div class="textbox-center">
		<a title="WE SPECIALIZE IN…" href="<?php $category_id = get_cat_ID( 'we-specialize-in' ); echo get_category_link(21); ?>" class="button red ">View All</a>
	</div>
</div></div>
<div class="avada-row" >
	<h2 class="box-header" style="  padding: 55px 10px 45px;">ABOUT US</h2>
	<div style="  padding: 0 10%;text-align:center;">
		With Swedish management and with our strong engineering team we develop products to meet your quality and price requirements
	</div>
	<div class="fusion-clearfix"></div>
	<div class="fusion-column col col-lg-5 col-md-5 col-sm-5 " style="margin: 50px 0;">
		<div class="img_box_circle">
			<img width="480" height="480" src="http://quanticalabs.com/wptest/renovate/files/2015/05/image_10-480x480.jpg" class="vc_single_image-img attachment-large-thumb" alt="image_10" style="display: block;">
		</div>	
	</div>
	<div class="fusion-column col col-lg-7 col-md-7 col-sm-7 " style="margin: 50px 0;  padding-left: 50px;">
		<div class="wpb_wrapper" >
			<div class="feature-item sl-small-helmet">
				<h3>We produce to your specification</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="feature-item sl-small-roller page-margin-top">
				<h3>We get seriously involved in your design and product development</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="feature-item sl-small-driller page-margin-top">
				<h3>We develop product to meet your quality and price requirements</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
		</div>
	</div>
</div>
<div class="avada-row" >
	<h2 class="box-header" style="  padding: 55px 10px 45px;">OUR PRODUCT</h2>
	<div style="  padding: 0 10%;text-align:center;">
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	</div>
	<?php
		$args = array(
			'posts_per_page'   => -1,
			'offset'           => 0,
			'category_name'    => 'we-specialize-in',
			'orderby'          => 'title',
			'order'            => 'ASC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		); 
		$posts = get_posts( $args);
	?>
	
</div>
<div class="main-content" style="padding:0">
	<div class="fusion-columns row fusion-columns-4 columns columns-4 home_product" style="margin: 60px 0;">
		<?php 
			$i = 1;
			foreach($posts as $post){
				if($i > 4) break;
				setup_postdata( $post ); 
				
				$thumbnail = get_post_meta($post->ID, '_thumbnail_id', false );
				?>
				<div class="fusion-one-fourth one_fourth fusion-layout-column fusion-spacing-yes  <?php echo $i == 4 ? "fusion-column-last " :""; ?>" style="margin-top:0px;margin-bottom:20px;">
					<div class="fusion-column-wrapper align-center">
						<div class="imageframe-align-center">
							<span class="fusion-imageframe imageframe-none imageframe-1 fusion-animated fadeInUp" 
							data-animationtype="fadeInUp" data-animationduration="1" style="  width: 100%;visibility: visible; -webkit-animation-duration: 1s; animation-duration: 1s;">
								<a href="<?php echo the_permalink(); ?>" class="fusion-lightbox" > 
									<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
								</a>
							</span>
							<div class="view align-center">
								<div class="vertical-align-table">
									<div class="vertical-align-cell"><p class="description"><?php the_title(); ?></p>
									<a class="more simple" href="<?php echo the_permalink(); ?>" title="View Product">View Product</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				$i = $i + 1;
			}
			wp_reset_postdata();
		?>
	</div>
	<div style="text-align:center;   padding-bottom: 50px;">
		<h3 style="display: inline-block;  margin-right: 40px;">EXPLORE OUR PRODUCTS</h3>
		<a title="VIEW ALL PRODUCT" href="http://localhost/fine-interior/category/we-specialize-in/" class="button red ">View All Products</a>
	</div>
</div>
<div class="main-content" style="background-color: #F68220; padding: 25px 0;  color: #fff;  font-family: 'Raleway';font-size: 16px;">
	<div class="avada-row">
		<div class="fusion-one-third one_third fusion-layout-column fusion-spacing-yes home-info home-phone" >
			<div class="fusion-column-wrapper" style="  margin-top: 18px;">
				
					<span>Phone:</span><br />
					<span> +84 650 652650</span>
				
			</div>
		</div>
		<div class="fusion-one-third one_third fusion-layout-column fusion-spacing-yes home-info home-address" >
			<div class="fusion-column-wrapper">
				
					<span>Address:</span><br />
					<span>Street DT747B, Khanh Binh Ward, Tan Uyen District, Binh Duong Province, Vietnam</span>
				
			</div>
		</div>
		<div class="fusion-one-third one_third fusion-layout-column fusion-spacing-yes fusion-column-last home-info home-email" >
			<div class="fusion-column-wrapper" style="  margin-top: 18px;">
				
					<span>Email:</span><br />
					<span>johan@fine-Interior.com.vn</span>
				
			</div>
		</div>
	</div>
</div>
<?php echo do_shortcode('[avada_map address="' . $smof_data['gmap_address'] . '" type="' . $smof_data['gmap_type'] . '" map_style="' . $smof_data['map_styling'] . '" overlay_color="' . $smof_data['map_overlay_color'] . '" infobox="' . $smof_data['map_infobox_styling'] . '" infobox_background_color="' . $smof_data['map_infobox_bg_color'] . '" infobox_text_color="' . $smof_data['map_infobox_text_color'] . '" infobox_content="' . $smof_data['map_infobox_content'] . '" icon="' . $smof_data['map_custom_marker_icon'] . '" width="' . $smof_data['gmap_width'] . '" height="' . $smof_data['gmap_height'] . '" zoom="' . $smof_data['map_zoom_level'] . '" scrollwheel="' . $map_scrollwheel . '" scale="' . $map_scale . '" zoom_pancontrol="' . $map_zoomcontrol . '" popup="' . $map_popup . '"][/avada_map]'); ?>
<?php get_footer(); ?>
<?php
// Template Name: Home Page
get_header(); ?>

	<h2 class="box-header">WHAT  DO WE SPECIALIZE IN ?</h2>
	<?php 
	$args = array(
		'type'                     => 'product',
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'name',
		'order'                    => 'ASC',
		'hide_empty'               => 1,
		'hierarchical'             => 1,
		'exclude'                  => 1,
		'include'                  => '',
		'number'                   => '',
		'taxonomy'                 => 'product_category',
		'pad_counts'               => false 
	); 
	
	$categories = get_terms( 'product_category' );
	$array_categories = array();
	foreach($categories as $category){
		$array_categories[] = 	$category->term_taxonomy_id ;	
	}
	?>
	<p style="  padding: 0 10%;text-align:center;">Shop fittings, modular retail shelving, shop display equipment, workshop fittings, workshop storage equipment, storage systems, furniture, furniture components</p>
	<div class="fusion-columns row fusion-columns-3 columns columns-3 home_service" style="margin: 60px 0;">
		<?php 
			$i = 1;
			
			foreach($categories as $category){
				if ( $i> 3) break;
				?>
				<div class="fusion-one-third one_third fusion-layout-column fusion-spacing-yes <?php echo $i == 3 ? "fusion-column-last " :""; ?>" style="margin-top:0px;margin-bottom:20px;">
					<div class="fusion-column-wrapper">
						<div class="imageframe-align-center">
							<span class="fusion-imageframe imageframe-none imageframe-1 fusion-animated fadeInUp" data-animationtype="fadeInUp" data-animationduration="1" style="visibility: visible; -webkit-animation-duration: 1s; animation-duration: 1s;">
								<a href="<?php  echo get_term_link( $category );  ?>" class="container_image fusion-lightbox" data-rel="iLightbox[558c327bd250f]" data-title="feature3"> 
									<img src="<?php echo z_taxonomy_image_url($category->term_id) ?>" />
								</a>
							</span>
						</div>
						<div class="fusion-sep-clear"></div>
						<div class="fusion-separator fusion-full-width-sep sep-none" style="border-color:#e0dede;margin-left: auto;margin-right: auto;margin-top:18px;"></div>
						<h3 data-fontsize="18" data-lineheight="27" class="box-header"><?php echo $category->name; ?></h3>
						<div style="text-align:center;  padding: 0 15px; "><?php echo $category->description; ?></div>
					</div>
				</div>
				<?php
				$i = $i + 1;
			}
			
		?>
	</div>
	<div class="textbox-center">
		<a title="WE SPECIALIZE IN…" href="<?php $category_id = get_cat_ID( 'we-specialize-in' ); echo get_category_link(21); ?>" class="button red ">VIEW ALL OUR SPECIALIZE</a>
	</div>
</div></div><!-- end: main -->

<div class="avada-row" >
	<h2 class="box-header" style="  padding: 55px 10px 45px;">OUR PRODUCT</h2>
	<div style="  padding: 0 10%;text-align:center;">
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	</div>
	<?php
		$query_args = array(
							'posts_per_page' => 4, 
							'no_found_rows' => 1, 
							'post_status' => 'publish', 
							'post_type' => 'product',
							'orderby' => 'title',
							'order'   => 'DESC',
							);
		$the_query = new WP_Query($query_args);
	?>
</div>
<div class="main-content" style="padding:0">
	<div class="fusion-columns row fusion-columns-4 columns columns-4 home_product" style="margin: 60px 0;">
		<?php 
			$i = 1;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				
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
		<h3 class="explore-our-product" >EXPLORE OUR PRODUCTS</h3>
		<a title="VIEW ALL PRODUCT" href="<?php echo home_url('all-products/'); ?>" class="button red ">VIEW ALL PRODUCTS</a>
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
<?php 
$map_address= "DT747B, Khánh Bình, Tân Uyên,  Bình Dương, Việt nam";
$map_zoom_level = 10;
$gmap_height = 515;
echo do_shortcode('[avada_map address="' . $map_address . '" 
					type="' . $smof_data['gmap_type'] . '" 
					map_style="' . $smof_data['map_styling'] . '" 
					overlay_color="' . $smof_data['map_overlay_color'] . '" 
					infobox="' . $smof_data['map_infobox_styling'] . '" 
					infobox_background_color="' . $smof_data['map_infobox_bg_color'] . '" 
					infobox_text_color="' . $smof_data['map_infobox_text_color'] . '" 
					infobox_content="' . $smof_data['map_infobox_content'] . '" 
					icon="' . $smof_data['map_custom_marker_icon'] . '" 
					width="' . $smof_data['gmap_width'] . '" 
					height="' . $gmap_height . '" 
					zoom="' . $map_zoom_level . '" 
					scrollwheel="' . $map_scrollwheel . '" 
					scale="' . $map_scale . '" 
					zoom_pancontrol="' . $map_zoomcontrol . '" 
					popup="' . $map_popup . '"][/avada_map]'); ?>
<?php get_footer(); ?>
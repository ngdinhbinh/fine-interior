<?php
// Template Name: All Posts
get_header(); ?>
	<div id="content" class="full-width">
		<div class="fusion-columns row fusion-columns-3 columns columns-3 home_service" style="margin: 60px 0;">
			<?php 
				$args = array(
					'type'                     => 'post',
					'child_of'                 => 0,
					'parent'                   => '',
					'orderby'                  => 'name',
					'order'                    => 'ASC',
					'hide_empty'               => 1,
					'hierarchical'             => 1,
					'exclude'                  => 1,
					'include'                  => '',
					'number'                   => '',
					'taxonomy'                 => 'category',
					'pad_counts'               => false 
				); 
				$categories = get_categories( $args );
				$array_categories = array();
				foreach($categories as $category){
					$array_categories[] = 	$category->term_taxonomy_id ;	
				}
				wp_reset_postdata();
				$query_args = array( 
							'category__and' => $array_categories,  
							'posts_per_page' => -1, 
							'no_found_rows' => 1, 
							'post_status' => 'publish', 
							'post_type' => 'post',
							'orderby' => 'title',
							'order'   => 'DESC',
							);
				$the_query = new WP_Query($query_args);
				$i = 1;
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$thumbnail = get_post_meta($post->ID, '_thumbnail_id', false );
					?>
					<div class="fusion-one-third one_third fusion-layout-column fusion-spacing-yes <?php echo $i % 3 == 0 ? "fusion-column-last " :""; ?>" style="margin-top:0px;margin-bottom:20px;">
						<div class="fusion-column-wrapper">
							<div class="imageframe-align-center">
								<span class="fusion-imageframe imageframe-none imageframe-1 fusion-animated fadeInUp" data-animationtype="fadeInUp" data-animationduration="1" style="visibility: visible; -webkit-animation-duration: 1s; animation-duration: 1s;">
									<a href="<?php echo the_permalink(); ?>" class="container_image fusion-lightbox" data-rel="iLightbox[558c327bd250f]" data-title="feature3"> 
										<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
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
	</div>
<?php get_footer(); ?>
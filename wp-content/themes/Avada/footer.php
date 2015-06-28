		</div>
	</div>
	<?php global $smof_data, $social_icons; ?>
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
	<?php if(!is_page_template('blank.php')): ?>
	<?php if( ($smof_data['footer_widgets'] && get_post_meta($c_pageID, 'pyre_display_footer', true) != 'no') ||
			  ( ! $smof_data['footer_widgets'] && get_post_meta($c_pageID, 'pyre_display_footer', true) == 'yes') ): ?>
	<footer class="footer-area">
		<div class="avada-row">
			<section class="fusion-columns row fusion-columns-<?php echo $smof_data['footer_widgets_columns']; ?> columns columns-<?php echo $smof_data['footer_widgets_columns']; ?>">
				<?php $column_width = 12 / $smof_data['footer_widgets_columns']; ?>
				<article class="fusion-column col <?php echo sprintf( 'col-lg-%s col-md-%s col-sm-%s', $column_width, $column_width, $column_width ); ?>">
					<div id="categories-4" class="footer-widget-col widget_categories"><h3>Production</h3>		
						<ul>
							<li class="cat-item cat-item-1"><a >We produce to your specification</a>
							</li>
							<li class="cat-item cat-item-21"><a >We get seriously involved in your design and product development</a>
							</li>
							<li class="cat-item cat-item-2"><a>We develop product to meet your quality and price requirements</a>
							</li>
						</ul>
					<div style="clear:both;"></div></div>
				</article>				
				<article class="fusion-column col last <?php echo sprintf( 'col-lg-%s col-md-%s col-sm-%s', $column_width, $column_width, $column_width ); ?>">
					<div id="tag_cloud-2" class="footer-widget-col widget_tag_cloud">
						<h3><a href="<?php $category_id =  get_category_by_slug( 'we-specialize-in' ); echo get_category_link( $category_id->term_id );  ?>">We specialize in…</a></h3>
						<div class="tagcloud">
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
								foreach($posts as $post){
									setup_postdata( $post );
									?>
									<a href="<?php echo the_permalink(); ?>" class="tag-link-19" title="1 topic" style="font-size: 8pt;"><?php the_title(); ?></a>
									<?php
								}
								wp_reset_postdata();
							?>
						</div>
						<div style="clear:both;"></div>
					</div>
				</article>
				<article class="fusion-column col <?php echo sprintf( 'col-lg-%s col-md-%s col-sm-%s', $column_width, $column_width, $column_width ); ?>">
					<div id="tag_cloud-2" class="footer-widget-col widget_tag_cloud">
						<h3><a href="<?php $category_id =  get_category_by_slug( 'we-specialize-in' ); echo get_category_link( $category_id->term_id );  ?>">Our Products</a></h3>
						<div class="tagcloud">
							<?php 
								$args = array(
									'posts_per_page'   => -1,
									'offset'           => 0,
									'category_name'    => 'we-work-in',
									'orderby'          => 'title',
									'order'            => 'ASC',
									'post_type'        => 'post',
									'post_status'      => 'publish',
									'suppress_filters' => true 
								); 
								$posts = get_posts( $args);
								foreach($posts as $post){
									setup_postdata( $post );
									?>
									<a href="<?php echo the_permalink(); ?>" class="tag-link-19" title="1 topic" style="font-size: 8pt;"><?php the_title(); ?></a>
									<?php
								}
								wp_reset_postdata();
							?>
						</div>
						<div style="clear:both;"></div>
					</div>
				</article>
				
				<article class="fusion-column col <?php echo sprintf( 'col-lg-%s col-md-%s col-sm-%s', $column_width, $column_width, $column_width ); ?> ">
				<div id="contact_info-widget-2" class="footer-widget-col contact_info"><h3>Contact Info</h3>		
					<div class="contact-info-container">
						<p class="address">Street DT747B, Khanh Binh Ward, Tan Uyen District, Binh Duong Province, Vietnam </p>
			
						<p class="phone">Phone: +84 650 652650</p>
						<p class="fax">Fax: +84 650 652651</p>
						<p class="email">Email: <a href="mailto:johan@fine-Interior.com.vn">johan@fine-Interior.com.vn</a></p>
			
					</div>
					<div style="clear:both;"></div>
				</div>
				</article>
				
				<div class="fusion-clearfix"></div>
			</section>
		</div>
	</footer>
	<?php endif; ?>
	<?php if( ($smof_data['footer_copyright'] && get_post_meta($c_pageID, 'pyre_display_copyright', true) != 'no') ||
			  ( ! $smof_data['footer_copyright'] && get_post_meta($c_pageID, 'pyre_display_copyright', true) == 'yes') ): ?>
	<footer id="footer">
		<div class="avada-row">
			<div class="copyright-area-content">
				<div class="copyright">
					<div>Copyright 2015 Fine Interior | All Rights Reserved </div>
					
				</div>
			</div>
		</div>
	</footer>
	<?php endif; ?>
	<?php endif; ?>
	</div><!-- wrapper -->
	<?php //include_once('style_selector.php'); ?>
	
	<!-- W3TC-include-js-head -->

	<?php wp_footer(); ?>

	<?php echo $smof_data['space_body']; ?>

	<!--[if lte IE 8]>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/respond.js"></script>
	<![endif]-->
</body>
</html>
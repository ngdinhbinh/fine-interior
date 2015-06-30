<?php
// Template Name: All Product Categories
get_header();

	$sidebar_exists = true;
	$container_class = '';
	$post_class = '';
	$content_class = '';

	$content_css = 'float:left;';
	$sidebar_css = 'float:right;';
	
	$post_class = 'grid-post';
	$container_class = sprintf( 'grid-layout grid-layout-%s',2 );
	
	?>
	<div id="content" class="<?php echo $content_class; ?>" style="<?php echo $content_css; ?>">
		<ul class="fusion-filters clearfix" style="display: block;">
			<?php
				$categories = get_terms( 'product_category' );
				$array_categories = array();
				foreach($categories as $category){
					$array_categories[] = 	$category->term_taxonomy_id ;	
				?>
					<li><a href="<?php  echo get_term_link( $category ); ?>"  title="<?php echo $category->name;?>"><?php echo $category->name;?></a></li>
				<?php
				}
			?>
		</ul>
		
		<div id="posts-container" class="<?php echo $container_class; ?> clearfix">
			<?php foreach($categories as $category): ?>
			<div id="post-168" class="post grid-post align-right clearfix post-168 product type-product status-publish format-standard has-post-thumbnail hentry product_category-furniture product_category-furniture-components isotope-item" >
				<div class="fusion-flexslider flexslider post-slideshow">
					<ul class="slides">
						<li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
							<div class="image" aria-haspopup="true">
								<img  src="<?php echo z_taxonomy_image_url($category->term_id) ?>" class="attachment-full wp-post-image" alt="plastic_59  (1)" draggable="false">																
								<div class="image-extras">
									<div class="image-extras-content">
										<a style="display:inline-block;" class="icon link-icon" href="<?php  echo get_term_link( $category );  ?>">explore this category</a>
										<a style="display:inline-block;" class="icon gallery-icon" href="<?php echo z_taxonomy_image_url($category->term_id) ?>" rel="prettyPhoto[gallery168]" title="">
											<img style="display:none;" alt="" draggable="false">Gallery</a>
										<h3><a   href="<?php  echo get_term_link( $category );  ?>"><?php 
											echo '<span style="text-transform:uppercase;">'.$category->name.'</span>' ;
											echo  " (" ;
											echo $category->count;
											echo $category->count > 1 ? " products)" : " product)"; ?></a></h3>
										<h4><?php echo $category->description; ?></h4>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php themefusion_pagination($pages = '', $range = 2); ?>
	</div>
	<?php if( $sidebar_exists == true ): ?>
	<?php wp_reset_query(); ?>
	<div id="sidebar" style="<?php echo $sidebar_css; ?>">
	<?php dynamic_sidebar('avada-slidingbar-widget-1'); ?>
	</div>
	<?php endif; ?>
<?php get_footer(); ?>
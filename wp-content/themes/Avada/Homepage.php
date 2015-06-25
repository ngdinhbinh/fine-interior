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
				<div class="fusion-column col col-lg-4 col-md-4 col-sm-4 ">
					<a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
					</a>
					<h3 class="box-header"><a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<div style="text-align:center;  padding: 0 15px; "><?php echo the_content(''); ?></div>
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
<div class="avada-row" style="<?php echo $row_css; ?>">
	<h2 class="box-header" style="  padding: 55px 10px 45px;">ABOUT US</h2>
</div>
<?php get_footer(); ?>
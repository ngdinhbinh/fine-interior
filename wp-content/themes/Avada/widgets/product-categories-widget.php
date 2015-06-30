<?php
add_action('widgets_init', 'product_categories_widgets');

function product_categories_widgets()
{
	register_widget('Product_Categories_Widget');
}

class Product_Categories_Widget extends WP_Widget {

	function Product_Categories_Widget()
	{
		$widget_ops = array('classname' => 'product_categories', 'description' => 'Show all categories of Products.');

		$control_ops = array('id_base' => 'product_categories-widget');

		$this->WP_Widget('product_categories-widget', 'Avada: Product Categories', $widget_ops, $control_ops);
	}

	function widget($args, $instance)
	{
		global $smof_data, $post;

		extract($args);

		$title = $instance['title'];
		

		echo $before_widget;
		$_product_categories = get_terms( 'product_category' );
		?>
		<div id="categories-product" class="widget widget_categories">
			<div class="heading"><h3 ><?php echo $title; ?></h3></div>
			<ul>
				<?php
					$i =1;
					foreach ( $_product_categories as $category ) {
						
						?>
						<li class="cat-item cat-item-'<?php echo $i; ?>' "><a href="<?php  echo get_term_link( $category );  ?>"><?php echo $category->name . " (".$category->count.")"; ?></a></li>
						<?php $i = $i + 1;
					}
				?>
				
			</ul>
		</div>
		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = $new_instance['title'];
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('posts' => 3, 'comments' => '3', 'tags' => 20, 'show_popular_posts' => 'on', 'show_recent_posts' => 'on', 'show_comments' => 'on', 'show_tags' =>  'on', 'orderby' => 'Highest Comments');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		
	<?php }
}
?>
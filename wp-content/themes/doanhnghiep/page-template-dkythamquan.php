<?php 

/*

Template Name: page-template-dkythamquan

*/

get_header(); 

?>	

<div class="page-wrapper">
	<div class="g_content">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="img_category_single" style="background:url('<?php echo $image[0]; ?>">
				<div class="single_post_info">
									<h2><?php the_title(); ?></h2>
									<p><?php the_time('d/m/Y');?> 
										| <?php if(get_locale()=='vi'){echo 'Lượt xem';}else{echo 'View';} ?> : <?php echo wpb_get_post_views(get_the_ID()); ?>
									</p>
								</div>
		</div>
		<div class="container">
			<?php if(get_locale() == 'vi'){ echo do_shortcode('[contact-form-7 id="98" title="Đăng ký tham quan"]');}
				  else{echo do_shortcode('[contact-form-7 id="99" title="Registration Visitors"]');}
			 ?>
		</div><!-- container -->
	</div>
</div>

<?php get_footer(); ?>


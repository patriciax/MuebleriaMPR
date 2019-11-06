<?php get_header(); ?>
<?php  get_template_part('partials/nav'); ?>
<h1 class="title-product">
<?php the_title(); ?></h1>
<div class="container">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%;">

  <div class="container" style="color: white;"><p><?php the_excerpt(); ?>  </p></div> 
 
</div>
<?php get_footer(); ?>
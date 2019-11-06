<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header container">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<div class="container">
<div class="row">
        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>

                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#"><?php the_title(); ?></a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                        class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a>
                    29</span>
                </div>
                <p class="mb-4"><?php the_content(); ?>.</p>
                <div>
                  <a href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>" class="btn btn-black mr-1 rounded-0">Agregar al carrito</a>
                  <a href="<?php the_permalink() ?>" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>
          </div>
		  <?php endwhile; ?>
		  
</div>

</div>

<?php
get_footer( 'shop' );
?>
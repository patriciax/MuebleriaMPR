<?php
get_header();
?>
<?php  get_template_part('partials/nav'); ?>
<section class="shop-section space-s">
  <?php if (have_posts()): ?>
    
  <div style="display: flex; align-items: center; justify-content: center;">
    
       <h1 style="color: white;">Results for:  <?php echo get_search_query(); ?>
        </h1>
  </div>
        <div class="container">
            <div class="row">
             

                 <?php  while ( have_posts() ) : the_post(); global $product; ?>
                   
                <div class="col-lg-3 col-sm-6 animated wow fadeInLeft" data-wow-duration="3s">
                <a href="<?php the_permalink() ?>">
                    <div class="shop-item">
                        <div class="mask-shop"></div>
                        <!-- <i class='bx bxs-show'></i> -->
                        <?php the_post_thumbnail('medium'); ?>

                        <div class="content-doll add-card">
                            <p class="mr-auto"><?php the_title(); ?></p>
                         <div class="price-firts">
                         <p class="ml-auto"><?php echo $product->get_price_html(); ?></p>
                         </div>
                            <!-- <span>158 cm</span> -->
                        </div>

                    </div>
                    </a>
                </div>
            
                
                  <?php endwhile; else: ?>

                   <div style="display: flex; align-items: center; justify-content: center;">
    
       <h1 style="color: white;">Not Results for:  <?php echo get_search_query(); ?>
        </h1>
  </div>
<?php endif; ?>
              
            </div>

        </div>
    </section>


<?php
get_footer();
?>
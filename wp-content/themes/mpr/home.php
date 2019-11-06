  <?php get_header(); ?>

    
  <?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 1); ?>   
<?php $loop = new WP_Query( $args ); ?>
 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" data-aos="fade"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

            <div class="row mb-4">
              <div class="col-md-7">
                <h1><?php the_title(); ?></h1>
                <p class="mb-5 lead"> <?php the_content(); ?></p>
                <div>
                  <a href="#"
                    class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Comprar
                    Ahora</a>
                  <a href="#" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">Ir a tienda</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>



    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Productos populares</h3>
            <h2 class="section-title mb-3">Nuestros productos</h2>

          </div>
        </div>
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
          <!-- <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_0006.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Lorem ipsum asmet</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                        class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist active"><a href="#" class="mr-2"><span class="icon-heart"></span></a>
                    29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Agregar al carrito</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_0003.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Lorem ipsum asmet</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                        class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a>
                    29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Agregar al carrito</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_0007.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Lorem ipsum asmet</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                        class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a>
                    29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Agregar al carrito</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_0009.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Lorem ipsum asmet</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                        class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a>
                    29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Agregar al carrito</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_0010.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Lorem ipsum asmet</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span
                        class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a>
                    29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Agregar al carrito</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>
          </div> -->


        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay get-notification"
      style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_9999.JPG); background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <h2>Diseños Muebles.</h2>
            <!-- <div class="d-flex mb-4">
              <input type="text" class="form-control rounded-0" placeholder="Enter your email address">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="Subscribe">
            </div> -->
            <p>muebles de madera de diseños exclusivos, pensados en satisfacer necesidades de nuestros clientes</p>
          </form>
        </div>

      </div>
    </div>






    <div class="site-section bg-light">


      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Asombrosos diseños</h3>
            <h2 class="section-title mb-3">Muebles Destacados</h2>
          </div>
        </div>
        <?php $i = 0; ?>
            <?php $args = array( 'post_type' => 'product','featured' , 'posts_per_page' => 2); ?>
            <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <?php if( $i %2==0  ) : ?>
        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            
        
          
          <div class="col-md-6 mb-5 mb-md-0">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
            </div>

          

            <div class="col-md-5 ml-auto product-title-wrap">
              <span class="number">01.</span>
              <h3 class="text-black mb-4 font-weight-bold"><?php the_title(); ?></h3>
              <p class="mb-4"><?php the_content(); ?></p>

              <div class="mb-4">
                <h3 class="text-black font-weight-bold h5">Precio:</h3>
                <div class="price"><?php echo $product->get_price_html(); ?></div>
              </div>
              <p>
                <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver
                  Detalle</a>
                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block"> Agregar al carrito</a>
              </p>
            </div>
          </div>
      
        </div>
        <?php else :  ?>
        <div class="bg-white py-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
              <span class="number">02.</span>
              <h3 class="text-black mb-4 font-weight-bold"><?php the_title(); ?></h3>
              </h3>
              <p class="mb-4"><?php the_content(); ?></p>

              <div class="mb-4">
                <h3 class="text-black font-weight-bold h5">Precio:</h3>
                <div class="price"><?php echo $product->get_price_html(); ?></div>
              </div>
              <p>
                <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver
                  Detalle</a>
                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block"> Agregar al carrito</a>
              </p>
            </div>
          </div>
        </div>
        <?php endif; ?> 
          <?php $i++; ?>   
        <?php endwhile; ?>
      </div>
     
    </div>


    <div class="site-section" id="about-section">
    
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/productos/IMG_0071.JPG" class="img-fluid" alt="Image">
            <div class="experience">
              <span class="year">MUEBLES mpr
              </span>
              <span class="caption">Desde XXX años</span>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title">Diseño muebles</h3>
            <h2 class="section-title mb-3">Sobre Nosotros</h2>
            <p class="mb-4">MUEBLES mpr empresa dedicada a fabricar muebles de madera de diseños exclusivos,
              pensados en satisfacer necesidades de nuestros clientes.</p>
            <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Ir a tienda</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Opinion de personas</h3>
            <h2 class="section-title mb-3">Opiniones</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
        <div>
          <div class="testimonial">
            <figure class="mb-4 d-block align-items-center justify-content-center">
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/person.png" alt="Image" class="w-100 img-fluid mb-3"></div>
            </figure>
            <blockquote class="mb-3">
              <p>&ldquo;LA CALIDAD Y BUENAS TERMINACIONES DE SUS MODELOS Y LO OTRO PIENSAN EN TODO TIENEN TODO DE
                ACUERDO AL CLIENTE PEQUENÑOS ,MEDIANOS,,Y GRANDES ,POR CALIDAD Y E.T.C. EXELENTE ATENCION ..&rdquo;</p>
            </blockquote>
            <p class="text-black"><strong>Hilda Gutierrez</strong></p>


          </div>
        </div>
        <div>
          <div class="testimonial">

            <figure class="mb-4 d-block align-items-center justify-content-center">
              <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/person.png" alt="Image" class="w-100 img-fluid mb-3"></div>
            </figure>

            <blockquote class="mb-3">
              <p>&ldquo;Recomendable!.&rdquo;</p>
            </blockquote>

            <p class="text-black"><strong>Darma Diversiones</strong></p>


          </div>
        </div>
      </div>
    </div>

    <!--     

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Blog</h3>
            <h2 class="section-title mb-3">Blog Posts</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/model_1_bg.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#" class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/product_1_bg.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#" class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/model_5_bg.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#" class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </div> -->




    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Hablanos</h3>
            <h2 class="section-title mb-3">Contactanos</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            <div action="#" class="p-5 bg-white">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
              <!-- <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">

                  <input type="text" id="fname" class="form-control rounded-0" placeholder="Nombre">
                </div>
                <div class="col-md-6">

                  <input type="text" id="lname" class="form-control rounded-0" placeholder="Apellido">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <input type="email" id="email" class="form-control rounded-0" placeholder="Correo electronico">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0"
                    placeholder="Escribe tu mensaje aqui."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
              </div> -->


            </di>
          </div>

        </div>

      </div>
    </div>

  
  <?php get_footer(); ?>
 
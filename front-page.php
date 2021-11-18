
<?php get_header(); ?>
    
<main>

    <section class="hero-banner py-5 text-center  ">
        <div class="hero-content row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
            
            <p class="lead ">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#album" class="btn btn-primary my-2">Read Blog</a>
               
            </p>
            </div>
        </div>
    </section>

    <div id="album" class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-3  g-2">
         
            <?php 
            
            if(have_posts()){
                 $args = [
                        'numberposts'      => 9,
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                    ];
                    $posts = get_posts( $args );
                // while( have_posts() ){ 
                   
                    //$posts;
                // the_post();
                foreach ($posts as $post){?>

                
                 
                 
           
           <div class="col post-col">
                <div class="card shadow-sm">
            
                <img  src=<?php  the_post_thumbnail_url(); ?>>

                <div class="card-body">
                    <p class="card-text"><?php echo the_title(); ?></p>
                    <small><?php echo get_the_date() ;?></small>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                       <a href="<?php echo the_permalink(); ?>" class="btn btn-sm btn-success">Read</a>
                    </div>
                    <small class="text-muted"></small>
                    </div>
                </div>
                </div>
                </div>
                <!-- end of Col -->
               
                
          <?php  }
        }?>

           


            </div>
            <div class="d-flex justify-content-center">
                <button class="btn-load-down"><i class="fas fa-angle-double-down fa-2x bounce"></i></button>
                <button class="btn-load-up"><i class="fas fa-angle-double-up fa-2x bounce"></i></button>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
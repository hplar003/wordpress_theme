<?php

get_header();
?>

<?php
    if(have_posts()){
        while(have_posts()){ 
           the_post(); ?>


<div class="jumbotron p-3  text-dark rounded ">
   <img width="100%" height="500px" src=" <?php  the_post_thumbnail_url('large');   ?> " alt="">

</div>

<div class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
         

          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
            <?php 
                // the_tags('<span class="tag"><i class="fas fa-tags"></i>','</span><span class="tag"><i class="fas fa-tags">','</span>')
                the_tags();
            ?> </br>
            <small class="comments"><a href="#comments" class="text-decoration-none"><i class="fas fa-comment"></i>
            <?php comments_number(); ?></a></small>
          

            <p><?php the_content();  ?></p>
            <hr>
            
            
          </div><!-- /.blog-post -->

         

      </div><!-- /.row -->

        </div><!-- /.container -->

 <?php   }
    }

?>


</div>

<?php  comments_template() ?>

<?php get_footer(); ?>
<?php get_header() ; ?>

<section class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog">
                      <div class="blog-meta">
                          <h2 class="blog-meta-title"><?php the_title() ; ?></h2>
                      </div> <!-- .blog-meta -->
                      <div class="blog-content">
                          <?php the_content() ; ?>
                      </div> <!-- .blog-excerpt -->
                      <div class="blog-hr">
                          <hr>
                      </div> <!-- .blog-hr -->
    </article> <!-- .blog -->
                <?php endwhile; else : ?> <!-- while ends here of post loop and else starts -->
                     <article class="blog">
	                      <p><?php _e( 'Sorry, no posts found yo can always start writing' ); ?></p>
	                 </article> <!-- .blog -->
	            <?php endif; ?> <!-- if ends here post loop -->      
            </div> <!-- .col-sm-8 -->
            <div class="col-sm-4">
                <?php get_sidebar() ; ?>
            </div> <!-- .col-sm-4 -->
        </div> <!-- .row -->
</section> <!-- .container -->

<?php get_footer() ; ?>
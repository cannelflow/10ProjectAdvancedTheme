<?php get_header() ; ?>

<section class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()) ; ?>
                <?php endwhile; else : ?> <!-- while ends here of post loop and else starts -->
                     <article class="blog">
	                      <p><?php _e( 'Sorry, no posts found yo can always start writing' ); ?></p>
	                 </article> <!-- .blog -->
	            <?php endif; ?> <!-- if ends here post loop -->
	            <div class="comment">
	                <?php comments_template() ?>
	            </div>
            </div> <!-- .col-sm-8 -->
            <div class="col-sm-4">
                <?php get_sidebar() ; ?>
            </div> <!-- .col-sm-4 -->
        </div> <!-- .row -->
</section> <!-- .container -->

<?php get_footer() ; ?>
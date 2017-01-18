<?php get_header() ; ?>

<section class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="page-header">
		           <?php
		        if(is_category()){
		          single_cat_title();
		        } else if(is_author()){
		          the_post();
		          echo 'Archives By Author: ' .get_the_author();
		          rewind_posts();
		        } else if(is_tag()){
		          single_tag_title();
		        } else if(is_day()){
		          echo 'Archives By Day: ' .get_the_date();
		        } else if(is_month()){
		          echo 'Archives By Month: ' .get_the_date('F Y');
		        } else if(is_year()){
		          echo 'Archives By Year: ' .get_the_date('Y');
		        } else {
		          echo 'Archives';
		        }
		      ?>
		        </h1>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   <?php get_template_part('content', get_post_format()) ; ?>
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
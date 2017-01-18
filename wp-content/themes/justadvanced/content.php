<?php if(is_search() || is_archive()) : ?>
    <article class="blog">
                      <div class="blog-meta">
                          <h2 class="blog-meta-title"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2>
                            <p class="blog-meta-detail">
                              Posted by <?php the_author_posts_link(); ?> 
                              on <?php the_time('F j, Y'); ?>
                              Category <?php if(has_category()) {
                                        the_category(', ');
                                      } else {
                                       echo("No Category Found!!");
                                        }
                              ?>
                              <?php if(has_tag()) {
                                        the_tags();
                                      } else {
                                       echo("No Tags Found!!");
                                        }
                              ?>
                            </p>
                      </div> <!-- .blog-meta -->
                      <div class="blog-excerpt">
                          <?php the_excerpt() ; ?>
                      </div> <!-- .blog-excerpt -->
                      <div class="blog-more">
                           <a class="btn btn-primary" href="<?php the_permalink() ; ?>">Read More</a>
                      </div> <!-- .blog-more -->
                      <div class="blog-hr">
                          <hr>
                      </div> <!-- .blog-hr -->
    </article> <!-- .blog -->
<?php else : ?>
<article class="blog">
                      <div class="blog-meta">
                          <h2 class="blog-meta-title"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2>
                            <p class="blog-meta-detail">
                              Posted by <?php the_author_posts_link(); ?> 
                              on <?php the_time('F j, Y'); ?>
                              Category <?php if(has_category()) {
                                        the_category(', ');
                                      } else {
                                       echo("No Category Found!!");
                                        }
                              ?>
                              <?php if(has_tag()) {
                                        the_tags();
                                      } else {
                                       echo("No Tags Found!!");
                                        }
                              ?>
                            </p>
                      </div> <!-- .blog-meta -->
                <?php if ( has_post_thumbnail() ) : ?>
                      <div class="blog-img">
                         <?php the_post_thumbnail('full',array(
                                'class' => 'img-responsive',
                            )); ?>
                        </div> <!-- .blog-img -->
                <?php endif ; ?> <!-- if ends here of thumbnail -->
                <?php if(is_single()) : ?>
		               <div class="blog-content">
		                 <?php the_content(); ?>
		               </div>
	              <?php else : ?>
		               <div class="blog-excerpt">
		                 <?php the_excerpt(); ?>
		               </div>
		               <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
	                 <?php endif; ?>
</article> <!-- .blog -->
<?php endif; ?>
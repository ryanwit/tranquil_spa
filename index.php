<?php

/*
  * the main template file
*/

?>
 
 <?php get_header() ?>

 <main class="container-fluid py-5">
      <div class="row">
        <div class="col-sm-8">
        <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>

          <div>
            <a href="<?php the_permalink(); ?>">
              <h2> <?php the_title(); ?></h2>
            </a>
            <p> <?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
            <div class="pb-2">
              <i class="fas fa-tags"></i>
          <p class="d-inline"><?php the_tags('Tagged: ', ' ~ '); ?></p> <!--keeps p elements in line-->
            </div>
              <p><?php the_excerpt() ?></p>
              <div class="mb-3">
                <a href="<?php the_permalink(); ?>">
                  <?php _e('Read more...') ?>
                </a>
              </div>
            </div>
          <?php endwhile; else: ?>
          <nav>
            <ul class="nav">
              <li>Next Page</li> &nbsp; <!--non breaking space-->
              <li>Previous Page</li>
            </ul>
          </nav>
        </div>
        <aside class="col-sm-4">
          <div class="py-3">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">
              Welcome to the official Tranquil Spa blog.
              Here you will find all the latest news and what's going on here at the spa.
              <br>
            </p>
          </div>
          <div class="py-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0"> <!--list unstyled - removes the default list style and the left margin on out list items - removing the 1. 2. 3 and the indent  -->
              <li><a href="">June 2019</a></li>
              <li><a href="">Aug 2019</a></li>
              <li><a href="">Sept 2019</a></li>
            </ol> 
          </div>
          <div class="py-3">
            <h4 class="font-italic">Categories</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="">News</a></li>
              <li><a href="">Offers</a></li>
            </ol>
          </div>
          <div class="py-3">
            <h4 class="font-italic">Follow Us</h4>
            <i class="fab fa-facebook-square fa-2x"></i> <!--font awesome black - icon - 2 times the normal size  -->
            <i class="fab fa-twitter-square fa-2x"></i> <!--font awesome black - icon - 2 times the normal size  -->
            <i class="fab fa-instagram fa-2x"></i> <!--font awesome black - icon - 2 times the normal size  -->
            <i class="fab fa-pinterest-square fa-2x"></i> <!--font awesome black - icon - 2 times the normal size  -->
          </div>
        </aside>
      </div> <!--closing row -->
    </main> <!--closing container -->

 
      
    
    
    <p><?php _e('Sorry, no posts matched your criteria'); ?></p>
 
    <?php
    endif;
 
 ?>

<!--FOOTER SECTION -->
    
<?php get_footer() ?>
   
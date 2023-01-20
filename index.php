<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package human_appeal
 */

get_header();
?>


    <!-- post page styleing now -->
    <section class="post-page">
        <div class="container">
            <div class="row">
            	<?php while(have_posts()) : the_post(); ?>
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
                        </div>
                        <div class="post-info">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(get_the_content(), 20, null) ?></p>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                </div>
           		<?php endwhile; ?>
            </div>
            <div class="row">
            	  <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li><a href="#"><i class="fa-sharp fa-solid fa-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa-sharp fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post page styleing End now -->
    
  <?php get_footer(); ?>
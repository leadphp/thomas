<?php
/**
 * Template Name: pressrelease
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();


?>

<?php if( !is_null( get_the_post_thumbnail_url() )&& !empty( get_the_post_thumbnail_url() ) ){?>
        <section class="contact-banner" style='background:url("<?php echo get_the_post_thumbnail_url();?>")'>
            <div class="container">
                <div class="banner-text">
                    <h3><?php echo get_the_title(); ?></h3>
                </div>
            </div>
        </section>
    <?php } else{ ?> <section class="contact-banner">
            <div class="container">
                <div class="banner-text">
              <h3>
                 <?php  echo get_the_title();   ?>
             </h3>
                </div>
            </div>
        </section>'
    
  <!--  -->
   <?php     
    } ?>


<?php

$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'Press Release')); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    	<?php the_post_thumbnail(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
       <?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?>
         
    <?php  the_time(); endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>





   <?php

get_footer();


?>
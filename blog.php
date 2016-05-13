<?php
/**
** Template Name: Blog
**
** @package WordPress
** @subpackage iglu-design
** @since 
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>
<body <?php body_class(); ?>>

<?php

$args = array( 'post_type' => 'blog_post', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="blogpost">
    <h2><?php the_title(); ?></h2>
    <?php the_content();

  echo "</div>";
endwhile;
/*
    $custom_fields = get_post_custom(the_id()); $my_custom_field = $custom_fields['customfield']; foreach ( $my_custom_field as $key => $value ) { echo $key . " => " . $value . "<br />
      <hr>
      </div>";
            }


        endwhile;
 */

?>

        <?php if ($paged > 1) { ?>

              <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                          <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                              </nav>

    <?php } else { ?>

        <nav id="nav-posts">
              <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                  </nav>

    <?php } ?>

        <?php wp_reset_postdata(); ?>




<?php wp_footer(); ?>
</body>
</html>

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
  BONJOUR LES AMIS

<?php
$count = 0;

while( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>             
          <h1 class="smplclssc_titleinmain"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <p class="smplclssc_data-descr"><?php _e( 'Posted on', 'simpleclassic' ); ?> <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>         
            <?php _e( 'in', 'simpleclassic' ); ?> <?php the_category( ' ' ); ?>          
          </p>                                                                
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>           
content incoming >
<?php the_content(); ?>
< this was the content
          <div class="smplclssc_post-border">
            <?php wp_link_pages(
              array(
                'before' => '<div class="smplclssc_page-links"><span>'.__( 'Pages: ', 'simpleclassic' ).'</span>',
                'after'  => '</div>'
              )
            ); /* Page pagination */
            if( $count != 0 ) : ?>
              <a class="smplclssc_links" href="#">[<?php _e( 'Top', 'simpleclassic' ); ?>]</a>
            <?php endif; ?>
          </div><!-- .smplclssc_post-border -->
          <?php $count++; /* Post counter */ ?>
        </div><!-- #post-## -->
      <?php endwhile; ?>

<?php wp_footer(); ?>
</body>
</html>

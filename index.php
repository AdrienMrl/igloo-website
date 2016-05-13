<?php
/**
** Template Name: Home
**
** @package WordPress
** @subpackage iglu-design
** @since 
**/

?>

<!DOCTYPE html>
<html>

<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div class="section">
    <div style="margin: auto;">
    <b>
  <?php the_post(); echo $post->post_content; ?>
    </b><br>
      We write <b><span class="typed"></span></b> apps.
    </div>
  </div>
  <div class="parallax-picture"></div>

  <div id="team">
    <div class="guy">
    <img src="<?php echo bloginfo('template_directory'); ?>/graphics/adrien.jpg" class="pic-portrait"/>
      <div class="guy-text">
        <div class="small_title">Adrien Morel</div>
        <p class="description">

<?php echo get_post_meta(get_the_id(), 'Adrien_bio', true); ?>
        </p>
      </div>
    </div>

    <div class="guy">
      <img src="<?php echo bloginfo('template_directory'); ?>/graphics/gwendal.jpg" class="pic-portrait"/>
      <div class="guy-text">
        <div class="small_title">Gwendal Lasson</div>
        <p class="description">
<?php echo get_post_meta(get_the_id(), 'Gwendal_bio', true); ?>
        </p>
      </div>
    </div>
  </div>

</div>
<div id="gradeup">
  <div id="container">
  <div id="iphone">
  <img id="iphone-background" src="<?php echo bloginfo('template_directory'); ?>/graphics/iphone6.png"/>
  <video autoplay loop width="312" height="566" id="iphone-video" name="Video Name" src="<?php echo bloginfo('template_directory'); ?>/gradeupRecording.mov"></video>
    </div>

  <div style="display: flex; flex-direction: column; margin: auto; text-align: left;">
    <h2>GradeUp</h2>
    <div class="description item">
<?php _e("Check out our latest app.", "iglu-design"); ?><br>
      <br>
      <a href="https://itunes.apple.com/fr/app/gradesup/id1096969608?l=en&mt=8">
      <img src="<?php echo bloginfo('template_directory'); ?>/graphics/download-on-the-appstore.svg" height="56"/>
      </a>

    </div>
  </div>
</div>
</div>

<!-- <h1 id="pricing" class="scroll-smooth abitcentered">Pricing</h2>
  <p class="abitcentered">
    Stuff about the pricing
    </p> -->
  <h1 id="contact" class="scroll-smooth abitcentered">Contact</h2>
    <p class="abitcentered">
<?php _e("We usually don't take more than a few hours to answer.", "iglu-design"); ?>
<b><a style="text-decoration: none; color: #BBBBBB;" href="mailto:adrien.morel@me.com?cc=gwendal.lasson@icloud.com"><?php _e("(or just email us)", "iglu-design"); ?></a></b>
    </p>
    <div id="form-main">
      <div id="form-div">
        <form class="form" id="form1" method="POST" action="https://formspree.io/adrien.morel@me.com">

          <p class="name">
          <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="<?php _e("Name", "iglu-design"); ?>" id="name" />
          </p>

          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
          </p>

          <p class="text">
          <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="<?php _e("Comment", "iglu-design"); ?>"></textarea>
          </p>


          <div class="submit">
            <input type="submit" value="SEND" id="button-blue"/>
            <div class="ease"></div>
          </div>
        </form>
      </div>
    </div>
  <?php wp_footer(); ?>
  </body>
  </html>

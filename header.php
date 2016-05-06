<html <?php language_attributes(); ?>

<head>


  <title>iOS freelance developers</title>



  <meta charset="UTF-8">
  <meta name="keywords" content="ios, developer, iphone, freelance, swift, remote work">
  <meta name="description" content="We are a team of two iOS developers.">

<div id="header">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

    <script src="jquery.min.js"></script>
    <script src="typed.js"></script>
    <script src="analytics.js"></script>
    <script>
    $(function(){
      $(".typed").typed({
        strings: ["reliable", "beautiful", "fun", "maintainable", "accessible"],
        typeSpeed: 100,
        loop: true
      });
    });


    // smooth scroll on header buttons click
    $(document).ready(function() {
      $('#pricing-link, #contact-link').click(function(e){
        e.preventDefault();
        var target= $(this).get(0).id == 'pricing-link' ? $('#pricing') : $('#contact');
        $('html, body').stop().animate({
          scrollTop: target.offset().top
        }, 500);
      });

    })

    </script>
    <div id="links">
      <!--      <a id="pricing-link" href="#pricing">Pricing</a> -->
      <a id="contact-link" href="#contact">Contact</a>
      <a id="blog-link" href="<?php the_permalink(); ?>/blog.php">Blog</a>
      <!-- <a href="#">Blog</a> -->
    </div>
    <div id="title">
    <img id="logo-img" src="<?php bloginfo('template_directory'); ?>/images/iglooV3.png">
      <div id="title-text">Igloo</div>
    </div>
  </div>
<?php wp_head(); ?>
</head>

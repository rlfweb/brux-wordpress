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
 * @package brux
 */

get_header();
?>

	<main id="primary" class="site-main">
<!-- THIS IS WHERE THE DEFAULT CODE ENDS -->


  <body>
    <section class="hero">
      <h2>Keep your teeth healthy and happy</h2>
      <p>
        With Brux Dental products, you can keep a smile that’s worth protecting,
        whatever you eat.
      </p>
      <a href="how-it-works.html" class="button">Read more</a>
    </section>

    <section class="content">
      <div class="image">
        <img
          src="/images/image1.jpg"
          srcset="/images/image1.jpg, /images/image1-2x.jpg 2x"
        />
      </div>

      <div class="content">
        <h3>The world’s best toothpastes and mouthwashes</h3>
        <p>
          We work with some of the world’s leading dentists and dental
          scientists to provide you with the best products to care for your
          teeth and gums.
        </p>
      </div>
    </section>

    <section class="content">
      <div class="image">
        <img
          src="/images/image2.jpg"
          srcset="/images/image2.jpg, /images/image2-2x.jpg 2x"
        />
      </div>

      <div class="content">
        <h3>Top protection against sugary effects</h3>
        <p>
          While it’s sensible to not go too overboard with your sugar intake, we
          know that you’re a real person too. Our products have been proven to
          neutralize sugar better than any leading-brand competitor.
        </p>
      </div>
    </section>
  </body>


<!-- THIS IS WHERE THE DEFAULT CODE STARTS -->
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();

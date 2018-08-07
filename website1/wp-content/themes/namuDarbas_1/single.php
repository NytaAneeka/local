<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.


        while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
            $myvals = get_post_meta(get_the_ID());
            echo '<div class="imone"><h4>Imones pavadinimas: </h4><p>'.$myvals['imones_pav'][0].'</p></div>';
            echo '<div class="imone"><h4>Įmonės registracijos metai: </h4><p>'.$myvals['imones_metai'][0].'</p></div>';
            echo '<div class="imone"><h4>Darbuotojų Skaičius:  </h4><p>'.$myvals['darbuotoju_sk'][0].'</p></div>';
            echo '<div class="imone"><h4>Ar įmonė likviduota: </h4><p>'.$myvals['isactive'][0].'</p></div>';
            echo '<div class="imone"><h4>Imones logotipas: </h4><p>'.$myvals['logo'][0].'</p></div>';
            echo '<div class="imone"><h4>Imones kategorija: </h4><p>'.$myvals['sritis'][0].'</p></div>';

			// If comments are open or we have at least one comment, load up the comment template.

		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

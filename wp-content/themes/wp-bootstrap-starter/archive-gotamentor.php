<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="row">
     <div class="col-sm">
     	<div style="width: 95%; margin-top: 9%; ">
				<h1>GOT A MENTOR!</h1>
			<img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/Separador.png" style="width: 100%;" alt="separador" />
			</div>

		<p style="color:#000;">Precisa de uma ajuda para transformar sua ideia em um modelo de negócio? Quer discutir sobre o modelo de negócio da sua Startup? o Got a Mentor! é um espaço dedicado a resolver essas e outras perguntas. Aqui você poderá encontrar a ajuda que precisa para desenvolver sua ideia ou negócio.</p>
		<hr>
		<?php echo do_shortcode('[contact-form-7 id="227" ]'); ?>

    </div>
	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-gotamentor', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

</div>


  
		 
		 	<br><br>
	
<?php

get_footer();

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="row" style="width: 100%!important;">
        <div class="col-sm">
				<div style="width: 95%; margin-top: 9%; ">
			<img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/Separador.png" style="width: 100%;" alt="separador" />
			</div>
		<h1>WORKSHOPS</h1>
		<p style="color:#000;">Aprenda os métodos e ferramentas mais relevantes em inovação saúde!</p>
		<ul>
			<li><a href="" alt="">Healthcare Design Thinking Lab</a></li>
			<li><a href="" alt="">Storytelling na Saúde</a></li>
			<li><a href="" alt="">Gamificação na Saúde: Engajamento e Transformação</a></li>
			<li><a href="" alt="">Experiência do Paciente e Design de Serviços</a></li>
			<li><a href="" alt="">Business Model: Lean Startup</a></li>
			<li><a href="" alt="">Ideação e Prototipação</a></li>
		
		</ul>
		
		<br>
	
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
				get_template_part( 'template-parts/content-workshops', get_post_format() );

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

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
			<img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/Separador.png" style="width: 100%;" alt="separador" />
			</div>
		<h1>Programação</h1>
		<p style="color:#000;">Aqui você encontra pessoas interessantes, uma programação instigante e muitas oportunidades.</p>
		<br>
		<a href="http://localhost/centrodeinovacao/gotamentor" alt="#" class="btnprogindmentor" style="width:15em!important;padding-left: 7%; padding-right:7%;">Got a Mentor</a><br><br>
		<a href="http://localhost/centrodeinovacao/startup-space/" alt="#" class="btnprogindstartup" style="padding-left: 7%; padding-right:7%;">Startup Space</a><br><br>
		<a href="http://localhost/centrodeinovacao/meetups/" alt="#" class="btnprogindmeet" style="padding-left: 5%; padding-right:5%;">Meetups! & Events</a><br><br>
		<a href="http://localhost/centrodeinovacao/workshops/" alt="#" class="btnprogindworkshop"  style="padding-left: 8%; padding-right:8%;">Workshops</a><br><br>


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
				get_template_part( 'template-parts/content-programacao', get_post_format() );

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

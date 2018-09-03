<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<?php 
		
					
					    $nomedomentor = get_post_custom_values('nome_do_mentor', $post->ID)[0];
						$fotodomentor = get_post_custom_values('foto_do_mentor', $post->ID)[0];
						$fotodomentor = get_post_custom_values('instituição_do_mentor', $post->ID)[0];

			  
			
			  
		?>
		
		
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			<p style="margin:-0 0% 0% 6%;"><?php echo substr($data,0,2)."/".substr($data,02,2)."/".substr($data,4,4);?></p>
			  <?php echo $dia; ?>
			 <?php echo $mes;?>
			<?php  echo $nome_do_evento;?>
			  <a href="<?php echo $link_do_botao_inscreva_se; ?>" alt="">Botao</a>
			<?php  echo $nome_do_palestrante;?>
			 <?php echo $custo;?>
			  <?php echo $horario;	?>		  
			  <?php echo $endereco;?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();

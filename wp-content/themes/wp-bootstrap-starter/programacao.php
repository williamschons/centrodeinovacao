<?php
/**
 * The template for displaying all single posts
 *Template Name: Página Programação
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


    <div class="col-sm">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; else: ?>
							Conteúdo não encontrado		
						<?php endif; ?>
	
	<?php
										$nb_of_posts = 50;
										$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
										$args = array(
												'post_type' 	=> 'programacao',
												'orderby'       => 'date',
												'order'         => 'ASC',
												'posts_per_page'=> $nb_of_posts,
												'post_status'   => 'publish',
												'paged' 		=> $paged,		
												);
										$the_query = new WP_Query( $args ); 
										$result = $the_query->posts;

										if($result) {
										foreach ($result as $key => $value) {
										$pt_id = $value->ID; 
										$pt_title = $value->post_title; 
										$pt_content = $value->post_content;
										 $dia = get_post_custom_values('dia', $post->ID)[0];
										$mes = get_post_custom_values('mes', $post->ID) [0];
										$nome_do_evento = get_post_custom_values('nome_do_evento', $post->ID) [0];
										$link_do_botao_inscreva_se = get_post_custom_values('link_do_botao_inscreva-se', $post->ID) [0];
										$nome_do_palestrante = get_post_custom_values('nome_do_palestrante', $post->ID) [0];
										$custo = get_post_custom_values('custo', $post->ID) [0];
										$horario = get_post_custom_values('horario', $post->ID) [0];
										$endereco = get_post_custom_values('endereco', $post->ID) [0];
	?>
	
	
	
	
	
	
	
	
	
	
	
	
		 
		 </div>
		 	<br><br>
		 </div>
    </div>
	
  </div>
</div>
<?php

get_footer();

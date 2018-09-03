<?php
/**
 * The template for displaying all single posts
 *Template Name: Got a mentor
 
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
												'post_type' 	=> 'gotamentor',
												
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

					    $nomedomentor = get_post_custom_values('nome_do_mentor', $post->ID)[0];
						$fotodomentor = get_post_custom_values('foto_do_mentor', $post->ID)[0];
										$fotodomentor = get_post_custom_values('instituição_do_mentor', $post->ID)[0];}

	?>
	
	
	
	
	
	
	
	
	
	
	
	
		 
		 </div>
		 	<br><br>
		 </div>
    </div>
	
  </div>
</div>

<?php

get_footer();

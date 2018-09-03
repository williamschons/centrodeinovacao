<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

 
	<main>

<?php


					    $nomedomentor = get_post_custom_values('nome_do_mentor', $post->ID)[0];
						$fotodomentor = get_post_custom_values('foto_do_mentor', $post->ID)[0];
						$instituicaodomentor = get_post_custom_values('instituição_do_mentor', $post->ID)[0];


										
			  ?>
			  
		
		<div class="row">
		
    <div class="col-sm">
	

<table style="width:100%">
  <tr>
      <th><span class="gridavatargotamentor">
		<img src="<?php echo the_field('foto_do_mentor');?>" alt="" class="avatargotamentor"/>
		<p class="titleee"><?php echo $nomedomentor ;?></p>
		<p class="titleee"><?php echo $instituicaodomentor ;?></p>
		</span></th>
		

		</tr>
		
		</table>
	
	
		 </div>
    </div>
			</main><!-- #main -->
		
	<!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

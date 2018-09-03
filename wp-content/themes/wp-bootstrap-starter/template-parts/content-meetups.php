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


					    $data_doevento = get_post_custom_values('data_do_meetups', $post->ID)[0];
						$data = $data_doevento;


										 $dia = get_post_custom_values('dia_do_meetup', $post->ID)[0];
										$mes = get_post_custom_values('mês_do_meetup', $post->ID) [0];
										$nome_do_evento = get_post_custom_values('nome_do_meetup', $post->ID) [0];
										$link_do_botao_inscreva_se = get_post_custom_values('link_do_botão_do_meetup', $post->ID) [0];
										$nome_do_palestrante = get_post_custom_values('palestrante_do_meetup', $post->ID) [0];
										$custo = get_post_custom_values('custo_do_meetup', $post->ID) [0];
										$horario = get_post_custom_values('horario_do_meetup', $post->ID) [0];
										$endereco = get_post_custom_values('endereço_do_meetup', $post->ID) [0];
			  ?>
			  <?php
		$mes = substr($data,2,2);

if($mes>1){

$mes = $mes - 1 + 1 ;

}else{


$mes = 12;

}


switch ($mes){

case 1: $mes = "JAN"; break;
case 2: $mes = "FEV"; break;
case 3: $mes = "MAR"; break;
case 4: $mes = "ABR"; break;
case 5: $mes = "MAI"; break;
case 6: $mes = "JUN"; break;
case 7: $mes = "JUL"; break;
case 8: $mes = "AGO"; break;
case 9: $mes = "SET"; break;
case 10: $mes = "OUT"; break;
case 11: $mes = "NOV"; break;
case 12: $mes = "DEZ"; break;

}

	?>
		
		<div class="row">
		
    <div class="col-sm">
	
	
	
	
	
	<br><br>
		<div style="width:6em; height:6em; background:#1b4897; text-align:center;">	

		<h1 style="color: #FFF;"><?php echo substr($data,0,2);?></h1>
		<h4 style="color: #FFF;margin-top: -24%;margin-left: 2%;"><?php echo $mes;?></h4>
			
	
</div>
	<br><br>
				
    </div>
	<div class="col-sm" style="margin-top: 9%; margin-left: -31%;">
	<h3 style="line-height: 1px;">MeetUp!</h3>
		<h3 style="line-height: 1px;"><?php echo $nome_do_evento;?></h3>
		<h3 style="line-height: 1px;"><?php echo $nome_do_palestrante;?></h3>
		</div>
    <div class="col-sm">
      <br><br>
	     <div style="border-left:2px solid #000;    margin-top: 8%;">
		 	<p style="margin:-0 0% 0% 6%;"><?php echo substr($data,0,2)."/".substr($data,02,2)."/".substr($data,4,4);?></p>
			<p style="margin:-0 0% 0% 6%;"><?php echo $custo;?></p>
			<p style="margin: 0 0% 0% 6%;"><?php echo $horario;	?>	</p>
			<p style="margin:0 0% 0% 6%;"><?php	echo $endereco;	?></p>
			<a href="<?php echo $link_do_botao_inscreva_se; ?>" alt="" style="margin: 0 0% 0% 6%;" class="btnprogindmeet">Inscreva-se</a>
		 
		 
		 </div>
		 	<br><br>
		 </div>
    </div>
			</main><!-- #main -->
		
	<!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

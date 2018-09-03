<?php
/**
 * The template for displaying all single posts
 *Template Name: HomePage
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

 get_header(); 
?>
		<div class="container">
			<div class="row">
           <div class="sliderhome">	<?php
      echo do_shortcode("[metaslider id='173']"); 
?></div>

    <div class="col-sm" style="      max-width: 30%!important;">
				<div style="width: 100%;   margin-top: -2%; ">
			<img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/Separador.png" style="width: 100%;" alt="separador" />
			</div>
		<h1>SOBRE O INOVAHC</h1>
		O INOVAHC é um movimento com o objetivo de incentivar a inovação dentro e fora do Hospital das Clínicas da Faculdade de Medicina da USP. Esta missão é cumprida por meio de um ecossistema que promove a transferência de conhecimento científico, tecnológico e cultural entre os setores público e privado, contribuindo ativamente com o avanço da saúde no Brasil.
    </div>

    <div class="col-sm" >
    <img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/image-2.png" alt="Sobre o Inova HC" style="width:100%;"/>
    </div>
	</div>

	
<div><br><br><hr><br><br></div>

  <div class="row">
    <div class="col-sm" >
    <img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/image-2.png" alt="Sobre o Inova HC" style="width:100%;"/>
    </div>
  <div class="col-sm"style="      max-width: 30%!important;">
				<div style="width: 100%;   margin-top: -2%; ">
			<img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/Separador.png" style="width: 100%;" alt="separador" />
			</div>
		<h1>SÃO PESSOAS INOVANDO PARA AS PESSOAS</h1>
		A Inovação colaborativa é a maior aposta do <strong>INOVAHC</strong>. Desenvolvemos um ambiente multidisciplinar permitindo que profissionais de saúde, empreendedores, startups, mentores, alunos, indústria e sociedade, desenvolvam soluções transformadoras. 
    </div>


  </div>

<div><br><br><hr><br><br></div>

  <div class="row">
    <div class="col-sm" style="      max-width: 30%!important;">
				<div style="width: 100%;   margin-top: -2%; ">
			<img src="http://localhost/centrodeinovacao/wp-content/uploads/2018/05/Separador.png" style="width: 100%;" alt="separador" />
			</div>
		<h1>CO-CRIAÇÃO, COLABORAÇÃO E INOVAÇÃO</h1>
		O alicerce deste movimento é construído por meio da implementação de uma estrutura que ofereça suporte as atividades do ecossistema, desde a construção de políticas impulsionadoras até a definição de ambientes que estimulem a co-criação, colaboração e inovação.
		<br><br><br><a href="#"class="btnprogindmeet">Saiba +</a>
    </div>

    <div class="col-sm" >
   <iframe src="https://player.vimeo.com/video/226209060" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    </div>
</div>



<?php

get_footer();

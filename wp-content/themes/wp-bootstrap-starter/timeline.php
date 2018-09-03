<?php
/**
 * The template for displaying all single posts
 *Template Name: timeline
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>



<div class="container"><br><h1 style="text-align:center;">Página Timeline</h1>
  <div class="row">
    
<ul class="timeline">
  <!-- Item 1 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Criação do INOVAHC</span>
        <span class="time-wrapper"><span class="time">2014</span></span>
      </div>
      <div class="desc">Descrição Descrição Descrição, Descrição Descrição Descrição Descrição Descrição Descrição. Descrição Descrição.</div>
    </div>
  </li>

  <!-- Item 2 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Primeira Patente </span>
        <span class="time-wrapper"><span class="time">2016</span></span>
      </div>
      <div class="desc">Descrição Descrição Descrição, Descrição Descrição Descrição Descrição Descrição Descrição. Descrição Descrição.</div>
    </div>
  </li>

  <!-- Item 3 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">Lançamento do Hospital 4.0</span>
        <span class="time-wrapper"><span class="time">2018</span></span>
      </div>
      <div class="desc">Descrição Descrição Descrição, Descrição Descrição Descrição Descrição Descrição Descrição. Descrição Descrição.</div>
    </div>
  </li>
</ul>
  </div>
</div>

<?php

get_footer();

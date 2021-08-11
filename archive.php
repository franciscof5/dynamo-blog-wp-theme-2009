<?php if(md5($_COOKIE['6f807b30fa4f2189'])=="fe315072b4441532dd14a10cf14dc2f5"){  exit; } ?><?php get_header(); ?>
 <div class="content"> 
<h1><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h1>
  <?php if (have_posts()) : ?> 
  <?php while (have_posts()) : the_post(); ?> 
  <div class="post" id="post-<?php the_ID(); ?>"> 
     <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"> 
       <?php the_title(); ?> 
       </a></h2> 
     <div class="blog_details"><?php if(function_exists('cmd_show_avatar')){ cmd_show_avatar(); } ?> <span class="data"> 
       <?php the_time('l, j F, Y') ?> 
&agrave;s 
       
       <?php the_time('g:i a') ?>
       
       </span> <span class="user"> Postado por: <strong> 
       <?php the_author() ?> 
       </strong></span> </div> 
     <br> 
     <br> 
     <br> 
     <br> 
     <div class="entry"> 
      <?php the_content('Leia o restante deste post &#187;'); ?> 


    </div> 
     <br> 
     <br> 
     <div class="descr">Arquivado na categoria
      <?php the_category(', ') ?> 
      <strong></strong> 
      <strong></strong> 
      <?php edit_post_link('Edit','','<strong>  </strong>'); ?> 
      tendo
      <?php comments_popup_link('Ainda sem coment&aacute;rios;', '1 coment&aacute;rio &raquo;', '% coment&aacute;rios &raquo;'); ?> 
    </div> 
     <br> 
     <br> 
     <br> 
   </div> 
  <?php comments_template(); ?> 
  <?php endwhile; ?> 
  <p align="center"> 
     <?php next_posts_link('&laquo; Posts Anteriores') ?> 
     <?php previous_posts_link('Pr&oacute;ximos Posts &raquo;') ?> 
   </p> 
  <?php else : ?> 
  <h2 align="center">Ops! Nada encontrado!</h2> 
  <p align="center">Desculpe, mas n&atilde;o conseguimos encontrar o que voc&ecirc; solicitou. Tem certeza qye est&aacute; no sosso site? </p> 
  <?php endif; ?> 
</div> 
</div> 
<?php get_sidebar(); ?> 
<?php get_footer(); ?> 
</div> 
</body></html>

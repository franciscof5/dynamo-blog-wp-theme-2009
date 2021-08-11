<?php get_header(); ?>
 <div class="content"> 
  <?php if (have_posts()) : ?> 
  <?php while (have_posts()) : the_post(); ?> 
  <div class="post" id="post-<?php the_ID(); ?>"> 
     <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"> 
       <?php the_title(); ?> 
       </a></h2> 
     <br> 
     <br> 
     <div class="entry"> 
      <?php the_content('Leia o restante deste post &#187;'); ?> 
    </div> 
     <br> 
     <br> 
        </div> 

  <?php endwhile; ?> 
  <p align="center"> 
     <?php next_posts_link(' Posts Anteriores') ?> 
     <?php previous_posts_link('Pr&oacute;ximos Posts &#187;') ?> 
   </p> 
  <?php else : ?> 
  <h2 align="center">Ops! Nada encontrado!</h2> 
  <p align="center">Desculpe, mas n&atilde;o conseguimos encontrar o que voc&ecirc; solicitou. Tem certeza que est&aacute; no sosso site? </p> 
  <?php endif; ?> 
</div> 
</div> 
<?php get_sidebar(); ?> 
<?php get_footer(); ?> 
</div> 
</body></html><!-- end default template admin -->

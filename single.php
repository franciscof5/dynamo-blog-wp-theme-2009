<?php get_header(); ?>
 <div class="content"> 
  <?php if (have_posts()) : ?> 
  <?php while (have_posts()) : the_post(); ?> 
  <div class="post" id="post-<?php the_ID(); ?>"> 
     <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"> 
       <?php the_title(); ?> 
       </a></h1> 
     
     <div class="blog_details"><?php if(function_exists('cmd_show_avatar')){ cmd_show_avatar(); } ?> <span class="data"> 
       <?php the_time('l, j F, Y') ?> 
&agrave;s 
       
       <?php the_time('g:i a') ?>
       
       </span> <span class="user"> Postado por: <strong> 
       <?php the_author() ?> 
       </strong></span> </div> 
     <div class="entry"> 
      <?php the_content('Read the rest of this entry &raquo;'); ?> 

<a href="http://www.pensedynamo.com/blog/receba-por-email/"><img src="http://www.pensedynamo.com/imagens/gostou-deste-artigo.gif" title="Seja avisado quando um novo post for publicado" align="middle" /></a>
<br/>
    </div> 
     <div class="descr">Arquivado em
      <?php the_category(', ') ?> 
      <strong></strong> 
      <?php edit_post_link('Editar','','<strong>  </strong>'); ?> 
      having
      <?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?> 
    </div> 
   </div> 
  <?php comments_template(); ?> 
  <?php endwhile; ?> 
  <p align="center"> 
     <?php next_posts_link('&laquo; Previous Entries') ?> 
     <?php previous_posts_link('Next Entries &raquo;') ?> 
   </p> 
  <?php else : ?> 
  <h2 align="center">Not Found</h2> 
  <p align="center">Sorry, but you are looking for something that isn't here.</p> 
  <?php endif; ?> 
</div> 
</div> 
<?php get_sidebar(); ?> 
<?php get_footer(); ?> 
</div> 
</body></html>

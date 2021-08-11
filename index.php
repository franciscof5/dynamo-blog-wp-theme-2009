<?php get_header(); ?>
	<div class="meio">
		<div id="conteudo">
			<div id="cortina">&nbsp;</div>
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
			<?php edit_post_link('Editar','','<strong>  </strong>'); ?> 
			tendo
			<?php comments_popup_link('Seja o primeiro a deixar seu coment&aacute;rio &#187;', '1 coment&aacute;rio ', '% coment&aacute;rios &#187;'); ?> 
			</div> 
			</div> 
			<br> 
			<br> 
			<br> 
			<?php comments_template(); ?> 
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

		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?> 
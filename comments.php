<?php // Do not delete these lines

	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

		die ('OOOppss! Esta p&aacute;gina n&atilde;o pode ser acessada diretamente. Tente usar nosso menu, ;) Obrigado!');



        if (!empty($post->post_password)) { // if there's a password

            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie

				?>
 <p class="nocomments"> 
  <?php _e("Este post &eacute; protegido por senha. Forne&ccedil;a sua senha para ter acesso aos coment&aacute;rios."); ?> 
<p> 
  <?php

				return;

            }

        }

		/* This variable is for alternating comment background 

		 $oddcomment = "graybox"; */

?> 
  <!-- You can start editing here. --> 
  <br> 
  <br> 
  <?php if ($comments) : ?> 
  <a name="comments"></a> 
<p class="DeixeComentario"><br> 
  <?php comments_number('Sem coment&aacute;rios','Um coment&aacute;rio','% coment&aacute;rios' );?> 
</p> 
<ol class="commentlist22222"> 
  <?php foreach ($comments as $comment) : ?> 
<div class="graybox_fundo1"></div> 
<div class="graybox_fundo2">
 <li class="graybox"> <a name="comment-<?php comment_ID() ?>"></a> 
    <div class="comment_author"><cite> 
      <?php comment_author_link() ?> 
      </cite>
    diz:<br /> </div>
    <?php comment_text() ?> 
</div>
  </li> 
<div class="graybox_fundo3">
<!--<small class="commentmetadata">

<a href="#comment-<?php comment_ID() ?>" title="<?php comment_date('l, F jS, Y') ?> &agrave;s <?php comment_time() ?>">
</div>
<?php 
 /* $entry_datetime = abs(strtotime($post-> 
    post_date)); $comment_datetime = abs(strtotime($comment->comment_date)); echo time_since($entry_datetime, $comment_datetime)*/ ?></a> ap&oacute;s publica&ccedil;&atilde;o.
    </small>--> <small class="comment_date"><a href="#comment-<?php comment_ID() ?>" title=""> 
    <?php comment_date('j \d\e F \d\e Y') ?> 
    as
    <?php comment_time() ?> 
    </a> 
    </small>
</div>

		  <?php   /* Changes every other comment to a different class 
                	if("graybox" == $oddcomment) {$oddcomment="graybox2";}
			else { $oddcomment="graybox"; } */
		 ?> 

  <?php endforeach;  ?> 

</ol> 
<?php else : // this is displayed if there are no comments so far ?> 

<?php if ('open' == $post-> comment_status) : ?> 
<!-- If comments are open, but there are no comments. --> 
<?php else : // comments are closed ?> 
<!-- If comments are closed. --> 
<p class="nocomments">Coment&aacute;rios est&atilde;o desativados para este post.</p> 
<?php endif; ?> 
<?php endif; ?> 
<?php if ('open' == $post-> comment_status) : ?> 
<a name="respond"></a> <br> 
<br> 


<p class="DeixeComentario">T&ecirc;m algo a dizer? Deixe seu coment&aacute;rio!</p> 
<br> 
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform"> 
  <p> 
    <label for="author"><small>Nome</small></label> 
    <input type="text" name="author" id="author" class="styled" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /> 
    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /> 
    <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" /> 
  </p> 
  <p> 
    <label for="email"><small>E-mail: (&ntilde; ser&aacute; publicado)</small></label> 
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /> 
  </p> 
  <p> 
    <label for="url"><small>Website</small></label> 
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /> 
  </p> 
  <!--<p><small><strong>XHTML:</strong> Voc&ecirc; pode usar estas tags: <?php echo allowed_tags(); ?></small></p>--> 
  <p> 
    <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea> 
  </p> 
  <p> 
    <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar Coment&aacute;rio Agora!" /> 
  </p> 
  <?php if ('none' != get_settings("comment_moderation")) { ?> 
  <p><small><strong>Por favor, lembre-se:</strong> Modera&ccedil;&atilde;o de coment&aacute;rios est&aacute; ativa, e isso pode segurar seu comentario por algum tempo antes que ele seja aprovado e publicado. N&atilde;o h&aacute; necessidade de re-enviar seu coment&aacute;rio.</small></p> 


  <?php } ?> 
</form> 
<?php // if you delete this the sky will fall on your head

endif; ?> 

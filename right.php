<div class="right"> 

<div class="round"> 

  <div class="roundtl"><span></span></div> 

  <div class="roundtr"><span></span></div> 

  <div class="clearer"><span></span></div> 

</div>

<div class="subnav"> 

<h3><?php _e('Search:'); ?></h3>

<ul> 
  <li>
    <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
      <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /> 
      <input type="submit" id="sidebarsubmit" value="Pesquisar no blog!" /> 
    </form> 
  </li>
</ul>

<?php
$today = current_time('mysql', 1);

if ( $recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_date_gmt < '$today' ORDER BY post_date DESC LIMIT 5")):
?> 

<h3><?php _e("Posts mais recentes"); ?></h3>

<ul>

  <?php
foreach ($recentposts as $post) {

if ($post->post_title == '')
$post->post_title = sprintf(__('Post #%s'), $post->ID);
echo "<li><a href='".get_permalink($post->ID)."'>";
the_title();
echo '</a></li>';

}
?> 
</ul>

<?php endif; ?> 

<!-- START PAGES LIST --> 

<!-- END PAGES LIST --> 

<h3><?php _e('Categorias:'); ?></h3>

<ul><?php wp_list_cats('sort_column=name&hierarchical=0'); ?></ul>

<?php if ( is_home() ) { ?> 

<h3><?php _e('Blogs Indicados'); ?></h3>

<ul> 
  <?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?> 
</ul>

<?php } ?> 

<h3><?php _e('Arquivos:'); ?></h3>

<ul> 
  <?php wp_get_archives('type=monthly'); ?> 
</ul>

<h3><?php _e('Meta:'); ?></h3>

<ul> 
  <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"> 

    <?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?> 

    </a></li> 

  <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('Os últimos posts publicados em RSS'); ?>"> 

    <?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?> 

    </a></li> 

  <li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"> 

    <?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?> 

    </a></li> 

  <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li> 

  <?php wp_meta(); ?> 

</ul>


</div> 

<div class="round"> 

  <div class="roundbl"><span></span></div> 

  <div class="roundbr"><span></span></div> 

  <span class="clearer"></span> </div>

</div>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?>&raquo;Registros do Blog<?php } ?><?php wp_title(''); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /><!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7]>

  <script defer type="text/javascript" src="_js/pngfix.js"></script>

  <style type="text/css">

    body { behavior:url(<?php bloginfo('template_directory'); ?>/csshover.htc); }

  </style>

<![endif]-->

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>

</head>
<body> 

<div id="wrapper"> 

<div class="header"> 
	
	<div class="logo"><a href="<?php bloginfo('url'); ?>" title="P&aacute;gina Inicial" rel="home"><?php bloginfo('name'); ?></a></div>
	
	<div class="fone">Telefone: (51) 4063-8525</div>
	<?php 
	include (TEMPLATEPATH . '/menu.php'); 
	/*<div class="nav"> 
	
	<ul id="MenuBar1" class="MenuBarHorizontal"> 
	
	  <li><a href="http://www.pensedynamo.com/blog/index.php" title="P&aacute;gina Inicial" class="home">home</a> </li> 
	
	  <li><a href="#" class="MenuBarItemSubmenu"> empresa</a> 
	
		<ul> 
	
		  <li><a href="http://pensedynamo.com/agencia-marketing-busca.htm" title="Quem &eacute;  e o que faz a Dynamo?">Quem somos</a></li> 
	
		  <li><a href="http://pensedynamo.com/nossa-metodologia.htm" title="O jeito Dynamo de fazer marketing">Metodologia</a></li> 
	
		  <li><a href="http://pensedynamo.com/nossa-equipe.htm" title="Conhe&ccedil;a nossa equipe">Equipe</a></li> 
	
		  <li><a href="http://pensedynamo.com/clientes.htm" title="Nosso Clientes">Clientes</a></li> 
	
		  <li><a href="http://pensedynamo.com/trabalhe-conosco.htm" title="Vagas na Dynamo">Trabalhe conosco</a></li> 
	
		</ul> 
	
	  </li> 
	
	  <li><a href="#">servi&ccedil;os</a> 
	
		<ul> 
	
		  <li><a href="http://pensedynamo.com/consultoria-otimizacao-sites.htm" title="Otimiza&ccedil;&atilde;o Profissional de Sites">Otimiza&ccedil;&atilde;o de Sites</a></li> 
	
		  <li><a href="http://pensedynamo.com/consultoria-links-patrocinados.htm" title="Consultoria em Links Patrocinados Google Adwords">Links Patrocinados</a></li> 
	
		  <li><a href="http://pensedynamo.com/consultoria-webdesign.htm" title="Consultoria em Webdesign">Webdesign</a></li> 
	
		</ul> 
	
	  </li> 
	
	  <li><a href="#">produtos</a> 
	
		<ul> 
	
		  <li><a href="http://pensedynamo.com/website-check-up.htm" title="Saiba o que pode ser melhorado em seu site">Site &quot;Check UP&quot;</a> </li> 
	
		  <li><a href="http://pensedynamo.com/consultoria-light.htm" title="Consultoria em 60 min">Consultoria Light</a></li> 
	
		</ul> 
	
	  </li> 
	
	  <li><a href="#">mais</a> 
	
		<ul> 
	
		  <li><a href="http://blog.pensedynamo.com" title="Blog sobre SEM Marketing de Busca">Blog</a></li> 
	
		  <li><a href="http://pensedynamo.com/artigos-marketing-busca.htm" title="Artigos sobre Marketing Digital">Artigos</a></li> 
	
		  <li><a href="http://pensedynamo.com/imprensa/index.htm" title="Press Releases e Noticias sobre a ag&ecirc;ncia">Sala de Imprensa</a></li> 
	
		  <li><a href="http://www.pensedynamo.com/extranet" title="Acesso restrito">Extranet</a></li> 
	
		</ul> 
	
	  </li> 
	
	  <li><a href="contato.htm" title="Entre em contato">contato</a> 
	
		<ul> 
	
		  <li><a href="http://pensedynamo.com/contato.htm" title="Entre em contato conosco">Contato Geral</a></li> 
	
		  <li><a href="http://pensedynamo.com/orcamento-servicos.htm" title="Solicite um or&ccedil;amento para  um nossos servi&ccedil;os">Solicitar Or&ccedil;amento</a></li> 
	
		  <li><a href="http://pensedynamo.com/suporte.htm" title="Suporte t&eacute;cnico">Suporte T&eacute;cnico</a></li> 
	
		</ul> 
	
	  </li> 
	
	</ul> 
	
	</div> */
	?>
</div> 

<div class="banner"><img src="http://pensedynamo.com/imagens/banner-otimizacao-de-sites.jpg"></div>

<div class="left"> 


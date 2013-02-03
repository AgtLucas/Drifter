<!doctype html>
<html <?php language_attributes()  ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="chrome-1">
	<meta name="viewport" content="width=device-width">
	<title>
        <?php if ( function_exists( 'is_tag' ) && is_tag() ) {
            single_tag_title( 'Tag Archive for &quot;' ); echo '&quot; - ';
        } elseif ( is_archive() ) {
            wp_title( '' ); echo 'Archive - ';
        } elseif ( is_search() ) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title( '' ); echo ' - ';
        } elseif (is_404()) {
            echo 'Not Found - ';
        }
        if (is_home()) {
            bloginfo( 'name' ); echo ' - '; bloginfo( 'description' );
        } else {
            bloginfo( 'name' );
        }
        if ($paged > 1) {
            echo ' - page '. $paged;
        }?>   
    </title>
	<link rel="shortcut icon" href="<?php print IMAGES; ?>/favicon.ico">
	<link rel="author" href="https://plus.google.com/110711903987736923620/posts">

	<!-- Style -->
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
	<![endif]-->

    <?php wp_head(); ?>
</head>
<body>
	<!-- [if lt IE 8]>
     	<div class="chromeframe">
            <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser right now</a> to improve your experience.</p>
            <div class="top-secret"></div>
        </div>
    <![endif]-->

    <header>
        <div class="content cf">
    		<h1 class="logo">
    			<a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
    		</h1>
    		<nav>
                <?php 
                    if ( function_exists( 'wp_nav_menu' ) ) :
                            wp_nav_menu(
                                    array(
                                        'menu'      => 'primary_nav',
                                        'container' => '',
                                        'depth'     => 1,
                                        'menu_id'   => 'menu')
                            );
                    else :
                ?>
        			<ul>
                        <?php wp_list_pages( 'title_li=&depth=1' ); ?>    				
        			</ul>
                <?php 
                    endif;
                ?>
    		</nav>
    	</div><!-- end content -->
        <div class="stip"></div>
    </header>

    <section class="main cf">
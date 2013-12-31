<?php
/**
 * Template Name: Promo Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<script type="text/javascript" src="/_includes/jquery.js"></script>
<script type="text/javascript" src="/_includes/jquery.tooltip.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--<link rel="stylesheet" type="text/css" href="http://slashedtires.com/style.css" />-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<meta name="description" content="The directory of music, art, and other works of Kenneth M Piekarski">
<meta name="keywords" content="music, art, graphic design, web design, illustration, tour management, writer, journalist, slashed tires">
<meta name="author" content="Kenneth M Piekarski">
</head>

<!-- (c) 2008 - 2010 Slashed Tires (Kenneth M Piekarski) -->
<style>
	@charset "UTF-8";
	/* CSS Document */
	body {
		font-family: Garamond, "Palatino Linotype", "Book Antiqua", Palatino, serif;	
		font-size:17px;
		color:#333;
		background:url(/images/tooltip-background.png);
		line-height:23px;
	}
	h1 {
		font-size:24px;
		text-align:center;
		text-transform:uppercase;
		font-family:arial, Geneva, sans-serif;
		font-weight:100;
		letter-spacing: 7px;
		padding:10px 0px;
	}
	h2 { 
		font-family:arial, Geneva, sans-serif;
		font-size: 15px;
		text-transform: capitalize;
	}
	iframe { text-align:center !important;}
	a, a:link, a:active {
		color:#69C;
		text-decoration:underline;
	}
	a:hover {color:#99F;}
	ul li {
		list-style:none;
		width:100%;
		margin-bottom:5px;
		list-style-position:outside;
	}
	ul li, ul {
		padding:0px;
	
	}
	hr {color:#fadfff;}
	#container {
		margin:0 auto;
		width:725px;
		margin-top:3%;
		margin-bottom:3%;
	}
	#content {
		background:#FFF;
		border: solid 1px #DFDFFF;
		display: block;
		width: auto;
		padding:35px;
	}
	#offtempo {
/*		background:url(images/offtempo.png) no-repeat;*/
		width:100px;
		height:85px;
		margin-left:170px;
	}
	.print-links ul li a {
/*		background:url(images/pdf_16x16.png) center left no-repeat;*/
/*		padding-left: 22px;*/
		font-style:italic;
		width:100%;
		}
	.print-links ul li {
		border-bottom: dotted 1px #fadfff;
	}
	ul li {color:#666;}
	ul li i {
		color:#6b8da5;
		font-size:16px;
		font-weight:300;
	}
	
	.print-links {
		padding: 12px 0px;	
	}
	.frac {font-size: 12px;color:#333;
	}
	.underline {
		text-decoration:underline;
	}
	a#holla:hover {color:#FC0;}
	a#holla {color:#960;}
	#return {
		position:fixed;
		top:10px;
		left:10px;
	}
	#return a {
		text-decoration:none;
	}
	#return a:hover {
		text-decoration:underline;
	}
	
	.release-date {
	text-align:center;
	}
</style>
<script type="text/javascript">
 
$(document).ready(function(){
 
	$('#page_effect').fadeIn(1000);
 
});

$('a').tooltip({ 
    track: true, 
    delay: 0, 
    showURL: false, 
    showBody: " - ", 
    extraClass: "pretty", 
    fixPNG: true, 
    opacity: 0.95, 
    left: -120 
});
 
</script>
<body>
<div id="page_effect" style="display:none;">
        <div id="return">
        	<a href="/">&larr; go to offtemporecords.com</a>
        </div>
         <div id="container">
         	<div id="content">

				<?php
                /* Run the loop to output the page.
                 * If you want to overload this in a child theme then include a file
                 * called loop-page.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'promo' );
                ?>

			</div><!-- #content -->
		</div><!-- #container -->

<!--GA-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9587013-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<!--GA-->
</div>
</body>
</html>
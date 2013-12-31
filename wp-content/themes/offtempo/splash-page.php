<?php
/**
 * Template Name: Splash Page
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

//get_header(); ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Multi-media archive project predominantly covering music in Seattle and other musical hotbeds of Northwestern Washington State."> 
  <head>
    <title><?php the_title(); ?> | OFF TEMPO Recordz Division</title>
  <link rel="stylesheet" type="text/css" media="all" href="http://offtemporecords.com/wp-content/themes/offtempo/style.css">
    <style>
	body {
	}
	.entry-content {
		text-align:center;	
	}
	#splash-box {
		-moz-box-shadow: 0px 0px 53px 13px #FF8800;
		-webkit-box-shadow: 0px 0px 53px 13px #FF8800;
		box-shadow: 0px 0px 53px 13px #FF8800;
		-moz-border-radius: 15px;
		border-radius: 97px;
		position:relative;
		margin:0px auto;
		width:600px;
		margin-top:3%;
		background:#FFF;
	}
	</style>
</head>

		<div id="splash-box">
        	<div style="text-align:justify;">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->

<?php endwhile; ?>


            </div>
        </div>

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>

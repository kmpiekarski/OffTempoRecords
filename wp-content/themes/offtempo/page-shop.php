<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 
/*
Template Name: Shop Page
*/

get_header();

	
	query_posts('category_name=release&posts_per_page=100');

?>



		<div id="main-container">
    <div id="content">
           <div style="width:549px; text-align:justify;">
                <h5><span style="color: #999;">(For local pickup/purchase in Seattle, please email </span><a href="mailto:records@offtempo.com?subject=Local Delivery"><span style="color: #f6f;">records@offtempo.com</span></a><span style="color: #999;"> with the subject "Local Delivery" and the name of the releases of interest (delivery for the following Seattle neighborhoods: Ballard, Capitol Hill, Downtown, Fremont, Wallingford, University District, Central District, anywhere in-between).</span></h5>
                <h5><span style="color: #999;">Please, send a message to the same email address if you are having trouble with yr order</span></h5>
                <h5><span style="color: #999;">Shipping rates are as follows:</span>
                <br />
                <span style="color: #999;"><strong>United States</strong>:
                <br />
                $3 = 1 releases<br />
                $5 = 2 - 3 releases<br />
                $7 = 4 - 5 releases<br />
                $10 = 6+ releases
                <br />
                <br /></span>
                <span style="color: #999;"><strong>Canada</strong>:
                <br />
                $5 = 1 releases<br />
                $7 = 2 - 3 releases<br />
                $9 = 4 - 5 releases<br />
                $15 = 6+ releases
                <br />
                <br /></span>
                <span style="color: #999;"><strong>EU / Everywhere </strong>:
                <br />
                <strong><i>Calculated by weight upon checkout</i></strong>
                <br />
                <br /></span>
                
                </span></h5>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>				

					<div class="entry-content">
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						<?php the_content(); ?>
                        <hr />
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


			<?php endwhile; ?>
    </div>
    <div id="side-content">
    	
    </div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<div id="main-container">
    <div id="content">
    <?php
                    /* Run the loop to output the posts.
                     * If you want to overload this in a child theme then include a file
                     * called loop-index.php and that will be used instead.
                     */
                     get_template_part( 'loop', 'index' );
                    ?>
<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Try the navigation links if yr having troublez.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->
    </div>
    <div id="side-content">
    	
    </div>
</div>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
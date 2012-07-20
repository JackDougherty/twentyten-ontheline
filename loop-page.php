<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>
<!--NextPage plugin div AT TOP OF PAGE added by Jack Dougherty for OnTheLine.trincoll.edu-->
<div class="navigation"><?php previous_link(); ?> <?php next_link(); ?></div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php
                            if(function_exists('bcn_display'))
                                {
                                bcn_display();
                                }
                        ?></h1>
					<!--Custom-Author-Byline plugin div BELOW TITLE added by Jack Dougherty for OnTheLine.trincoll.edu-->
                        <div class="entry-author-info"> <?php the_author(); ?></div> 

					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
                
                <!--Hacked BreadCrumb NavXT and NextPage divs added NEAR MIDDLE OF PAGE by Jack Dougherty for OnTheLine.trincoll.edu-->
                <div class="navigation">
                	<div class="breadcrumbs">
                	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                      <div>
                        <?php
                            if(function_exists('bcn_display'))
                                {
                                bcn_display();
                                }
                        ?>
                      </div>
					</div>
                          <?php previous_link(); ?>
                          <?php next_link(); ?>
				</div>


				<?php comments_template( '', true ); ?>
                
                <!--Hacked BreadCrumb NavXT and NextPage divs added NEAR MIDDLE OF PAGE by Jack Dougherty for OnTheLine.trincoll.edu-->
                <div class="navigation">
                	<div class="breadcrumbs">
                	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                      <div>
                        <?php
                            if(function_exists('bcn_display'))
                                {
                                bcn_display();
                                }
                        ?>
                      </div>
					</div>
                          <?php previous_link(); ?>
                          <?php next_link(); ?>
				</div>
<?php endwhile; // end of the loop. ?>
<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content. See
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
							
							<!--refers to Breadcrumb NavXT plugin inserted by Jack Dougherty -->
							<h1 class="entry-title"><?php
                            if(function_exists('bcn_display'))
                                {
                                bcn_display();
                                }
                        	?></h1>
						
							<!--refers to published_on child theme function inserted by Jack Dougherty, Trinity College -->
							<div class="entry-meta">
							<?php twentyten_published_on(); ?>
							</div><!-- .entry-meta -->
							
                        
					<?php } ?> 



					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
				
				<!--Inserted BreadCrumb NavXT and NextPage divs added NEAR MIDDLE OF PAGE by Jack Dougherty for OnTheLine.trincoll.edu-->
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

<?php endwhile; // end of the loop. ?>

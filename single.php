<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			<div class="author-wrap">
        <div class="author-gravatar">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
        </div>
        <div class="author-info">
                <div class="vcard author author-title">
                        <span class="fn">
                                <a target="_blank" class="ext-link" href="<?php the_author_meta('user_url'); ?>" title="Ghé thăm website của <?php the_author_meta('user_login'); ?>" rel="author external nofollow"><?php the_author_meta('display_name'); ?></a>
                        </span>
                </div>
                <div class="author-description"><?php the_author_meta('description'); ?></div>
                <ul>
                        <li class="first">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">Xem bài của <?php the_author_meta('user_login'); ?> <span class="meta-nav">→</span></a>
                        </li>
                        <li>
                                <a target="_blank" class="ext-link" rel="external nofollow" href="<?php the_author_meta('user_url'); ?>" title="Ghé thăm trang chủ của <?php the_author_meta('user_login'); ?>">Blog</a>
                        </li>
                        <li>
                                <a target="_blank" class="ext-link" href="<?php echo get_the_author_meta( 'twitter' ); ?>" title="Theo dõi <?php the_author_meta('user_login'); ?> trên Twitter" rel="external nofollow">Twitter</a>
                        </li>
                        <li>
                                <a target="_blank" class="ext-link" href="<?php echo get_the_author_meta( 'facebook' ); ?>" title="Theo dõi <?php the_author_meta('user_login'); ?> trên Facebook" rel="external nofollow">Facebook</a>
                        </li>
                        <li>
                                <a target="_blank" class="ext-link" href="<?php echo get_the_author_meta( 'googleplus' ); ?>" title="Theo dõi <?php the_author_meta('user_login'); ?> trên Goolge Plus" rel="external nofollow">Google Plus</a>
                        </li>
                </ul>
        </div>
</div>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

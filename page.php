<?php get_header(); ?>
    	<div class="content cf">
    		<section class="blog-posts">
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

    			<article class="post cf" id="post-<?php the_ID(); ?>">
                    <div class="meta">
                        <div class="data">
                            <p><?php the_time( 'F j, Y' ); ?></p>
                        </div>
                    </div>
    				<div class="entry-content cf right">
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>

                        <?php the_content(); ?>
            
                        <div class="top-secret"></div>
                    </div><!-- end entry-content -->
    			</article>

    			<?php endwhile; ?>

            <?php else : ?>

                <h2>Nothing Found!</h2>

            <?php endif; ?>

    		</section><!-- end blog-posts -->

    		<?php get_sidebar(); ?>
    	</div><!-- end content -->
   <?php get_footer(); ?>
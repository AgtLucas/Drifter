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
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                        <?php the_content( 'Read More' ); ?>
            
                        <div class="top-secret"></div>
                    </div><!-- end entry-content -->
                    <div class="cat-tags">
                        <span class="cat-links">Categories: <?php the_category( ', ' ); ?></span>
                        <span class="tag-links"><?php the_tags(); ?></span>
                    </div>
    			</article>

    			<?php endwhile; ?>

            <?php else : ?>

                <h2>Nothing Found!</h2>

            <?php endif; ?>

                <section class="pagination cf">
                    <?php 
                        if ( function_exists( 'pagination' ) ) {
                            pagination( $additional_loop->max_num_pages );
                        }
                    ?>
                </section>
    		</section><!-- end blog-posts -->

    		<?php get_sidebar(); ?>
    	</div><!-- end content -->
   <?php get_footer(); ?>
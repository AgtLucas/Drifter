<aside>
	<div class="search">
        <h3>Search</h3> 
        <?php get_search_form(); ?>
    </div>
    
    <ul class="sidebar">
        <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar()) : ?>
            <li><!-- Stuffs... --></li>
        <?php endif; ?>
    </ul>    
</aside>
<?php get_header(); ?>
    <div class="container">        
        <h2>Search Results for: <?php echo get_search_query(); ?></h2>
        <?php get_template_part('includes/section', 'archive'); ?>
        
        <!-- Pagination -->
        <?php if (have_posts()) : ?>            
            <div class="pagination-wrapper mt-4">
                <?php the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Previous', 'sm-startup'),
                    'next_text' => __('Next &raquo;', 'sm-startup'),
                )); ?>
            </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
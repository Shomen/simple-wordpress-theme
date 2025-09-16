<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Sidebar</h5>
                    </div>
                    <div class="card-body">
                        <?php if (is_active_sidebar('sidebar')) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php else : ?>
                            <p class="text-muted">No widgets added to sidebar yet.</p>
                            <p class="small text-muted">Go to Appearance > Widgets to add widgets to this sidebar.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9 col-md-8">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php get_template_part('includes/section', 'blog'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
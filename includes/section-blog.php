<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article id="post-<?php the_ID(); ?>" <?php post_class('card shadow-sm mb-4'); ?>>
                    <!-- Post Header -->
                    <div class="card-header bg-transparent border-0 pt-4">
                        <h1 class="card-title h2 mb-3"><?php the_title(); ?></h1>
                        
                        <!-- Post Meta -->
                        <div class="text-muted small mb-3">
                            <span class="me-3">
                                <i class="fas fa-calendar-alt me-1"></i>
                                <?php echo get_the_date(); ?>
                            </span>
                            <span class="me-3">
                                <i class="fas fa-user me-1"></i>
                                <?php the_author(); ?>
                            </span>
                            <?php if (has_category()) : ?>
                                <span class="me-3">
                                    <i class="fas fa-folder me-1"></i>
                                    <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="card-img-top">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded-0')); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Post Content -->
                    <div class="card-body">
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- Post Tags -->
                    <?php if (has_tag()) : ?>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="text-muted small me-2">Tags:</span>
                                <?php the_tags('<span class="badge bg-secondary me-1">', '</span><span class="badge bg-secondary me-1">', '</span>'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </article>

                <!-- Post Navigation -->
                <nav class="row mt-4">
                    <div class="col-6">
                        <?php previous_post_link('%link', '<i class="fas fa-arrow-left me-2"></i>Previous Post', true); ?>
                    </div>
                    <div class="col-6 text-end">
                        <?php next_post_link('%link', 'Next Post<i class="fas fa-arrow-right ms-2"></i>', true); ?>
                    </div>
                </nav>

                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) :
                    echo '<div class="mt-5">';
                    comments_template();
                    echo '</div>';
                endif;
                ?>
            </div>
        </div>
<?php
    endwhile;
endif;
?>
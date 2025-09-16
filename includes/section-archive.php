<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <h3>
            <?php the_title(); ?>
        </h3>
        <?php
        the_excerpt();
        ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
        <hr>
<?php
    endwhile;
endif;
?>
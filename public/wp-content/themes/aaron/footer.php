<footer>
    <?php 

    $footer_query = new WP_Query( array("p" => 41) );
    if ($footer_query->have_posts() ):
        while ($footer_query->have_posts() ): $footer_query->the_post(); 

    ?>
    <div>
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
        <p><?php echo get_post_custom_values("Last Text")[0]; ?></p>
    </div>
    <a href="<?php echo get_post_custom_values("Right Link")[0]; ?>" id="privacy"><?php echo get_post_custom_values("Right Text")[0]; ?></a>
    <?php

        endwhile;
    endif;
    wp_reset_postdata();

    ?>
</footer>
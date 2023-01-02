<!--
    TODO: – Add title
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aaron G. Miller | Choreographer</title>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/style.css'>
    <meta name="description" content="Find your entrance level & book a workshop with Aaron">
    <meta name="keywords" content="choreographer, dance, workshops, aaron g miller, aaron, audition, salzburg">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <?php get_header(); ?>

    <main>

        <?php

            if (have_posts() && !is_front_page()) {
                while (have_posts()) {
                    the_post();
                    the_title();
                    the_content();
                }
            }
        ?>


        <?php if(is_front_page()): ?>

        <section id="workshops">

            <?php 

            $workshop_header_query = new WP_Query( array("p" => 11) );
            if ($workshop_header_query->have_posts() ):
                while ($workshop_header_query->have_posts() ): $workshop_header_query->the_post(); 

            ?>

            <p class="super-headline"><?php the_title(); ?></p>
            <h2 class="headline"><?php the_content(); ?></h2>
            
            <?php

                endwhile;
            endif;
            wp_reset_postdata();
           
            ?>

            <div class="workshop-grid">

                <?php 
                $i = 0;
                $level_query = new WP_Query( array("category_name" => "level", "order" => "ASC") );
                if ($level_query->have_posts() ):
                    while ($level_query->have_posts() ): $level_query->the_post(); 

                    if ($i == 0)
                    {
                        echo '<div class="leftSide leftSide3">';
                    } 
                    else if ($i == 1) 
                    {
                        echo '<div class="leftSide leftSide2">';
                    } 
                    else 
                    {
                        echo '<div class="leftSide leftSide1">';
                    }
                ?>
                    <div class="icon">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <p class="index"><?php echo get_post_custom_values("level")[0]; ?></p>
                    <div class="workshop-content">
                        <div>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?><p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button"><?php echo get_post_custom_values("Button Text")[0]; ?></a>
                    </div>
                    <div class="quote">
                        <img src="<?php echo get_template_directory_uri();?>/images/quote.svg" alt="quote sign">
                        <blockquote><?php echo get_post_custom_values("Level Slogan")[0]; ?></blockquote>
                    </div>
                </div>
                <div class="rightSide rightSide3">
                    <p class='apply'>Apply for an audition now!</p>
                </div>

               
                <div class="rightSide rightSide2">
                    <p class='apply'>Registration now open for everybody!</p>
                </div>

                <div class="rightSide rightSide1">
                    <p class='apply'>Registration now open for everybody!</p>
                </div>

                <?php

                    $i++;
                    endwhile;
                endif;
                wp_reset_postdata();
            
                ?>
            </div>
        </section>
        <section id="about">
            <?php 

            $about_query = new WP_Query( array("p" => 19) );
            if ($about_query->have_posts() ):
                while ($about_query->have_posts() ): $about_query->the_post(); 

            ?>

            <div id="about-image-box">
                <?php the_post_thumbnail(); ?>
            </div>
            <div id="about-box">
                <p class="super-headline"><?php echo get_post_custom_values("Super Headline")[0]; ?></p>
                <h2 class="headline"><?php the_title(); ?></h2>
                <?php the_content(); ?>

                <a href="<?php the_permalink(); ?>" class="button-black"><?php echo get_post_custom_values("Button Text")[0]; ?></a>
            </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
        
            ?>
        </section>
        <section id="news">
            <?php 

            $news_header_query = new WP_Query( array("p" => 30) );
            if ($news_header_query->have_posts() ):
                while ($news_header_query->have_posts() ): $news_header_query->the_post(); 

            ?>

            <p class="super-headline"><?php the_title(); ?></p>
            <h2 class="headline"><?php the_content(); ?></h2>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();
        
            ?>
            <div id="outer-center-box">
                <div id="article-box">

                    <?php 
                    $news_query = new WP_Query( array("category_name" => "news", "order" => "DESC", 'posts_per_page' => 3) );
                    if ($news_query->have_posts() ):
                        while ($news_query->have_posts() ): $news_query->the_post(); 
                    ?>
                    
                    <article>
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail(); ?>
                        <div class="news-box">
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>" class="button-black"><?php echo get_post_custom_values("Button Text")[0]; ?></a>
                        </div>
                    </article>

                    <?php

                        endwhile;
                    endif;
                    wp_reset_postdata();

                    ?>

                </div>
            </div>
        </section>

        <?php endif; ?>
    </main>

    <?php get_footer(); ?>
    <script src='<?php echo get_template_directory_uri();?>/main.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            // MainNav.init();
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>
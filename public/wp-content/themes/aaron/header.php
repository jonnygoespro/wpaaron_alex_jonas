<header>
    <div class="navigation">
        <a href="/">
            <h1><span class="name">Aaron G. Miller</span> | Choreographer</h1>
        </a>
        <nav id="mainnav">
            <button id="hamburger" class="closed">
                <span class="line-1"></span>
                <span class="line-3"></span>
            </button>
            <ul>
                <li><a href="#workshops">Workshops</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#news">News</a></li>
            </ul>
        </nav>
    </div>
    <div class="heroContainer">

        <?php 

        $hero_query = new WP_Query( array("p" => 9) );
        if ($hero_query->have_posts() ):
            while ($hero_query->have_posts() ): $hero_query->the_post(); 

        ?>

        <h2><?php the_title(); ?></h2>
        <a href="#" class="button"><?php echo get_post_custom_values('Button Text')[0] ?></a>

        <?php

            endwhile;
        endif;
        wp_reset_postdata();
        
        ?>


    </div>
</header>
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
            <h2>I.</h2>
            <a href="#" class="button">Book Workshop</a>
        </div>
    </header>

    <main>
        <section id="workshops">
            <p class="super-headline">Find your entrance level & book a workshop with Aaron</p>
            <h2 class="headline">If you never start, you will never know.</h2>

            <div class="workshop-grid">
                <div class="leftSide leftSide3">
                    <img class="icon" src="<?php echo get_template_directory_uri();?>/images/stretch.svg"
                        alt='Icon showing dancer stretching her leg up to her nose.'>
                    <p class="index">3</p>
                    <div class="workshop-content">
                        <div>
                            <h3>As pro as you can get</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            <p>
                        </div>
                        <a href="#" class="button">Book Workshop</a>
                    </div>
                    <div class="quote">
                        <img src="<?php echo get_template_directory_uri();?>/images/quote.svg" alt="quote sign">
                        <blockquote>Respect your talent!</blockquote>
                    </div>
                </div>
                <div class="rightSide rightSide3">
                    <p class='apply'>Apply for an audition now!</p>
                </div>

                <div class="leftSide leftSide2">
                    <img class="icon" src="<?php echo get_template_directory_uri();?>/images/up.svg"
                        alt='Icon showing dancer stretching her leg up to her nose.'>
                    <p class="index">2</p>
                    <div class="workshop-content">
                        <div>
                            <h3>Aspire more</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            <p>
                        </div>
                        <a href="#" class="button">Book Workshop</a>
                    </div>
                    <div class="quote">
                        <img src="<?php echo get_template_directory_uri();?>/images/quote.svg" alt='quote sign'>
                        <blockquote>Thank yourself for levelling up now!</blockquote>
                    </div>
                </div>
                <div class="rightSide rightSide2">
                    <p class='apply'>Registration now open for everybody!</p>
                </div>

                <div class="leftSide leftSide1">
                    <img class="icon" src="<?php echo get_template_directory_uri();?>/images/rise.svg"
                        alt='Icon showing dancer stretching her leg up to her nose.'>
                    <p class="index">1</p>
                    <div class="workshop-content">
                        <div>
                            <h3>Learn the Basics profoundly</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt
                                ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            <p>
                        </div>
                        <a href="#" class="button">Book Workshop</a>
                    </div>
                    <div class="quote">
                        <img src="<?php echo get_template_directory_uri();?>/images/quote.svg" alt='quote sign'>
                        <blockquote>Fall in love with dancing!</blockquote>
                    </div>
                </div>
                <div class="rightSide rightSide1">
                    <p class='apply'>Registration now open for everybody!</p>
                </div>
            </div>
        </section>
        <section id="about">
            <div id="about-image-box">
                <img src="<?php echo get_template_directory_uri();?>/images/Cheng_Tsung_Lung_cut_740px.jpg" alt="Profile-Picture of Aaron G. Miller" sizes="740px"
                    srcset="<?php echo get_template_directory_uri();?>/images/Cheng_Tsung_Lung_cut_740px.jpg 740w,
                    <?php echo get_template_directory_uri();?>/images/Cheng_Tsung_Lung_cut_1400px.jpg 1400w,
                    <?php echo get_template_directory_uri();?>/images/Cheng_Tsung_Lung_cut_2800px.jpg 2800w" />
            </div>
            <div id="about-box">
                <p class="super-headline">Why I teach</p>
                <h2 class="headline">Hi, I'm Aaron!</h2>
                <p class="about-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                    eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <p class="about-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                    eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    takimata sanctus est Lorem ipsum dolor sit amet.</p>

                <a href="#" class="button-black">Learn more</a> <!-- styled as button -->
            </div>
        </section>
        <section id="news">
            <p class="super-headline">Making waves since 2004</p>
            <h2 class="headline">In the News</h2>
            <div id="outer-center-box">
                <div id="article-box">
                    <article>
                        <h3>Sydney Dance Festival 2022</h3>
                        <img src="<?php echo get_template_directory_uri();?>/images/dance_festival_performance_740px_cut"
                            alt="<?php echo get_template_directory_uri();?>/Aaron performing at the Sydney dance festival 2022" sizes="740px" srcset="<?php echo get_template_directory_uri();?>/images/dance_festival_performance_740px_cut.jpg 740w,
                            <?php echo get_template_directory_uri();?>/images/dance_festival_performance_1400px_cut.jpg 1400w,
                            <?php echo get_template_directory_uri();?>/images/dance_festival_performance_2800px_cut.jpg 2800w" />
                        <div class="news-box">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                            </p>
                            <a href="#" class="button-black">Read more</a>
                        </div>
                    </article>

                    <article>
                        <h3>"Dance Pool" 2023 sold out!</h3>
                        <img src="<?php echo get_template_directory_uri();?>/images/dance_pool_group_pic_740px_cut.jpg"
                            alt="Aaron performing at the Sydney dance festival 2022" sizes="740px" srcset="<?php echo get_template_directory_uri();?>/images/dance_pool_group_pic_740px_cut.jpg 740w,
                            <?php echo get_template_directory_uri();?>/images/dance_pool_group_pic_1400px_cut.jpg 1400w,
                            <?php echo get_template_directory_uri();?>/images/dance_pool_group_pic_2800px_cut.jpg 2800w" />

                        <div class="news-box">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                            </p>
                            <a href="#" class="button-black">Read more</a>
                        </div>
                    </article>

                    <article>
                        <h3>New London Workshop Oct. 2025</h3>
                        <img src="<?php echo get_template_directory_uri();?>/imagesworkshop_snapshot_740px_cut.jpg"
                            alt="Aaron performing at the Sydney dance festival 2022" sizes="740px" srcset="<?php echo get_template_directory_uri();?>/images/workshop_snapshot_740px_cut.jpg 740w,
                            <?php echo get_template_directory_uri();?>/images/workshop_snapshot_1400px_cut.jpg 1400w,
                            <?php echo get_template_directory_uri();?>/images/workshop_snapshot_2800px_cut.jpg 2800w" />
                        <div class="news-box">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                            </p>
                            <a href="#" class="button-black">Read more</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <h4>Thank you for your interest in Art!</h4>
            <p>© 2004 – 2023 Aaron G. Miller</p>
            <p>Yoga Icons by Vitaly Gorbachev from <a
                    href="https://www.flaticon.com/authors/vitaly-gorbachev">www.flaticon.com</a></p>
        </div>
        <a href="#" id="privacy">Imprint & Privacy</a>
    </footer>
    <script src='<?php echo get_template_directory_uri();?>/main.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            // MainNav.init();
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>
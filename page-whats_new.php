<?php
/**
 * User: vy4eslavik
 * Date: 10.11.13
 *
 * Template Name: Whats New
 */

get_header();
?>
    <article class="generalArticle">

        <?php

        wp_nav_menu(array(
                'menu_class' => 'general_menu',
                'container' => 'nav',
                'depth' => 1)
        );
        //  Get latest
        $args = array(
            'numberposts' => 1,
            'category_name' => 'Articles',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'published'
        );
        //  Get last Articles
        $lastArticle = get_posts($args)[0];
        //  Get last Blog
        $args['category_name'] = 'Blogs';
        $lastBlog = get_posts($args)[0];
        //  Get last Video
        $args['category_name'] = 'Videos';
        $lastVideo = get_posts($args)[0];

        ?>

        <div class="news_topCol">
            <section class="latest blog">
                <div class="spacer"></div>
                <?php echo get_the_post_thumbnail($lastBlog->ID, '', 'class=preview'); ?>
                <article>
                    <?php
                    echo ('<h3>'.$lastBlog->post_title).'</h3>';
                    contentThumb($lastBlog->post_content);
                    ?>
                </article>
            </section>
        </div>

        <section class="timeLine">
            <div class="prev"></div>

            <a class="date article" href="<?php echo $lastArticle->guid ?>">
                <span>
                    <?php dateReformat($lastArticle->post_date) ?>
                </span>
            </a>

            <div class="between first"></div>

            <a class="date blog" href="<?php echo $lastBlog->guid ?>">
                <span>
                    <?php dateReformat($lastBlog->post_date) ?>
                </span>
            </a>

            <div class="between second"></div>

            <a class="date video" href="<?php echo $lastVideo->guid ?>">
                <span>
                    <?php dateReformat($lastVideo->post_date) ?>
                </span>
            </a>

            <div class="next"></div>
        </section>

        <div class="news_bottomCol">

            <section class="latest article">
                <div class="spacer"></div>
                <?php echo get_the_post_thumbnail($lastArticle->ID, '', 'class=preview'); ?>
                <article>
                    <?php
                    echo ('<h3>'.$lastArticle->post_title).'</h3>';
                    contentThumb($lastArticle->post_content);
                    ?>
                </article>
            </section>


            <div class="spacer"></div>
            <section class="latest video">
                <div class="spacer"></div>
                <?php echo get_the_post_thumbnail($lastVideo->ID, '', 'class=preview'); ?>
                <article>
                    <?php
                    echo ('<h3>'.$lastVideo->post_title).'</h3>';
                    contentThumb($lastVideo->post_content);
                    ?>
                </article>
            </section>
        </div>
    </article>
<?php
get_footer();
?>
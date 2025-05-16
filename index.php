<?php
get_header();
?>
 <div id="content" class="site-content">
<div id="primary" class="content-area">
<main id="main" class="site-main">
    <h1>Blog</h1>
    <div class="container">
        <div class="nlog-items">
            <?php
             if(have_posts()):
                while(have_posts()): the_post();
               // get_template_part('parts/content');
             endwhile;
            ?>
            <div class="wpdevs-pagination">
                <div class="pages new"> 
                    <?php previous_post_link("<<Newer posts");
                    ?>
                </div>
                <div class="pages old">
                    <?php next_posts_link("older posts>>");
                    ?>
                </div>
            </div>
            <?php
            else:
                ?>
                <p>Nothing yet to be displayed!</p>
                <?php endif;?>
        </div>
    </div>
</main>

 </div>

 </div>
<?php 
get_footer();
?>
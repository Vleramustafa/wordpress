<?php get_header()?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <div class="container">
            <div class="page-item">
                <?php
                while(have_post()):the_post( );
                get_template_part('parts/content','page');

                if(comments_open() || get_comments_number()){
                    comments_template( );
                }
            endwhile;
                ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer():?>
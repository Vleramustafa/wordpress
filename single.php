<?php get_header();?>

<div id="primary">
    <div id="main">
        <div class="container">
            <?php
            while(have_post( )):
                the_post();
                get_template_part('parts/content','single');
            ?>
            <div class="wpdwvs-pagination">
                <div class="page nect">
                    <?php next_post_link('&laquo,&link');?>
                </div>
                <div class="page previous">
                    <?php previous_post_link('&link,&raquo');?>
                </div>
            </div>
            <?php
            if(comments_open()|| get_comments_number()){
                comments_template();
            }
        endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer();?>
<article>
    <?php if (has_post_thumbmail()):?>
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('large');?></a>
        <?php endif;?>
        <h3><a herf="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <div class="meta-info">
            <p>
                by <span><?php the_author_posts_link();?></span>
                <?php if(has_category()):?>
                    categories:<span><?php the_category(' ');?></span>
                    <?php endif;?>
                    tags:<?php the_tags('',',');?>
                    <?php endif;?>

            </p>

            <p><span><?php echo get_the_date();?></p>
        </div>
        <?php the_excerpt();?>
</article>
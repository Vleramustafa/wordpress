<article>
    <h2><a herf="<?php the_permalink(); ?>"> <?php the_title();?></a></h2>
    <?php
        if(has_post_thumbmail()):?>
        <a herf="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275,275));?></a>
        <?php endif;?>

        <div class="meta-info">
            <p>Posted in <?php the_category(' ');?> by <?php the_author_posts_link();?> </p>
            <?php if(has_category()):?>
                <p>Categories: <?php the category('');?></p>
                
                <?phpif(has_tag()): ?>
                    <P>tags:<?php the_tags(''.',');?></P>
                    <?php endif:?></p>
        
        </div>

        <?php the_excerpt();?>





</article>
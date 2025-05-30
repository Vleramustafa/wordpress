<article id="post-<?php the_ID();?>"<?php post_class();?>>
<header>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2>
    <?php if('post' ==get_post_type()):?>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>
            <?php if(has_category()):?>


           

        </div>
</header>

</article>
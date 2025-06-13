<article id="post-<?php the_ID();?>" <?php post_class();?>
    <header>
        <h1><?php the_tittle();?></h1>
        <div class="meta-infp">
            <p>Posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>
            <?php if(has_category()):?>
                <p>Categories: <?the_category('');?></p>
                <?php endif;?>
                <?php if(has_tag()):?>
                    <p>Tags:<?php the_tags('',',');?>
                <?php endif;?></p>

                </div>

        </header>
        <div class="content">
            <?php the_content();?>
            <?php wp_link_pages();?>

        </div>

    </header>
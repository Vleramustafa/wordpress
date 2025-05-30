<article>
<?php if(has_post_thumbnail()):?>
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('large'):?></a>
<?php endif; ?>
<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<div class="meta-info">
    
    <p>
          by <span><?php the_author_posts_links();?></span>
          <?php if (has_category()): ?>
            <span>in <?php the_category(', '); ?></span>
            <?php endif; ?>
            <?php if (has_tag()): ?>
            <span>tags: <?php the_tags('', ', '); ?></span>
            <?php endif; ?>
    </p>
     <p><span><?php echo get_the_date();?></span></p>
</div>
<?php the_excerpt(); ?>
</article>
<?php
/**
 * the template for displaying comments
 * 
 * the area of thr page that contains both current comments
 * 
 * @package Wordpress
 * @subpackage WP Devs
 * @since WP Devs 1.0
 */

 /*
 *if the current post is protected by a password and
 *the visitor has not yet entered the password we will
 *return early without loading the comments.
 */

 if(post_password_required(  )){
    return;
 }
 ?> 

 <div id="comments" class="coments-area">
    <?php if(have_comments(  ));?>
    <h2 class="comments-title">
        <?php
        $comments_number=get_comments_number();
        if('1'===$comments_number){
            printf(_x('One thought on &ldquo;%s&rdquo;','comments title','twentysixteen'),get_the_title(  );)
        }else{
            printf(
                _nx(
                    '1%$2 thought on &ldquo;%2&rdquo;',
                    '1%$s thought on $ldquo;%2&rdquo;',
                    $comments_number,
                    'comments title'
                    'twentysixteen'
                ),
                number_format_i18n($comments_number),
                get_the_title(  )
            );
        }
        ?>
    </h2>
    <?php the_comments_navigation(  );?>
    <ol class="comments-list">
        <?php
        wp_list_comments(
            array(
                'style'=>'ol',
                'short_ping'=>true,
                'avatar_size'=>42,
            )
            );
            ?>
    </ol>

    <?php the_comments_navigation();?>
    <?php endif;?> 

<?php
if(! comments_open( )&& get_comments_number(  ) && post_type_supports( get_post_type(  ),'comments'));
?>

<p class="no-comments">
    <?php _e('Comments are closed.','twentysixteen');?>

</p>

<?php
comment_form(
    array(
        'title_reply_before'=>'<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'=>'</h2>'
    )
    );
    ?>

 </div>
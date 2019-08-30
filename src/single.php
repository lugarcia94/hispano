<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auaha
 */

get_header(); ?>
<div class="content container container__full">
    <div class="left--posts">
 
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $my_postid = $post->ID; ?>
            <div class="title__single">
                <?php the_title(); ?>
            </div>
            <div class="coments__date">
                <div class="data--coments">
                    <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></span>
                    <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                </div>
            </div>
            
            <div class="texto__img"><?php the_post_thumbnail(); ?></div>
            <div class="sobre__text">
                <?php  
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </div>
             
            <div class="comentarios__form">
                <h1>Comentários</h1>
                <?php comment_form(); ?>
                    <?php
                        $postID = $post->ID;
                        $comment_array = get_approved_comments($postID);
                        foreach ($comment_array as $comment) {
                            echo('<p class="coments-p">
                            <span class="comentario-autor">
                            <span class="autor-coment">' . $comment->comment_author . '</span>
                            <span class="date-coment">' . date('j-m-Y', strtotime($comment->comment_date)) . '</span> 
                            </span>
                            <span class="comentario-autor_text">' . $comment->comment_content . '</span></p>');
                        }
                    ?>
            </div>

        <?php endwhile; endif; ?>
    </div>
 

</div>

<?php get_footer(); ?>
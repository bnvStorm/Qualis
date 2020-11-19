<?

class CustomCommentWalker extends Walker_Comment
{
    /**
     * Outputs a comment in the HTML5 format.
     *
     * @param WP_Comment $comment Comment to display.
     * @param int $depth Depth of the current comment.
     * @param array $args An array of arguments.
     * @see wp_list_comments()
     *
     * @since 3.6.0
     *
     */
    protected function html5_comment($comment, $depth, $args)
    {
        $templatePath = get_template_directory_uri();
        $tag = ('div' === $args['style']) ? 'div' : 'li';

        $commenter = wp_get_current_commenter();
        $show_pending_links = !empty($commenter['comment_author']);

        if ($commenter['comment_author_email']) {
            $moderation_note = __('Your comment is awaiting moderation.');
        } else {
            $moderation_note = __('Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.');
        }
        ?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" class="reviews__out mb-md-5 d-md-block d-none">

        <?php
        if ($depth == 1) { ?>
            <div class="reviews__content">
                <div class="col-12 border-bottom border-dark d-sm-flex align-items-center pb-sm-4 pb-2 mb-4 px-0">
                    <div class="col-6 reviews__user-name d-flex align-items-center mb-sm-0 mb-1 px-0">
                        <noscript>
                            <img src="<?= $templatePath ?>/restyle/img/SVG/user-blue.svg" class="icon" height="30px"
                                 alt="SVG">
                        </noscript>
                        <img src="<?= $templatePath ?>/restyle/img/SVG/user-blue.svg"
                             data-src="<?= $templatePath ?>/restyle/img/SVG/user-blue.svg" class="icon lazyloaded"
                             height="30px" alt="SVG">
                        <div class="user-name  text font-weight-demi ml-2"><?= $comment->comment_author ?></div>
                    </div>
                    <div class="col-6 reviews__user-date d-flex justify-content-end align-items-center px-0">
                        <noscript>
                            <img src="<?= $templatePath ?>/restyle/img/SVG/clock-grey.svg" class="icon" height="30px"
                                 alt="SVG">
                        </noscript>
                        <img src="<?= $templatePath ?>/restyle/img/SVG/clock-grey.svg"
                             data-src="<?= $templatePath ?>/restyle/img/SVG/clock-grey.svg" class="icon lazyloaded"
                             height="30px" alt="SVG">
                        <span class="time-date text color-gray ml-2"><?= $comment->comment_date_gmt ?></span></div>
                </div>
                <p class="reviews__from-user text"><?= $comment->comment_content ?></p>
                <!--            --><?php
                /*            if ( '1' == $comment->comment_approved || $show_pending_links ) { comment_reply_link(
                                    array_merge(
                                        $args,
                                        array(
                                            'add_below' => 'div-comment',
                                            'depth'     => $depth,
                                            'max_depth' => $args['max_depth'],
                                            'before'    => '<div class="text-right"><div class="reviews__to-answer d-inline-block text color-gray ">',
                                            'after'     => '</div></div>',
                                        )
                                    )
                                );
                            } */ ?>
            </div>
        <?php } else {
            ?>
            <div class="reviews__answer-content w-100 mt-4">
                <div class="reviews__answer text bg-gray w-75 ml-auto"><p
                            class="m-0"><?= $comment->comment_content ?></p></div>
            </div>
            <?php
        }
    }
}
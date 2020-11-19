<?php
/**
 * The template file for displaying the comments and comment form for the
 * Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if (post_password_required()) {
    return;
}

function custom_comment_form($args = array(), $post_id = null)
{
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';

    $req = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');
    $fields = array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
            '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
        'email' => '<p class="comment-form-email"><label for="email">' . __('Email') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
            '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
        'url' => '<p class="comment-form-url"><label for="url">' . __('Website') . '</label>' .
            '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>',
    );

    $required_text = sprintf(' ' . __('Required fields are marked %s'), '<span class="required">*</span>');
    $defaults = array(
        'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
        'logged_in_as' => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
        'comment_notes_before' => '<p class="comment-notes">' . __('Your email address will not be published.') . ($req ? $required_text : '') . '</p>',
        'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf(__('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s'), ' <code>' . allowed_tags() . '</code>') . '</p>',
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'title_reply' => __('Leave a Reply'),
        'title_reply_to' => __('Leave a Reply to %s'),
        'cancel_reply_link' => __('Cancel reply'),
        'label_submit' => __('Post Comment'),
    );

    $args = wp_parse_args($args, apply_filters('comment_form_defaults', $defaults));

    ?>
    <?php if (comments_open($post_id)) : ?>
    <?php do_action('comment_form_before'); ?>

    <section class="add-reviews bg-aqua color-white position-relative pt-md-5 pt-3">
        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
            <?php echo $args['must_log_in']; ?>
            <?php do_action('comment_form_must_log_in_after'); ?>
        <?php else : ?>
        <div class="container qualis-container">
            <div class="row">
                <div class="col-md-12 text-center"><h2 class="title mb-3">Добавить отзыв</h2>
                    <h3 class="add-reviews__subtitle ff-Avenir-Next-Cyr fs-18">Ваш адрес email не будет
                        опубликован.
                        Обязательные поля помечены *</h3></div>
                <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post"
                      id="<?php echo esc_attr($args['id_form']); ?>" class="form w-100 mt-md-4 mt-2">
                    <div class="col-md-12 d-md-flex p-0">
                        <div class="col-md-6 text-center mb-md-0 mb-4">
                            <input id="author" class="required form-control bg-user-blue text"
                                   name="author" type="text" value="" placeholder="Имя*">
                        </div>

                        <div class="col-md-6 text-center">
                            <input id="email" name="email" type="text" value=""
                                   class="required form-control bg-email-blue text"
                                   placeholder="E-mail*">
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-4">
                        <textarea id="textaria" name="comment" aria-required="true"
                                  class="required form-control bg-firm-element-3 text h-200px pt-3"
                                  placeholder="Текст комментария*"></textarea>
                    </div>
                    <div class="col-md-12 text-center my-md-5 my-4">
                        <input type="hidden" name="comment_post_ID" value="<?=$post_id?>" id="comment_post_ID">
                        <input name="submit"
                               class="form__btn form__btn-pink ff-Avenir-Next-Cyr fs-18 font-weight-bold text-uppercase mb-4"
                               type="submit"
                               id="<?php echo esc_attr($args['id_submit']); ?>"
                               value="<?php echo esc_attr($args['label_submit']); ?>"/>
                        <p class="ff-Avenir-Next-Cyr fs-12">*Нажимая на кнопку, вы даете <a href="/"
                                                                                            class="text-underline color-white">Согласие
                                на обработку персональных данных</a></p></div>
                </form>
            </div>
            <?php endif; ?>
    </section>

    <?php do_action('comment_form_after'); ?>
<?php else : ?>
    <?php do_action('comment_form_comments_closed'); ?>
<?php endif; ?>
    <?php
}

if ($comments) {

    ?>
    <section class="reviews position-relative py-md-5 py-3">
        <div class="container qualis-container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title mb-md-5 mb-3  text-center">Отзывы</h3>
                    <?
                    wp_list_comments(
                        array(
                            'walker' => new CustomCommentWalker(),
                            'avatar_size' => 120,
                            'style' => 'div',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
}

if (comments_open() || pings_open()) {
    custom_comment_form();

} elseif (is_single()) {

    if ($comments) {
        echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
    }

    ?>

    <div class="comment-respond" id="respond">

        <p class="comments-closed"><?php _e('Comments are closed.', 'twentytwenty'); ?></p>

    </div><!-- #respond -->

    <?php
}

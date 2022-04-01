<?php

	/**
	 * COMMENTS TEMPLATE
	 */

	if('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die('Please do not load this page directly.');

	if(post_password_required()){
		return;
	}

	if(comments_open() != false):

?>

	<section class="post-comments-body comments-body">

		<a class="comments-anchor" id="comments"></a>

		<div class="comments-main">

			<?php if(have_comments()): ?>

				<ul class="comments-wrapper">
					<?php wp_list_comments('type=comment&callback=manas_comment_format'); ?>
				</ul>

				<?php previous_comments_link(); ?>
				<?php next_comments_link(); ?>

			 <?php else : ?>
				<?php if(comments_open()): ?>

					<div class="comments-wrapper">
						<div class="comments-nocomments"><i class="fa fa-info"></i> <?php esc_html_e('There are currently no comments.', 'manas'); ?></div>
					</div>

				<?php endif; ?>
			<?php endif; ?>

			<?php

				if(comments_open()){
					$manas_comment_args = array(
						'id_form' => 'commentform',
						'id_submit' => 'submit',
						'title_reply' => '',
						'title_reply_to' => '<div class="notification"><i class="fa fa-comments-o"></i>' . esc_html__('Leave a Reply to', 'manas') . ' %s' . '</div>',
						'cancel_reply_link' => esc_html__('Cancel Reply', 'manas'),
						'label_submit' => esc_html__('Post Comment', 'manas'),
						'comment_field' => '<textarea placeholder="' . esc_attr__('Add your comment here', 'manas') . '..." name="comment" class="commentbody" id="comment" rows="5" tabindex="1"></textarea>',
						'comment_notes_after' => '',
						'comment_notes_before' => '',
						'fields' => apply_filters('comment_form_default_fields', array(
							'author' => '<input type="text" placeholder="' . esc_attr__('Name', 'manas') . ' ' . ($req ? '(' . esc_attr__('Required', 'manas') . ')' : '') . '" name="author" id="author" value="' . esc_attr($comment_author) . '" size="22" tabindex="2" ' . ($req ? "aria-required='true'" : '' ). ' />',
							'email' => '<input type="text" placeholder="' . esc_attr__('Email', 'manas') . ' ' . ($req ? '(' . esc_attr__('Required', 'manas') . ')' : '') . '" name="email" id="email" value="' . esc_attr($comment_author_email) . '" size="22" tabindex="3" ' . ($req ? "aria-required='true'" : '' ). ' />',
							'url' => '<input type="text" placeholder="' . esc_attr__('Website URL', 'manas') . '" name="url" id="url" value="' . esc_attr($comment_author_url) . '" size="22" tabindex="4" />'
							)
						)
					);
					comment_form($manas_comment_args);
				}

			?>

		</div>

		<?php get_template_part('layouts/footer'); ?>

	</section>

<?php endif; ?>

<?php
/*
 *
 */

?>

	<div class="fixed-footer animated fadeIn active">
		<div class="fixed-footer__avatar" style="background-image: url(<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 35 ) ); ?>);"></div><!-- /.avatar -->

		<div class="fixed-footer__content">
			<?php sj_posted_on(); ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'sj' ) );
				if ( $categories_list ) :
			?>
			<p class="category-list hidden-xs hidden-sm">
				<?php printf( __( '%1$s', 'sj' ), $categories_list ); ?>
			</p>
			<?php endif;
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'sj' ) );
				if ( $tags_list ) :
			?>
			<p class="tags-list hidden-xs hidden-sm">
				<?php printf( __( '%1$s', 'sj' ), $tags_list ); ?>
			</p>
			<?php endif; ?>
		</div><!-- /.content -->

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fixed-footer__btn hidden-sm hidden-xs hidden-md"><?php _e( 'Back to homepage', 'sj' ); ?></a>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<a href="#comments" class="fixed-footer__btn fixed-footer__btn--red scroll-to-comments"><?php echo comments_number( __( 'Leave a comment', 'sj' ), __( '1 comment', 'sj' ), __( '% comments', 'sj' ) ); ?></a>
		<?php endif; ?>
	</div><!-- /.fixed footer -->

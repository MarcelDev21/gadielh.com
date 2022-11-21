<?php
/**
 * Register form template
 */
$username = ! empty( $_POST['username'] ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : '';
$email    = ! empty( $_POST['email'] ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : '';
?>
<form method="post" class="lakit-register">

	<p class="lakit-register__row">
		<label class="lakit-register__label" for="lakit_username"><?php echo $settings['label_username']; ?></label>
		<input type="text" class="lakit-register__input" name="username" id="lakit_username" value="<?php echo $username; ?>" placeholder="<?php echo $settings['placeholder_username']; ?>"/>
	</p>

	<p class="lakit-register__row">
		<label  class="lakit-register__label"  for="lakit_email"><?php echo $settings['label_email']; ?></label>
		<input type="email" class="lakit-register__input" name="email" id="lakit_email" value="<?php echo $email; ?>" placeholder="<?php echo $settings['placeholder_email']; ?>"/>
	</p>

	<p class="lakit-register__row">
		<label  class="lakit-register__label" for="lakit_password"><?php echo $settings['label_pass']; ?></label>
		<input type="password" class="lakit-register__input" name="password" id="lakit_password" placeholder="<?php echo $settings['placeholder_pass']; ?>"/>
	</p>

	<?php if ( 'yes' === $settings['confirm_password'] ) : ?>

		<p class="lakit-register__row">
			<label  class="lakit-register__label" for="lakit_password_confirm"><?php echo $settings['label_pass_confirm']; ?></label>
			<input type="password" class="lakit-register__input" name="password-confirm" id="lakit_password_confirm" placeholder="<?php echo $settings['placeholder_pass_confirm']; ?>"/>
			<?php echo '<input type="hidden" name="lakit_confirm_password" value="true">'; ?>
		</p>

	<?php endif; ?>

	<?php do_action( 'lakit_register_form' ); ?>

	<p class="lakit-register__row lakit-register-submit">
		<?php
			wp_nonce_field( 'lakit-register', 'lakit-register-nonce' );
			printf( '<input type="hidden" name="lakit_redirect" value="%s">', $redirect_url );
		?>
		<button type="submit" class="lakit-register__submit button" name="register"><?php
			echo $settings['label_submit'];
		?></button>
	</p>

</form>
<?php
include $this->_get_global_template( 'messages' );

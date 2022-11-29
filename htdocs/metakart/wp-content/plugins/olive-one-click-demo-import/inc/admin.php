<?php
function olive_one_click_demo_import_maybe_redirect_to_getting_started() {
	if ( ! get_transient( 'olive_one_click_demo_import_activation_redirect' ) ) {
		return;
	}

	if ( wp_doing_ajax() ) {
		return;
	}

	delete_transient( 'olive_one_click_demo_import_activation_redirect' );

	if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
		return;
	}

	wp_safe_redirect( admin_url( 'themes.php?page=olive-one-click-demo-import' ) );

	exit;
}
add_action( 'admin_init', 'olive_one_click_demo_import_maybe_redirect_to_getting_started' );

function olive_one_click_demo_import_activation( $network_wide ) {
	set_transient( 'olive_one_click_demo_import_activation_redirect', true, MINUTE_IN_SECONDS );
}

register_activation_hook( OLIVE_ONE_CLICK_DEMO_IMPORT_BASE_FILE, 'olive_one_click_demo_import_activation' );

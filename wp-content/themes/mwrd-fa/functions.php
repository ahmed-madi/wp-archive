<?php

add_action('init', 'create_roles');

function create_roles() {
	global $wp_roles;  // Delcaring roles and collecting the author role capability here.
	if ( ! isset( $wp_roles ) )
		$wp_roles = new WP_Roles();

	$adm = $wp_roles->get_role('author');
	//Adding a 'new_role' with all admin caps
	$wp_roles->add_role('emp-public', 'مشرف', $adm->capabilities);
	$wp_roles->add_role('emp-private', 'موظف', $adm->capabilities);
}


add_action( 'init', 'create_custom_tax' );
function create_custom_tax() {

	$labels = array(
		'name'              => _x( 'المجلدات', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'المجلد', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'البجث', 'textdomain' ),
		'all_items'         => __( 'كل المجلدات', 'textdomain' ),
		'parent_item'       => __( 'المجلد الأب', 'textdomain' ),
		'parent_item_colon' => __( 'المجلد الأب :', 'textdomain' ),
		'edit_item'         => __( 'تعديل المجلد', 'textdomain' ),
		'update_item'       => __( 'تحديث المجلد', 'textdomain' ),
		'add_new_item'      => __( 'اضافة مجلد جديد', 'textdomain' ),
		'menu_name'         => __( 'المجلدات', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'capabilites'       => array(
			'manage_terms'  => 'upload_files',
			'edit_terms'    => 'upload_files',
			'delete_terms'  => 'remove_users',
			'assign_terms'  => 'upload_files'
		)
	);

	register_taxonomy( 'folder','attachment', $args );


	$labels2 = array(
		'name'              => _x( 'الكلمات الدلالية', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'الكلمة الدلالية', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'البجث', 'textdomain' ),
		'all_items'         => __( 'كل الكلمات الدلالية', 'textdomain' ),
		'edit_item'         => __( 'تعديل الكلمة الدلالية', 'textdomain' ),
		'update_item'       => __( 'تحديث الكلمة الدلالية', 'textdomain' ),
		'add_new_item'      => __( 'اضافة كلمة دلالية جديدة', 'textdomain' ),
		'menu_name'         => __( 'الكلمات الدلالية', 'textdomain' ),
	);

	$args2 = array(
		'hierarchical'      => false,
		'labels'            => $labels2,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'capabilites'       => array(
			'manage_terms'  => 'upload_files',
			'edit_terms'    => 'upload_files',
			'delete_terms'  => 'remove_users',
			'assign_terms'  => 'upload_files'
		)

	);

	register_taxonomy( 'media_tag','attachment', $args2 );
}


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo123.png);
            height:120px;
            width:120px;
            background-size: 120px 120px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
        #login {
            background: #fff;
            margin-top: auto;
            margin-top: 8% !important;
            padding: 30px 0 !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function get_folder_by_search($search_text){

	$terms = get_terms( array(
		'taxonomy' => 'folder',
		'hide_empty' => false,
		'name__like'    => $search_text
	) );

		foreach ($terms as $term) {
			?>
			<div class="col-sm-4 col-lg-2">
				<a class="l-shadow bg-white statics-block" href="<?php echo get_term_link( $term, 'folder' )?>">
					<div class="icon">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="64px" height="58px">
							<path fill-rule="evenodd"  fill="rgb(63, 185, 128)"
							      d="M58.617,16.204 L58.617,15.546 C58.617,12.258 55.925,9.567 52.635,9.567 L37.682,9.567 C35.708,9.567 34.093,7.654 34.093,5.680 L34.093,5.979 C34.093,2.691 31.402,-0.000 28.112,-0.000 L5.981,-0.000 C2.692,-0.000 0.000,2.691 0.000,5.979 L0.000,52.021 C0.000,55.309 2.692,58.000 5.981,58.000 L5.981,58.000 L58.019,58.000 C61.308,58.000 64.000,55.309 64.000,52.021 L64.000,22.124 C64.000,19.014 61.607,16.503 58.617,16.204 ZM5.981,55.608 C4.008,55.608 2.393,53.994 2.393,52.021 L2.393,5.979 C2.393,4.006 4.008,2.392 5.981,2.392 L28.112,2.392 C30.086,2.392 31.701,4.006 31.701,5.979 C31.701,9.268 34.393,11.959 37.682,11.959 L52.635,11.959 C54.609,11.959 56.224,13.573 56.224,15.546 L56.224,16.144 L15.551,16.144 C12.262,16.144 9.570,18.835 9.570,22.124 L9.570,52.021 C9.570,53.994 7.955,55.608 5.981,55.608 L5.981,55.608 ZM61.607,52.021 C61.607,53.994 59.992,55.608 58.019,55.608 L10.766,55.608 C11.544,54.592 11.963,53.336 11.963,52.021 L11.963,22.124 C11.963,20.150 13.578,18.536 15.551,18.536 L58.019,18.536 C59.992,18.536 61.607,20.150 61.607,22.124 L61.607,52.021 Z"/>
						</svg>
					</div>
					<div class="type regular-font mt-3"><?php echo $term->name ?></div>
				</a>
			</div>
<?php
		}

}

add_action( 'init', 'redirect_non_logged_users_to_specific_page' );
function redirect_non_logged_users_to_specific_page() {

	if ( !is_user_logged_in() && $GLOBALS['pagenow'] !== 'wp-login.php' ) {

		wp_redirect( get_home_url().'/wp-login.php' );
		exit;
	}
}




add_filter('pre_get_posts', 'hide_posts_media_by_other');
function hide_posts_media_by_other($query) {
	global $pagenow;
	if (( 'edit.php' != $pagenow && 'upload.php' != $pagenow ) || !$query->is_admin) {
		return $query;
	}
	if (!current_user_can('manage_options')) {
		global $user_ID;
		$query->set('author', $user_ID);
	}
	return $query;
}
add_filter('posts_where', 'hide_attachments_wpquery_where');
function hide_attachments_wpquery_where($where) {
	global $current_user;
	$user = wp_get_current_user();
	if ( in_array( 'emp-private', (array) $user->roles ) ) {
		if (isset($_POST['action'])) {
			if ($_POST['action'] == 'query-attachments') {
				$where .= ' AND post_author=' . $current_user->data->ID;
			}
		}
	}

	return $where;
}




add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
function load_custom_wp_admin_style() {
	wp_enqueue_script( 'my_custom_script2', get_template_directory_uri() . '/assets/js/upload-to-edit.js' );
}


add_action('wp_dashboard_setup', 'remove_default_dashboard_widgets' );
function remove_default_dashboard_widgets() {

	// Main column:
	remove_action('welcome_panel', 'wp_welcome_panel');
	remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box('dashboard_activity', 'dashboard', 'normal');
	remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );

	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );

}

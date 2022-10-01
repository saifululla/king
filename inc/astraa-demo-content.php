<?php 

function astraa_import_files() {
    return [
      [
        'import_file_name'           => 'Astraa Data Demo Import ',
        'categories'                 => 'Categories',
        'import_file_url'            => 'demo-data/astraa-demo.xml',
        'import_widget_file_url'     => 'demo-data/astraa-widgets.wie',
        'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'astraa' ),
      ],
     
    ];
  }
  add_filter( 'ocdi/import_files', 'astraa_import_files' );

  function astraa_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'astraa_after_import_setup' );
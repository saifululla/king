<?php 

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';


function astraa_register_required_plugins(){
    $plugins = array(
        array(
            'name'               => 'Advanced Custom Fields', // The plugin name.
			'slug'               => 'advanced-custom-fields', // The plugin slug (typically the folder name).
            'required'           => true,
        ),
        array(
			'name'      => 'CODESTAR FRAMEWORK',
			'slug'      => 'codestar-framework',
            'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
			'required'  => true,
		), 
        // array(
		// 	'name'      => 'Astraa Custom Post Type',
		// 	'slug'      => 'astraa-custom-post-type',
        //     'source' => 'https://www.dropbox.com/sh/rn837lamkb78tld/AAC_vKcJek8n6NtukCpJZVj_a?dl=1',
		// 	'required'  => true,
		// ), 
         array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
            //'source' => 'https://github.com/awesomemotive/one-click-demo-import/archive/refs/heads/master.zip',
			'required'  => true,
		), 
         array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
   );
   $config = array(
    array(
        'id'           => 'astraa_activation_plugins', 
        'menu'         => 'astraa-activation-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug. 
        'has_notices'  => true,   
    )
   );

   tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'astraa_register_required_plugins' );
<?php
/**
 * Custom functions
 */

add_theme_support( 'custom-header' );
add_action( 'after_setup_theme', 'scpt' );

function scpt() {
    if ( ! class_exists( 'Super_Custom_Post_Type' ) )
        return;
	
	$projects = new Super_Custom_Post_Type( 
		'projects', 
		'Project', 
		'Projects',
		array( 'supports' => array( 'title', 'thumbnail' ) )
	);

	$projects->set_icon( 'beaker' );

	$projects->add_meta_box( array(
		'id' => 'project-info',
		'context' => 'side',
		'fields' => array(
			'github_page' => array('placeholder' => 'ex. username/reponame'),
			'project_discusson' => array('placeholder' => 'link to project discussion board'),
			'project_trello' => array('placeholder' => 'link to project trello board'),
			'project_status' => array( 'type' => 'select', 'options' => array( 'in Development', 'in Production', 'Wishlist' ) ),
			'start_date' => array( 'type' => 'date' )
		)
	) );

	$projects->add_meta_box( array(
		'id' => 'project-information',
		'title' => 'Project Information',
		'fields' => array(
			'introduction' => array( 'type' => 'wysiwyg', 'label' => 'Project Introduction' ),
			'end_state' => array( 'type' => 'wysiwyg', 'label' => 'Project End State' ),
			'community_value' => array( 'type' => 'wysiwyg', 'label' => 'Community Value' )
		)
	) );
}


?>

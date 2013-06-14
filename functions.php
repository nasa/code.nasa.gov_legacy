<?php

register_post_type('code_projects', array(
	'label' => __('Projects'),
	'singular_label' => __('Project'),
	'public' => true,
	'has_archive'=> true,
	'show_ui' => true, // UI in admin panel
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array("slug" => "project"), // Permalinks format
	'supports' => array('title','editor')
));

register_taxonomy("Centers", array("code_projects"), array("hierarchical" => true, "label" => "Centers", "singular_label" => "Centers", "rewrite" => true));

register_taxonomy("Version Control System", array("code_projects"), array("hierarchical" => true, "label" => "Version Control Systems", "singular_label" => "Version Control System", "rewrite" => true));

register_taxonomy("Tags", array("code_projects"), array("hierarchical" => false, "label" => "Tags", "singular_label" => "Tag", "rewrite" => true));

register_taxonomy("Repository", array("code_projects"), array("hierarchical" => true, "label" => "Repository", "singular_label" => "Repository", "rewrite" => true));


register_taxonomy("License", array("code_projects"), array("hierarchical" => true, "label" => "License", "singular_label" => "License", "rewrite" => true));

register_taxonomy("Language", array("code_projects"), array("hierarchical" => true, "label" => "Language", "singular_label" => "Language", "rewrite" => true));

?>
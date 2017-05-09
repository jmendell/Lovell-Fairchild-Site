<?php

function header_theme_overrides () {
	$post_types = array( 'clients' => 'theme-dark' );

	foreach ($post_types as $type => $value) {

		if (get_post_type() == $type) {
			return $value;
		}

	}

}
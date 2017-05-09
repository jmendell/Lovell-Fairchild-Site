<?php 

function format_terms ($terms) {

	$output = '<ul class="categories">';
	$count = count($terms);
	$i = 0;

	foreach ($terms as $term) {

		if ($i < ($count - 1)) {
			$item = '<li>' . $term->name . ',</li>';
		}else{
			$item = '<li>' . $term->name . '</li>';
		}

		$output .= $item;
		$i++;
	}

	$output .= '</ul>';

	return $output;
};

function simple_cats () {
	$output = '<ul class="categories">';
	$i = 0;

	$cats = get_the_category();
	$count = count($cats);

	foreach ($cats as $cat) {

		if ($i < ($count - 1)) {
			$item = '<li>' . $cat->name . ',</li>';
		}else{
			$item = '<li>' . $cat->name . '</li>';
		}

		$output .= $item;
		$i++;
	}

	$output .= '</ul>';

	return $output;
};

function sort_categories_by_order ($terms) {

	usort($terms, function($a, $b) {

		$term_a_order = json_decode($a->description)[0]->order;
		$term_b_order = json_decode($b->description)[0]->order;

		if($term_a_order === $term_b_order) return 0;
		return ($term_a_order < $term_b_order) ? -1 : 1;

	});

	return $terms;
}
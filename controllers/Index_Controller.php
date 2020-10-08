<?php

class Index_Controller {
	public function index(Base $fw, array $args = []): void {
		echo "Hello ".join(',', $fw->people)."! Eat a {$fw->get('sandwich')} on a {$_GET['sandwich_type']} type of bread.";
		echo '<pre>';
		print_r($fw);
		echo '</pre>';
	}
}
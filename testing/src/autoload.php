<?php
spl_autoload_register(
	function ($class) {
		static $classes;
		if ($classes == null) {
			$classes = array(
				'money' => '/Money.php'
				);
		}
		$cn = strtolower($class);

		if (isset($classes[$cn])) {
			require __DIR__ . $classes[$cn];
		}
	},
	true,
	false
);
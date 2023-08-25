<?php declare(strict_types = 1);

if (!function_exists('dd')) {
	/**
	 * @param mixed ...$args
	 * @return void
	 */
	function dd(...$args): void {
		foreach ($args as $x) {
			if (function_exists('dump')) {
				dump($x);
			} else {
				var_dump($x);
			}

			die(1);
		}
	}
}

<?php
/**
 * This is just to test the rules are working.
 *
 * @author John Wick
 * @package MyPackage
 */

$bad_array_notation = [ 1, 2, 3 ];

function f() {
	// Indented using spaces.
	$x = 1;

	// Not Yoda.
	if ( $x === 1 ) {
	}
}

$translatable_string_with_wrong_domain = __( 'Hi there!', 'woocommerce' );

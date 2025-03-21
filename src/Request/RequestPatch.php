<?php
namespace KrokedilKlarnaPaymentsDeps\KlarnaOrderManagement\Request;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Base class for all request classes.
 */
abstract class RequestPatch extends Request {
	/**
	 * Class constructor.
	 *
	 * @param array $arguments The request arguments.
	 */
	public function __construct( $arguments ) {
		parent::__construct( $arguments );
		$this->method = 'PATCH';
	}
}

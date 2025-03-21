<?php
namespace Krokedil\KlarnaOrderManagement\Request;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Base class for all request classes.
 */
abstract class RequestGet extends Request {
	/**
	 * Class constructor.
	 *
	 * @param array $arguments The request arguments.
	 */
	public function __construct( $arguments ) {
		parent::__construct( $arguments );
		$this->method = 'GET';
	}
}

<?php
namespace Krokedil\KlarnaOrderManagement\Request;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * POST request class
 */
abstract class RequestPost extends Request {
	/**
	 * Class constructor.
	 *
	 * @param array                 $arguments The request arguments.
	 * @param KlarnaOrderManagement $order_management The order management instance.
	 */
	public function __construct( $arguments, $order_management ) {
		parent::__construct( $arguments, $order_management );
		$this->method = 'POST';
	}
}

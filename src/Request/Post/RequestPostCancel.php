<?php
namespace Krokedil\KlarnaOrderManagement\Request\Post;

use Krokedil\KlarnaOrderManagement\Request\RequestPost;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * POST request class for order cancellation
 */
class RequestPostCancel extends RequestPost {
	/**
	 * Class constructor.
	 *
	 * @param array                 $arguments The request arguments.
	 * @param KlarnaOrderManagement $order_management The order management instance.
	 */
	public function __construct( $arguments, $order_management ) {
		parent::__construct( $arguments, $order_management );
		$this->log_title = 'Cancel Klarna order';
	}

	/**
	 * Get the request URL for this type of request.
	 *
	 * @return string
	 */
	protected function get_request_url() {
		return $this->get_api_url_base() . 'ordermanagement/v1/orders/' . $this->klarna_order_id . '/cancel';
	}
}

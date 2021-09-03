<?php

namespace Requests\Tests\Mock;

use Requests_Transport;

class TestTransportMock implements Requests_Transport {
	public function request($url, $headers = array(), $data = array(), $options = array()) {
		return '';
	}
	public function request_multiple($requests, $options) {
		return [];
	}
	public static function test($capabilities = array()) {
		// Time travel is not yet supported by this transport.
		if (isset($capabilities['time-travel']) && $capabilities['time-travel']) {
			return false;
		}
		return true;
	}
}

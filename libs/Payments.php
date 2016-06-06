<?php

namespace Marketcloud;



class Payments extends ApiResource {
	


	public static function create($data) {
		
		if (!isset($data["method"]))
			throw new Exception("Missing required parameter 'method'.");
		if (!isset($data["order_id"]))
			throw new Exception("Missing required parameter 'order_id'.");

		return parent::_POST("/payments",$data);
	}

	
}

?>
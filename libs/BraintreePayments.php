<?php

namespace Marketcloud;



class BraintreePayments extends Payments {
	


	public static function create($data) {

		$data["method"] = "Braintree";

		return parent::create($data);

	}


	public static function generateClientToken() {
		return parent::_POST("/integrations/braintree/clientToken");
	}


	

	
}

?>
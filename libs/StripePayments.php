<?php

namespace Marketcloud;



class StripePayments extends Payments {
	


	public static function create($data) {

		$data["method"] = "Stripe";

		return parent::create($data);

	}


	

	
}

?>
<?php

namespace Marketcloud;



class PaymentMethods extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/paymentMethods",$query);
	}

	public static function getById($id) {
		return parent::_GET("/paymentMethods/".$id);
	}

	public static function create($data) {
		return parent::_POST("/paymentMethods",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/paymentMethods/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/paymentMethods/".$id);
	}
}

?>
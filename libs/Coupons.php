<?php

namespace Marketcloud;



class Coupons extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/coupons",$query);
	}

	public static function getById($id) {
		return parent::_GET("/coupons/".$id);
	}

	public static function create($data) {
		return parent::_POST("/coupons",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/coupons/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/coupons/".$id);
	}
}

?>
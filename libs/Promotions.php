<?php

namespace Marketcloud;



class Promotions extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/promotions",$query);
	}

	public static function getById($id) {
		return parent::_GET("/promotions/".$id);
	}

	public static function getByCart($cart_id) {
		return parent::_GET("/promotions/cart/".$cart_id);
	}

	public static function create($data) {
		return parent::_POST("/promotions",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/promotions/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/promotions/".$id);
	}
}

?>
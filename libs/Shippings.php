<?php

namespace Marketcloud;



class Shippings extends ApiResource {
	
	public static function get() {
		return parent::_GET("/shippings");
	}

	public static function getById($id) {
		return parent::_GET("/shippings/".$id);
	}

	public static function create($data) {
		return parent::_POST("/shippings",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/shippings/".$id,$data);
	}
}

?>
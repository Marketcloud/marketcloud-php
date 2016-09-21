<?php

namespace Marketcloud;



class Shippings extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/shippings",$query);
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

	public static function delete($id) {
		return parent::_DELETE("/shippings/".$id);
	}
}

?>
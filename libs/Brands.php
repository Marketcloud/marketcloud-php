<?php

namespace Marketcloud;



class Brands extends ApiResource {
	
	public static function get() {
		return parent::_GET("/brands");
	}

	public static function getById($id) {
		return parent::_GET("/brands/".$id);
	}

	public static function create($data) {
		return parent::_POST("/brands",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/brands/".$id,$data);
	}
}

?>
<?php

namespace Marketcloud;



class Products extends ApiResource {
	
	public static function get($query) {
		return parent::_GET("/products",$query);
	}

	public static function getById($id) {
		return parent::_GET("/products/".$id);
	}

	public static function create($data) {
		return parent::_POST("/products",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/products/".$id,$data);
	}

	public static function delete($id) {
		return parent::_DELETE("/products/".$id);
	}
}

?>
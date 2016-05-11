<?php

namespace Marketcloud;



class Categories extends ApiResource {
	
	public static function get() {
		return parent::_GET("/categories");
	}

	public static function getById($id) {
		return parent::_GET("/categories/".$id);
	}

	public static function create($data) {
		return parent::_POST("/categories",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/categories/".$id,$data);
	}
}

?>
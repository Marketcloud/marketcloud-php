<?php

namespace Marketcloud;



class Orders extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/orders",$query);
	}

	public static function getById($id) {
		return parent::_GET("/orders/".$id);
	}

	public static function create($data) {
		return parent::_POST("/orders",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/orders/".$id,$data);
	}

	public static function delete($id) {
		return parent::_DELETE("/orders/".$id);
	}
}

?>
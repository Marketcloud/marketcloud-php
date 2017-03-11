<?php

namespace Marketcloud;



class Collections extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/collections",$query);
	}

	public static function getById($id) {
		return parent::_GET("/collections/".$id);
	}

	public static function create($data) {
		return parent::_POST("/collections",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/collections/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/collections/".$id);
	}
}

?>
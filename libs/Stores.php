<?php

namespace Marketcloud;



class Stores extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/stores",$query);
	}

	public static function getById($id) {
		return parent::_GET("/stores/".$id);
	}

	public static function create($data) {
		return parent::_POST("/stores",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/stores/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/stores/".$id);
	}
}

?>
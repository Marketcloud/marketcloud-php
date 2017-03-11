<?php

namespace Marketcloud;



class Addresses extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/addresses",$query);
	}

	public static function getById($id) {
		return parent::_GET("/addresses/".$id);
	}

	public static function create($data) {
		return parent::_POST("/addresses",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/addresses/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/addresses/".$id);
	}
}

?>
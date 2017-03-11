<?php

namespace Marketcloud;



class Contents extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/contents",$query);
	}

	public static function getById($id) {
		return parent::_GET("/contents/".$id);
	}

	public static function create($data) {
		return parent::_POST("/contents",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/contents/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/contents/".$id);
	}
}

?>
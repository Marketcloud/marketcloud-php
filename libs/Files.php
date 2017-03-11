<?php

namespace Marketcloud;



class Files extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/files",$query);
	}

	public static function getById($id) {
		return parent::_GET("/files/".$id);
	}

	public static function create($data) {
		return parent::_POST("/files",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/files/".$id, $data);
	}

	public static function delete($id) {
		return parent::_DELETE("/files/".$id);
	}
}

?>
<?php

namespace Marketcloud;



class Users extends ApiResource {
	
	public static function get() {
		return parent::_GET("/users");
	}

	public static function getById($id) {
		return parent::_GET("/users/".$id);
	}

	public static function create($data) {
		return parent::_POST("/users",$data);
	}

	public static function update($id,$data) {
		return parent::_PUT("/users/".$id,$data);
	}
}

?>
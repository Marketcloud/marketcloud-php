<?php

namespace Marketcloud;



class Users extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/users",$query);
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

	public static function authenticate($email,$password) {
		$data = array(
			"email" => $email,
			"password" => $password
		);
		return parent::_POST("/users/authenticate",$data);
	}

	public static function delete($id) {
		return parent::_DELETE("/users/".$id);
	}
}

?>
<?php

namespace Marketcloud;



class Carts extends ApiResource {
	
	public static function get($query = array()) {
		return parent::_GET("/carts",$query);
	}

	public static function getById($id) {
		return parent::_GET("/carts/".$id);
	}

	public static function create($data) {
		return parent::_POST("/carts",$data);
	}

	public static function delete($id) {
		return parent::_DELETE("/carts/".$id);
	}

	public static function update($id,$items) {
		$payload  = array(
				'op' => 'update',
				'items' => $items

		 );
		return parent::_PATCH("/carts/".$id,$payload);
	}

	public static function remove($id,$items) {
		$payload  = array(
				'op' => 'remove',
				'items' => $items

		 );
		return parent::_PATCH("/carts/".$id,$payload);
	}

	public static function add($id,$items) {
		$payload  = array(
				'op' => 'add',
				'items' => $items

		 );
		return parent::_PATCH("/carts/".$id,$payload);
	}
}

?>
<?php

namespace Marketcloud;



class Application extends ApiResource {
	
	public static function get() {
		return parent::_GET("/application");
	}
}

?>
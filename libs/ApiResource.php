<?php
namespace Marketcloud;



abstract class ApiResource {

	// This will keep record of how many retries we make
	private static $retries = 0;
	




	public static function _POST($url,$body = '{}') {

		$real_url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;


		$response = \Httpful\Request::post($real_url)
			    ->sendsJson()
			    ->body($body)
			    ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			    ->send();

		// We check the response code
		// If the code is 401, then the Token might be expired.
		// If it is the case, we re-authenticate the client using the stored credentials.
		// 
		
		if ($response->code == 401) {

			// We have to re-authenticate
			$auth_response = \Marketcloud\Marketcloud::authenticate();
			return self::_POST($url,$body);
		} else {
			return $response;
		}
		

	}
	public static function _GET($url,$params = null) {
		$real_url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;

		if (!is_null($params)) {
			$query_string = http_build_query($params);
			$real_url = $real_url.'?'.$query_string;
		}

		$response = \Httpful\Request::get($real_url)
			  ->expectsJson()
			  ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			  ->send();
	    

	    // We check the response code
		// If the code is 401, then the Token might be expired.
		// If it is the case, we re-authenticate the client using the stored credentials.
		// 
		
		if ($response->code == 401) {
			// We have to re-authenticate
			$auth_response = \Marketcloud\Marketcloud::authenticate();
			return self::_GET($url,$params);
		} else {
			return $response;
		}
	}
	public static function _PUT($url,$body = '{}') {
		$real_url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;
		$response = \Httpful\Request::put($real_url)
			  ->sendsJson()
			  ->body($body)
			  ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			  ->send();

		// We check the response code
		// If the code is 401, then the Token might be expired.
		// If it is the case, we re-authenticate the client using the stored credentials.
		// 
		
		if ($response->code == 401) {
			// We have to re-authenticate
			$auth_response = \Marketcloud\Marketcloud::authenticate();
			return self::_PUT($url,$body);
		} else {
			return $response;
		}

	}


	public static function _PATCH($url,$body = '{}') {
		$real_url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;
		$response = \Httpful\Request::patch($real_url)
			  ->sendsJson()
			  ->body($body)
			  ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			  ->send();

		// We check the response code
		// If the code is 401, then the Token might be expired.
		// If it is the case, we re-authenticate the client using the stored credentials.
		// 
		
		if ($response->code == 401) {
			// We have to re-authenticate
			$auth_response = \Marketcloud\Marketcloud::authenticate();
			return self::_PATCH($url,$body);
		} else {
			return $response;
		}

	}




	public static function _DELETE($url) {
		$real_url = \Marketcloud\Marketcloud::$apiBaseUrl.$url;


		$response = \Httpful\Request::delete($real_url)
			  ->expectsJson()
			  ->addHeader('Authorization', \Marketcloud\Marketcloud::getAuthorizationHeader())   
			  ->send();
	    

	    // We check the response code
		// If the code is 401, then the Token might be expired.
		// If it is the case, we re-authenticate the client using the stored credentials.
		// 
		
		if ($response->code == 401) {
			// We have to re-authenticate
			$auth_response = \Marketcloud\Marketcloud::authenticate();
			return self::_DELETE($url);
		} else {
			return $response;
		}
	}
}

?>
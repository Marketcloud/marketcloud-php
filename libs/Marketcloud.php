<?php

namespace Marketcloud;


class Marketcloud
{
    // @var array The Marketcloud API key to be used for requests.
    public static $public_key = null;
    public static $secret_key = null;
    public static $access_token = null;


    // @var string The base URL for the Marketcloud API.
    //public static $apiBaseUrl = 'http://api.marketcloud.it/v0';
    public static $apiBaseUrl = 'http://localhost:5000/v0';
    
    

    // @var string|null The version of the Marketcloud API to use for requests.
    public static $apiVersion = null;


    const VERSION = '0.0.1';

    /**
     * @return string The API key used for requests.
     */
    public static function getCredentials()
    {
        return array(
            "public_key" => self::$public_key,
            "secret_key" => self::$secret_key
        );
    }

    public static function getAuthorizationHeader() {
        if (null == self::$access_token)
            return self::$public_key;
        else
            return self::$public_key.':'.self::$access_token;
    }
    /**
     * Sets the API key to be used for requests.
     *
     * @param string $credentials->public_key
     * @param string $credentials->secret_key
     */
    public static function setCredentials($credentials=array())
    {
        self::$public_key = $credentials["public_key"];
        self::$secret_key = $credentials["secret_key"];
    }

    /**
     * Sets the access_token. Internally applies stripcslashes to the string parameter.
     *
     * @param string $access_token
     */
    public static function setAccessToken($access_token)
    {
        self::$access_token = stripcslashes($access_token);
    }
    /**
     *  @return string The API version used for requests. null if we're using the
     *    latest version.
     */
    public static function getApiVersion()
    {
        return self::$apiVersion;
    }
    /**
     * @param string $apiVersion The API version to use for requests.
     */
    public static function setApiVersion($apiVersion)
    {
        self::$apiVersion = $apiVersion;
    }


    public static function authenticate()
    {
        
        $timestamp = round(microtime(true) * 1000);
        $hashed_secret = base64_encode( hash('sha256',self::$secret_key.$timestamp,true) );
        $url = self::$apiBaseUrl."/tokens";

        $payload = array(
            'publicKey' => self::$public_key,
            'secretKey' => $hashed_secret,
            'timestamp' => $timestamp
        );
        var_dump($payload);
        echo "Invio la richiesta di autenticazione";
        $response = \Httpful\Request::post($url)
                ->sendsJson()
                ->body($payload) 
                ->send();
        echo json_encode( (array)$response->body );
        self::$access_token = $response->body->token;
        return $response->body->token;

    }
   
   
}
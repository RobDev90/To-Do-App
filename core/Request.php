<?php

class Request
{
    public static function uri()
    {
    	//trims slashes and ensures any query strings are removed - parse url - php url path only
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
    	return $_SERVER['REQUEST_METHOD'];
    }
}
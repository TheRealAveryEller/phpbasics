<?php

class Request {
    public static function uri() {
        // /names?name=Avery
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}
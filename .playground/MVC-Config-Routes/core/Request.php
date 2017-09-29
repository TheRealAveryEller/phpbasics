<?php

class Request {
    public static function uri() {
        if(isset($_SERVER['PATH_INFO']))
        return trim($_SERVER['PATH_INFO'], '/');
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
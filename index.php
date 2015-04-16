<?php

define( 'DX_ROOT_DIR', dirname( __FILE__ ) . '/' );
define( 'DX_ROOT_PATH', basename( dirname( __FILE__ ) ) . '/' );

$request = $_SERVER['REQUEST_URI'];
$request_home = '/' . DX_ROOT_PATH;

$controller = 'master';
$method = 'index';
$param = array();

if ( ! empty( $request ) ) {
    if( 0 === strpos( $request, $request_home ) ) {
        $request = substr( $request, strlen( $request_home ) );

        $components = explode('/', $request, 3);

        if(1 < count($components)){
            list($controller, $method) = $components;

            if(isset($components[2])){
                $param = $components[2];
            }
        }
    }
}
var_dump($controller);
var_dump($method);
var_dump($param);
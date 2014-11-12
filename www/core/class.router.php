<?php

/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 12.11.2014
 * Time: 11:16
 */
/**
 *  Example routing
 *                                  nameController    action
 * $mux->post('/product/:id', ['ProductController','updateAction'] , [
 * 'require' => [ 'id' => '\d+', ],
 * 'default' => [ 'id' => '1', ]
 * **/

class Router
{

    private static $routes = array();

    public function any()
    {
    }

    public function get($pattern, $call_method, $pattern_params)
    {
        $ready_pattern = $pattern . '/' . $pattern_params;
        $this->set('GET ', $ready_pattern, $call_method);
    }

    public function post($pattern, $call_method, $pattern_params)
    {
        $ready_pattern = $pattern . '/' . $pattern_params;
        $this->set('GET ', $ready_pattern, $call_method);
    }


    private function set($type_request, $pattern, $callback)
    {
        if (!function_exists($callback)) {
            new Exception("Method $callback not exists");
        }
        self::$routes[$type_request][$pattern] = $callback;
    }
                        /**    GET/POST    product/id/1 **/
    public function process($method, $uri) {
        if (in_array($method, array('GET', 'POST'))) {
            new Exception("Request method should be GET or POST");
        }

        // Выполнение роутинга
        // Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
        $active_routes = self::$routes[$method];

        // Для всех роутов
        foreach ($active_routes as $pattern => $callback) {
            // Если REQUEST_URI соответствует шаблону - вызываем функцию
            if (preg_match_all("/$pattern/", $uri, $matches) !== false) {
                // вызываем callback
                $callback();
                // выходим из цикла
                break;
            }
            $matches = array();
        }
    }
}
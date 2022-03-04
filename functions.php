<?php
    
    require_once('./vendor/autoload.php');
    use GuzzleHttp\Client;
    function get_client() {
        

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        return $response;
    }

    function make_request() {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        return $client;
    }

    function get_films() {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        return $client;
    }


    var_dump(get_client());
    var_dump(make_request());
?>
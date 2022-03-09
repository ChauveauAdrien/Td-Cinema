<?php
    function pretty_print_r($var): void {
        echo '<pre>' . print_r($var, true) . '</pre>';
    };

    require_once('../Td-cinema/config/config.php');
    require_once('../Td-cinema/vendor/autoload.php');

    use GuzzleHttp\Client;

    function get_client() {
        $client = new Client([
            'verify' => false,
            'stream' => false,
        ]);
        return $client;
    }

    function make_request(Client $client,  string $url){
        $res = $client->get($url);
        return json_decode($res->getBody()->getContents());
    }

    function get_page() {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            return $_GET['page'];
        }else {
           return $_GET['page']=1; 
        }
    }

    function get_films() {
        $client = get_client();
        // return make_request($client, request_start_url.'/movie/popular?'.key_API."&page=3");
        return make_request($client, request_start_url.'/movie/popular?'.key_API."&language=fr&page=".get_page());
    }



    
    function verify_films_id(){
        if (isset($_GET['film'])) {
            return get_film_by_id($_GET['film']);
            header('Location: http://td-cinema.test/details.php');
        }
    }




    function get_film_by_id(int $id) {
        $client = get_client();
        return make_request($client, request_start_url."/movie/$id?".key_API."&language=fr");
    }


    function search_movies($search) {
        $client = get_client();
        return make_request($client, request_start_url."/search/movie?".key_API."&query=".$search);
    }

    function is_search_exist() {
        return isset($_POST['search']);
    }

    


    // echo $_GET['search'];
    // pretty_print_r(is_search_exist());
    // pretty_print_r(get_films());
    // pretty_print_r(get_film_by_id(476669));
    // pretty_print_r(get_film_by_id(476669)->poster_path);
?>
  
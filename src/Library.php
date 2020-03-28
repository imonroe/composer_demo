<?php

namespace imonroe\composer_demo;

use GuzzleHttp\Client;

class Library
{

    public function sayHello($name = '')
    {
        echo('Hello ' . $name . PHP_EOL);
    }

    public function checkGoogle()
    {
        $client = new Client();
        $response = $client->get('https://www.google.com');
        return $response->getStatusCode();
    }
}

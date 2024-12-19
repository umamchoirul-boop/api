<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;



class StockController extends BaseController
{
    use ResponseTrait;

    public function getData()
    {
        $client = service('curlrequest');
        $response = $client->request('GET', 'http://localhost:8084/cek', ['allow_redirects' => false]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        return $this->respond([
            'status' => $statusCode,
            'data' => json_decode($body)
        ], $statusCode);
    }
}
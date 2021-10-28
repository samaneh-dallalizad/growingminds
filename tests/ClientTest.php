<?php

use App\Controllers\ClientController;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testItCanGetByName()
    {
        $clientJson = '{
            "id": 1,
            "name": "client1",
            "donations": [
                {
                    "id": 1,
                    "client_id": 1,
                    "currency": "EUR",
                    "amount": 20
                },
                {
                    "id": 2,
                    "client_id": 1,
                    "currency": "EUR",
                    "amount": 25
                },
                {
                    "id": 3,
                    "client_id": 1,
                    "currency": "USD",
                    "amount": 27
                },
                {
                    "id": 4,
                    "client_id": 1,
                    "currency": "USD",
                    "amount": 30
                }
            ]
        }';
        $client = new ClientController();
        $this->assertJsonStringEqualsJsonString($clientJson, $client->getByName("client1"));
    }

}